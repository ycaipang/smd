/**
 * @file
 * Address autocomplete behavior.
 */

(function($, Drupal) {
  Drupal.behaviors.addressAutocompletePhoton = {
    attach(context, settings) {
      // Define custom autocomplete settings.
      const autocompleteSettings = {
        limit: parseInt(settings.addressAutocomplete.limit, 10),
        minLength: parseInt(settings.addressAutocomplete.min_length, 10),
        mode: settings.addressAutocomplete.managed_fields_display,
        removeDuplicates: settings.addressAutocomplete.remove_duplicates
      };

      // If current language is available is Drupal settings path, use it !
      if (
        typeof settings.path.currentLanguage !== "undefined" &&
        parseInt(settings.path.currentLanguage, 10)
      ) {
        autocompleteSettings.lang = settings.path.currentLanguage;
      }

      // Initialize address autocomplete plugin.
      $(".address-autocomplete-input", context)
        .once("address-autocomplete-photon")
        .addressAutocompletePhoton(autocompleteSettings);
    }
  };
})(jQuery, Drupal);
