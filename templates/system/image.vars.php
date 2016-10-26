<?php
/**
 * @file
 * Stub file for "image" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "image" theme hook.
 *
 * See theme function for list of available variables.
 *
 * @see theme_image()
 *
 * @ingroup theme_preprocess
 */
function lpbs_preprocess_image(&$variables) {
  // Add image shape, if necessary.
  if ($shape = lpbs_setting('image_shape')) {
    _lpbs_add_class($shape, $variables);
  }

  // Add responsiveness, if necessary.
  if (lpbs_setting('image_responsive')) {
    _lpbs_add_class('img-responsive', $variables);
  }
}
