<?php
/**
 * @file
 * Stub file for "lpbs_panel" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "lpbs_panel" theme hook.
 *
 * See template for list of available variables.
 *
 * @see bootstrap-panel.tpl.php
 *
 * @ingroup theme_preprocess
 */
function lpbs_preprocess_lpbs_panel(&$variables) {
  $element = &$variables['element'];

  // Set the element's attributes.
  element_set_attributes($element, array('id'));

  // Retrieve the attributes for the element.
  $attributes = &_lpbs_get_attributes($element);
  /* dpm($element, 'elem'); */
  /* dpm($attributes, 'attr'); */

  if ($attributes['id'] == 'edit-advanced-search') {
    $element['#collapsed'] = TRUE;
    $element['#collapsible'] = TRUE;
  }
  // Add panel and panel-default classes.
  $attributes['class'][] = 'panel';
  $attributes['class'][] = 'panel-default';

  // states.js requires form-wrapper on fieldset to work properly.
  $attributes['class'][] = 'form-wrapper';

  // Handle collapsible panels.
  $variables['collapsible'] = FALSE;
  if (isset($element['#collapsible'])) {
    $variables['collapsible'] = $element['#collapsible'];
  }
  $variables['collapsed'] = FALSE;
  if (isset($element['#collapsed'])) {
    $variables['collapsed'] = $element['#collapsed'];
  }
  // Force grouped fieldsets to not be collapsible (for vertical tabs).
  if (!empty($element['#group'])) {
    $variables['collapsible'] = FALSE;
    $variables['collapsed'] = FALSE;
  }
  // Collapsible elements need an ID, so generate one if necessary.
  if (!isset($attributes['id']) && $variables['collapsible']) {
    $attributes['id'] = drupal_html_id('bootstrap-panel');
  }

  // Set the target if the element has an id.
  $variables['target'] = NULL;
  if (isset($attributes['id'])) {
    $variables['target'] = '#' . $attributes['id'] . ' > .collapse';
  }

  // Build the panel content.
  $variables['content'] = $element['#children'];
  if (isset($element['#value'])) {
    $variables['content'] .= $element['#value'];
  }

  // Iterate over optional variables.
  $keys = array(
    'description',
    'prefix',
    'suffix',
    'title',
  );
  foreach ($keys as $key) {
    $variables[$key] = !empty($element["#$key"]) ? $element["#$key"] : FALSE;
  }

  // Add the attributes.
  $variables['attributes'] = $attributes;
}

/**
 * Processes variables for the "lpbs_panel" theme hook.
 *
 * See template for list of available variables.
 *
 * @see bootstrap-panel.tpl.php
 *
 * @ingroup theme_process
 */
function lpbs_process_lpbs_panel(&$variables) {
  $variables['attributes'] = drupal_attributes($variables['attributes']);
}
