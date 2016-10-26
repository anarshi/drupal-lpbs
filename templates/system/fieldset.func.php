<?php
/**
 * @file
 * Stub file for lpbs_fieldset().
 */

/**
 * Returns HTML for a fieldset form element and its children.
 *
 * @param array $variables
 *   An associative array containing:
 *   - element: An associative array containing the properties of the element.
 *     Properties used: #attributes, #children, #collapsed, #collapsible,
 *     #description, #id, #title, #value.
 *
 * @return string
 *   The constructed HTML.
 *
 * @see theme_fieldset()
 *
 * @ingroup theme_functions
 */
function lpbs_fieldset($variables) {
  return theme('lpbs_panel', $variables);
}
