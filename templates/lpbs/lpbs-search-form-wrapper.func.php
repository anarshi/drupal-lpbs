<?php
/**
 * @file
 * Stub file for lpbs_lpbs_search_form_wrapper().
 */

/**
 * Returns HTML for the Bootstrap search form wrapper.
 *
 * @ingroup theme_functions
 */
function lpbs_lpbs_search_form_wrapper($variables) {
  $output = '<div class="input-group">';
  $output .= $variables['element']['#children'];
  $output .= '<span class="input-group-btn">';
  $output .= '<button type="submit" class="btn btn-primary">' . _lpbs_icon('search', t('Search')) . '</button>';
  $output .= '</span>';
  $output .= '</div>';
  return $output;
}
