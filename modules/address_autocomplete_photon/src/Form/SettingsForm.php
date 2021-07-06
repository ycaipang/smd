<?php

namespace Drupal\address_autocomplete_photon\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure the autocomplete user experience.
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'address_autocomplete_photon_configure';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['address_autocomplete_photon.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('address_autocomplete_photon.settings');

    // Aucomplete User eXperience fields.
    $form['autocomplete'] = [
      '#type' => 'details',
      '#title' => $this->t('Autocomplete User eXperience'),
      '#open' => TRUE,
      '#tree' => TRUE,
    ];

    $form['autocomplete']['min_length'] = [
      '#type' => 'number',
      '#title' => $this->t('Autocomplete minimal input length'),
      '#step' => 1,
      '#default_value' => $config->get('autocomplete.min_length'),
      '#description' => $this->t('The minimum number of characters that user must input before autocomplete is triggered.'),
    ];

    $form['autocomplete']['limit'] = [
      '#type' => 'number',
      '#title' => $this->t('Autocomplete number of results'),
      '#step' => 1,
      '#default_value' => $config->get('autocomplete.limit'),
      '#description' => $this->t('The number of results displayed to the user by autocomplete.'),
    ];

    $form['autocomplete']['remove_duplicates'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Remove duplicates from the Photon API'),
      '#default_value' => $config->get('autocomplete.remove_duplicates'),
      '#description' => $this->t('The Photon API can generate duplicates for some locations (i.e. cities that are states for example), this option will remove them.'),
    ];

    $form['autocomplete']['managed_fields_display'] = [
      '#type' => 'radios',
      '#title' => $this->t('Managed fields display'),
      '#options' => [
        'hide' => $this->t('Hide fields'),
        'disable' => $this->t('Disable fields'),
      ],
      '#default_value' => $config->get('autocomplete.managed_fields_display'),
      '#description' => $this->t('Autocomplete automatically fills a number of fields. You can choose to hide or disable them.'),
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Save the configuration.
    $this->config('address_autocomplete_photon.settings')
      ->set(
        'autocomplete.min_length',
        (int) $form_state->getValue(['autocomplete', 'min_length'])
      )
      ->set(
        'autocomplete.limit',
        (int) $form_state->getValue(['autocomplete', 'limit']))
      ->set(
        'autocomplete.remove_duplicates',
        (bool) $form_state->getValue(['autocomplete', 'remove_duplicates']))
      ->set(
        'autocomplete.managed_fields_display',
        $form_state->getValue(['autocomplete', 'managed_fields_display'])
      )
      ->save(TRUE);

    parent::submitForm($form, $form_state);
  }

}
