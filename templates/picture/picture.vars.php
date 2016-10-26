<?php
/**
 * @file
 * Stub file for "picture" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "picture" theme hook.
 *
 * See theme function for list of available variables.
 *
 * @see theme_picture()
 *
 * @ingroup theme_preprocess
 */
function lpbs_preprocess_picture(&$variables) {
  // Add responsiveness, if necessary.
  if ($shape = lpbs_setting('image_responsive')) {
    $variables['attributes']['class'][] = 'img-responsive';
  }
}
