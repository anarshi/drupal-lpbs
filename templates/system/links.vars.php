<?php
/**
 * @file
 * Stub file for "links" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "links" theme hook.
 *
 * See theme function for list of available variables.
 *
 * @see theme_links()
 *
 * @ingroup theme_preprocess
 */
function lpbs_preprocess_links(&$variables) {
  if (isset($variables['attributes']) && isset($variables['attributes']['class'])) {
    $string = is_string($variables['attributes']['class']);
    if ($string) {
      $variables['attributes']['class'] = explode(' ', $variables['attributes']['class']);
    }

    if ($key = array_search('inline', $variables['attributes']['class'])) {
      $variables['attributes']['class'][$key] = 'list-inline';
    }

    if ($string) {
      $variables['attributes']['class'] = implode(' ', $variables['attributes']['class']);
    }
  }
}
