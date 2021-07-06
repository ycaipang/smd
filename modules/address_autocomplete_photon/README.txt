CONTENTS OF THIS FILE
---------------------

 * Introduction
 * Requirements
 * Installation
 * Configuration
 * Maintainers


INTRODUCTION
------------

This module allows for your users to input the whole address with a predictive
autocomplete field, provided through Photon API. The module depends on the
address module and adds a simplifying widget for the address
input (less fields to fill).

 * For a full description of the module, visit the project page:
   https://www.drupal.org/project/address_autocomplete_photon

 * To submit bug reports and feature suggestions, or to track changes:
   https://www.drupal.org/project/issues/search/address_autocomplete_photon


REQUIREMENTS
------------

Based on "Address" project (See: https://www.drupal.org/project/address).


INSTALLATION
------------

 * Install as you would normally install a contributed Drupal module.
   See: https://www.drupal.org/node/895232 for further information.


CONFIGURATION
-------------

A default configuration is provided during module installation. You can modify
on configuration form page : /admin/config/system/address-autocomplete-photon

You can manage following settings :
 * Minimal input length: The minimum number of characters that user must input
   before autocomplete is triggered.
 * Number of results: The number of results displayed to the user by
   autocomplete.
 * Remove duplicates: The Photon API can generate duplicates for some locations
   (i.e. cities that are states for example), this option will remove them.
 * Managed fields display: Autocomplete automatically fills a number of fields.
   You can choose to hide or disable them.


MAINTAINERS
-----------

Current maintainers:
 * Sébastien Brindle (S3b0uN3t) - https://www.drupal.org/u/s3b0un3t
