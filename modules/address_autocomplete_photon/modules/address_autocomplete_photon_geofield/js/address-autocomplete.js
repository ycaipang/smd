/**
 * @file
 * Address autocomplete select behaviour.
 */

(function($, Drupal) {
  Drupal.behaviors.addressAutocompletePhotonGeoField = {
    attach(context, settings) {
      const settingsAutocomplete = settings.addressAutocomplete;
      const $geoFieldLon = $(".geofield-lon", context);
      const $geoFieldLat = $(".geofield-lat", context);
      const $addressAutocompleteWrapper = $(".address-autocomplete-wrapper");
      const $addressAutocompleteField = $(
        ".address-autocomplete-input",
        $addressAutocompleteWrapper
      );

      if (!$addressAutocompleteField.length) {
        return;
      }

      if (settingsAutocomplete.managed_fields_display === "hide") {
        // Hide geofield wrapper.
        $(".field--widget-geofield-latlon", context).hide();
      } else {
        // User cannot change fields.
        $geoFieldLon.attr("readonly", "readonly");
        $geoFieldLat.attr("readonly", "readonly");
      }

      // Get autocomplete selected result.
      $addressAutocompleteField
        .once("address-autocomplete-geofield")
        .on("autocompleteselect", function(event, ui) {
          if (typeof ui.item.result.geometry === "undefined") {
            return;
          }
          // Update Geo fields.
          updateGeoFields(ui.item.result);
        });

      // In case of address fields are edited by user (when Photon API property is missing or empty).
      $addressAutocompleteField
        .once("address-autocomplete-fields-change")
        .each(function() {
          const pluginInstanceId = $(this).data("addressautocompletephotonId");

          if (typeof pluginInstanceId === "undefined") {
            return;
          }

          const pluginInstance = window[pluginInstanceId];

          for (const selector of Object.values(pluginInstance.addressFields)) {
            $(selector, $addressAutocompleteWrapper).on("change", function() {
              const $that = $(this);

              // Prevent changes by autocomplete.
              if (!$that.is(":visible") || $that.is("[readonly]")) {
                return;
              }

              $.getJSON(
                "https://photon.komoot.io/api/",
                {
                  lang: pluginInstance.settings.lang,
                  limit: pluginInstance.settings.limit,
                  q: getAddressFieldsValues(pluginInstance)
                },
                function(data) {
                  if (typeof data.features === "undefined") {
                    return;
                  }

                  // Update Geo fields.
                  updateGeoFields(data.features[0]);
                }
              );
            });
          }
        });

      /**
       * Update geo fields with Photon API result.
       *
       * @param {Object} result
       *   A Photon API result.
       */
      function updateGeoFields(result) {
        if (typeof result.geometry === "undefined") {
          return;
        }

        // Populate coordinates fields.
        $geoFieldLon.val(result.geometry.coordinates[0]);
        $geoFieldLat.val(result.geometry.coordinates[1]);
      }

      /**
       * Generate compact address from address fields.
       *
       * @param {jQuery} pluginInstance
       *   The "addressAutocompletePhoton" plugin instance.
       *
       * @return {string}
       *   The address compacted.
       */
      function getAddressFieldsValues(pluginInstance) {
        const compact = [];
        for (const selector of Object.values(pluginInstance.addressFields)) {
          const value = $(selector, $addressAutocompleteWrapper).val();

          if (value) {
            compact.push(value);
          }
        }
        return compact.join(" ");
      }
    }
  };
})(jQuery, Drupal);
