<?php

namespace Drupal\address_autocomplete_photon\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\address\Plugin\Field\FieldWidget\AddressDefaultWidget;

/**
 * Plugin implementation of the 'address_autocomplete_photon' widget.
 *
 * @FieldWidget(
 *   id = "address_autocomplete_photon",
 *   label = @Translation("Address autocomplete with Photon"),
 *   field_types = {
 *     "address"
 *   }
 * )
 */
class AddressAutocomplete extends AddressDefaultWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element = parent::formElement($items, $delta, $element, $form, $form_state);

    $element['address']['#type'] = 'address_autocomplete';

    return $element;
  }

}
