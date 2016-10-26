<?php

/**
 * @file
 * icons.inc
 * Provide Bootstrap Glyphicons support via the Icon API module.
 */

require_once dirname(__FILE__) . '/common.inc';

/**
 * Implements hook_icon_providers().
 */
function lpbs_icon_providers() {
  $providers['lpbs'] = array(
    'title' => t('Bootstrap'),
    'url' => 'http://getbootstrap.com/components/#glyphicons',
  );
  return $providers;
}

/**
 * Implements hook_icon_bundles().
 */
function lpbs_icon_bundles() {
  $bundles = array();
  if (_lpbs_glyphicons_supported()) {
    $bundles['lpbs'] = array(
      'render' => 'sprite',
      'provider' => 'lpbs',
      'title' => t('Bootstrap'),
      'version' => t('Icons by Glyphicons'),
      'variations' => array(
        'icon-white' => t('White'),
      ),
      'settings' => array(
        'tag' => 'span',
      ),
      'icons' => _lpbs_glyphicons(),
    );
  }
  return $bundles;
}
