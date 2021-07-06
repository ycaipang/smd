/**
 * @file
 * Address autocomplete for Photon API plugin.
 */

(function($) {
  // Parameters.
  const pluginName = "addressAutocompletePhoton";
  const defaults = {
    lang: $("html").attr("lang"),
    limit: 3,
    minLength: 1,
    mode: "hide",
    removeDuplicates: true,
    wrapper: ".address-autocomplete-wrapper"
  };

  // Plugin constructor.
  const Plugin = function(element, options, i) {
    // Plugin exposed to window
    window[pluginName + i] = this;

    // Options
    this.settings = $.extend({}, defaults, options);

    // Address managed fields list.
    this.addressFields = {
      organization: ".organization",
      route: ".address-line1",
      route2: ".address-line2",
      sublocality_level_1: ".sublocality-level1",
      postal_code: ".postal-code",
      locality: ".locality",
      state: ".administrative-area",
      administrative_area_level_1: ".state",
      country: ".country"
    };

    // Properties to format in good order.
    this.properties2Format = [
      "name",
      "housenumber",
      "street",
      "postcode",
      "city",
      "state",
      "country"
    ];

    // DOM elements
    this.$input = $(element).attr(`data-${pluginName}-id`, pluginName + i);
    this.$wrapper = this.$input.closest(this.settings.wrapper);
    this.$countryField = $(this.addressFields.country, this.$wrapper);

    // Initialize plugin.
    this.init();
  };

  // Shortcut for Plugin object prototype
  Plugin.fn = Plugin.prototype;

  /**
   * Initialize plugin.
   */
  Plugin.fn.init = function() {
    // Hide/Disable all other address fields.
    for (const [component, componentClass] of Object.entries(
      this.addressFields
    )) {
      if (component === "country") {
        continue;
      }

      this.hideField(this.$wrapper.find(componentClass));
    }

    this.events();
  };

  /**
   * Plugin events
   */
  Plugin.fn.events = function() {
    const that = this;

    // Initialize autocomplete.
    this.$input.autocomplete({
      autoFocus: true,
      minLength: this.settings.minLength,
      source(request, response) {
        that.autocompleteSource(request, response);
      },
      change(event, ui) {
        that.autocompleteCheckValidity(event, ui);
      },
      select(event, ui) {
        that.$input.get(0).setCustomValidity("");

        that.autocompleteSelect(event, ui);
      }
    });
  };

  /**
   * jQuery autocomplete check field validity.
   *
   * @see https://api.jqueryui.com/autocomplete/#event-change
   *
   * @param {Event} event
   *   The current event.
   * @param {Object} ui
   *   The selected item.
   */
  Plugin.fn.autocompleteCheckValidity = function(event, ui) {
    // In case of field is required and user not select item, add custom validity.
    if (
      this.$input.prop("required") &&
      (ui.item === null || typeof ui.item === "undefined")
    ) {
      this.$input
        .get(0)
        .setCustomValidity(Drupal.t("You must to select a suggested address."));
      this.$input.get(0).reportValidity();
    }
  };

  /**
   * jQuery autocomplete select event.
   *
   * @see https://api.jqueryui.com/autocomplete/#event-select
   *
   * @param {Event} event
   *   The change event.
   * @param {Object} ui
   *   The selected item.
   */
  Plugin.fn.autocompleteSelect = function(event, ui) {
    if (typeof ui.item.result.properties.type === "undefined") {
      return;
    }

    const { properties } = ui.item.result;

    // Mapping between response item properties and address fields.
    const responseMapping = {
      route: "name",
      sublocality_level_1: "locality",
      locality: "city",
      administrative_area_level_1: "state",
      country: "countrycode",
      postal_code: "postcode",
      state: "state"
    };

    // Specific mapping by type of result.
    if (properties.type === "city") {
      responseMapping.route = undefined;
      responseMapping.locality = "name";
    } else if (properties.type === "house") {
      responseMapping.organization = "name";
      responseMapping.route = "street";
    }

    for (const [component, addressField] of Object.entries(
      this.addressFields
    )) {
      const $componentField = this.$wrapper.find(addressField);
      let value = "";

      if (!$componentField.length) {
        continue;
      }

      if (
        responseMapping.hasOwnProperty(component) &&
        properties.hasOwnProperty(responseMapping[component])
      ) {
        value = properties[responseMapping[component]];
      }

      // The route is a concatenate of number and street.
      if (
        component === "route" &&
        typeof properties.housenumber !== "undefined"
      ) {
        value = Drupal.t("@street_number @street", {
          "@street_number": properties.housenumber,
          "@street": value
        });
      }

      $componentField.val(value);

      // In ccase of field has attribute "readonly", we need to remove it to enable browser "checkValidity".
      this.displayField($componentField);

      // Photon response is empty or component field is invalid, display it (or make it focusable).
      if (!$componentField.get(0).checkValidity()) {
        $componentField.get(0).reportValidity();
      } else {
        // Ensure the field is hidden or not focusable.
        this.hideField($componentField);
      }
    }
  };

  /**
   * jQuery autocomplete source option.
   *
   * @see https://api.jqueryui.com/autocomplete/#option-source
   *
   * @param {Object} request
   *   The request object.
   * @param {Function} response
   *   The response function.
   */
  Plugin.fn.autocompleteSource = function(request, response) {
    const that = this;
    const countryValue = $(this.addressFields.country, this.$wrapper).val();
    const countryValueLabel = $(
      `option[value="${countryValue}"]`,
      this.$countryField
    ).text();
    const searchTerm = `${request.term} ${countryValueLabel}`;

    $.getJSON(
      "https://photon.komoot.io/api/",
      {
        lang: this.settings.lang,
        limit: this.settings.limit,
        q: searchTerm
      },
      function(data) {
        if (typeof data.features === "undefined") {
          response();
          return;
        }

        const autocompleteResults = [];

        /**
         * @param {int} index
         * @param {PhotonResult} result
         */
        $.each(data.features, function(index, result) {
          // In some cases, the Photon API result may contains multiple postal codes.
          that.shiftPostalCodes(result.properties);

          const formattedValue = that.formatProperties(result.properties);

          // The Photon API can generate duplicates for some locations (i.e. cities that are states for example), this option will remove them.
          if (that.settings.removeDuplicates) {
            const existingResults = $.grep(autocompleteResults, function(
              resultItem
            ) {
              return resultItem.value === formattedValue;
            });

            if (existingResults.length === 0) {
              autocompleteResults.push({
                value: formattedValue,
                result
              });
            }
          } else {
            autocompleteResults.push({
              value: formattedValue,
              result
            });
          }
        });

        response(autocompleteResults);
      }
    );
  };

  /**
   * Display (or set focusable) given field.
   *
   * @param {jQuery} $componentField
   *   The component field jQuery object.
   */
  Plugin.fn.displayField = function($componentField) {
    if (this.settings.mode === "hide") {
      this.$wrapper.find(`label[for="${$componentField.attr("id")}"]`).show();
      $componentField.show();
    } else {
      $componentField.removeAttr("readonly");
    }
  };

  /**
   * Hide (or set readonly) given field.
   *
   * @param {jQuery} $componentField
   *   The component field jQuery object.
   */
  Plugin.fn.hideField = function($componentField) {
    if (this.settings.mode === "hide") {
      this.$wrapper.find(`label[for="${$componentField.attr("id")}"]`).hide();
      $componentField.hide();
    } else {
      $componentField.attr("readonly", "readonly");
    }
  };

  /**
   *  Format item result properties before to display it to user.
   *
   * @param {Object} properties
   *   A Photon item result properties.
   *
   * @return {string}
   *   Properties formatted.
   */
  Plugin.fn.formatProperties = function(properties) {
    const formatted = [];
    for (const property of this.properties2Format) {
      if (properties.hasOwnProperty(property)) {
        formatted.push(properties[property]);
      }
    }

    return formatted.join(", ");
  };

  /**
   * Shift "postcode" result item property if there is several postcode.
   *
   * @param {object} properties
   *   Photon item result properties.
   */
  Plugin.fn.shiftPostalCodes = function(properties) {
    if (!properties.hasOwnProperty("postcode")) {
      return;
    }

    const postalCodes = properties.postcode.split(";");
    if (postalCodes.length > 1) {
      properties.postcode = postalCodes[0];
    }
  };

  /**
   * Plugin wrapper around the constructor, preventing against multiple instantiations.
   *
   * @param {Object} options
   *   The plugin options.
   *
   * @return {Array}
   *   The plugin instantiations.
   */
  $.fn[pluginName] = function(options) {
    return this.each(function(i) {
      if (!$.data(this, `plugin_${pluginName}`)) {
        $.data(this, `plugin_${pluginName}`, new Plugin(this, options, i));
      }
    });
  };
})(jQuery);
