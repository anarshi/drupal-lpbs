<?php
/**
 * @file
 * Stub file for lpbs_breadcrumb().
 */

/**
 * Returns HTML for a breadcrumb trail.
 *
 * @param array $variables
 *   An associative array containing:
 *   - breadcrumb: An array containing the breadcrumb links.
 *
 * @return string
 *   The constructed HTML.
 *
 * @see theme_breadcrumb()
 *
 * @ingroup theme_functions
 */
function lpbs_breadcrumb($variables) {
  // Use the Path Breadcrumbs theme function if it should be used instead.
  if (_lpbs_use_path_breadcrumbs()) {
    return path_breadcrumbs_breadcrumb($variables);
  }

  $output = '';
  $breadcrumb = $variables['breadcrumb'];

  // Determine if we are to display the breadcrumb.
  $lpbs_breadcrumb = lpbs_setting('breadcrumb');
  if (($lpbs_breadcrumb == 1 || ($lpbs_breadcrumb == 2 && arg(0) == 'admin')) && !empty($breadcrumb)) {
    $output = theme('item_list', array(
      'attributes' => array(
        'class' => array('breadcrumb'),
      ),
      'items' => $breadcrumb,
      'type' => 'ol',
    ));
  }
  return $output;
}
