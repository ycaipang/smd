<?php

namespace Drupal\address_autocomplete_photon\Element;

use CommerceGuys\Addressing\AddressFormat\AddressFormatHelper;
use Drupal\address\Element\Address;

/**
 * Provides an address autocomplete form element. Extend address form elemnt.
 *
 * Refer to address form element to read fully documentation.
 *
 * @see \Drupal\address\Element\Address
 *
 * Usage example:
 * @code
 * $form['address'] = [
 *   '#type' => 'address_autocomplete',
 *   '#default_value' => [
 *     'given_name' => 'John',
 *     'family_name' => 'Smith',
 *     'organization' => 'Google Inc.',
 *     'address_line1' => '1098 Alta Ave',
 *     'postal_code' => '94043',
 *     'locality' => 'Mountain View',
 *     'administrative_area' => 'CA',
 *     'country_code' => 'US',
 *     'langcode' => 'en',
 *   ],
 *   '#field_overrides' => [
 *     AddressField::ORGANIZATION => FieldOverride::REQUIRED,
 *     AddressField::ADDRESS_LINE2 => FieldOverride::HIDDEN,
 *     AddressField::POSTAL_CODE => FieldOverride::OPTIONAL,
 *   ],
 *   '#available_countries' => ['DE', 'FR'],
 * ];
 * @endcode
 *
 * @FormElement("address_autocomplete")
 */
class AddressAutocomplete extends Address {

  /**
   * {@inheritdoc}
   */
  protected static function prepareDefault(array $value) {
    if (empty($value)) {
      return '';
    }
    $extracted = [];
    $toExtract = [
      'address_line1',
      'address_line2',
      'dependent_locality',
      'locality',
      'administrative_area',
      'postal_code',
      'sorting_code',
    ];
    foreach ($toExtract as $key) {
      if (isset($value[$key]) && !empty($value[$key])) {
        $extracted[] = $value[$key];
      }
    }
    return implode(', ', $extracted);
  }

  /**
   * {@inheritdoc}
   */
  protected static function addressElements(array $element, array $value) {
    $element = parent::addressElements($element, $value);
    $default = self::prepareDefault($value);

    // Set element required if at least one field is required.
    if (!empty($value['country_code'])) {
      /** @var \CommerceGuys\Addressing\AddressFormat\AddressFormat $address_format */
      $address_format = \Drupal::service('address.address_format_repository')
        ->get($value['country_code']);
      $required_fields = AddressFormatHelper::getRequiredFields(
        $address_format,
        $element['#parsed_field_overrides']
      );
    }

    $element['#attributes']['class'][] = 'address-autocomplete-wrapper';

    $element['location_field'] = [
      '#type' => 'textfield',
      '#title' => t('Address'),
      '#default_value' => $default,
      '#required' => isset($required_fields) && !empty($required_fields),
      '#attributes' => [
        'class' => [
          'address-autocomplete-input',
        ],
      ],
      '#maxlength' => 255,
      '#weight' => -99,
    ];

    $element['#attached']['library'][] = 'address_autocomplete_photon/autocomplete';
    $element['#attached']['drupalSettings']['addressAutocomplete'] =
      \Drupal::config('address_autocomplete_photon.settings')
        ->get('autocomplete');

    return $element;
  }

}
