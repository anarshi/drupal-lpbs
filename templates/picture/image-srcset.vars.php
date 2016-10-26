<?php
/**
 * @file
 * Stub file for "image_srcset" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "image_srcset" theme hook.
 *
 * See theme function for list of available variables.
 *
 * @see theme_image_srcset()
 *
 * @ingroup theme_preprocess
 */
function lpbs_preprocess_image_srcset(&$variables) {
  // Add image shape, if necessary.
  if ($shape = lpbs_setting('image_shape')) {
    $variables['attributes']['class'][] = $shape;
  }
}
