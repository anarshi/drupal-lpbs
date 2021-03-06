<?php
/**
 * @file
 * Stub file for "book_navigation" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "book_navigation" theme hook.
 *
 * See template for list of available variables.
 *
 * @see book-navigation.tpl.php
 *
 * @ingroup theme_preprocess
 */
function lpbs_preprocess_book_navigation(&$variables) {
  $variables['tree'] = _lpbs_book_children($variables['book_link']);
}

/**
 * Formats the menu links for the child pages of the current page.
 *
 * @param array $book_link
 *   A fully loaded menu link that is part of the book hierarchy.
 *
 * @return string
 *   HTML for the links to the child pages of the current page.
 */
function _lpbs_book_children($book_link) {
  // Rebuild entire menu tree for the book.
  $tree = menu_build_tree($book_link['menu_name']);
  $tree = menu_tree_output($tree);

  // Fix the theme hook suggestions.
  _lpbs_book_fix_theme_hooks($book_link['nid'], $tree);

  // Return the rendered output.
  return drupal_render($tree);
}

/**
 * Helper function to fix theme hooks in book TOC menus.
 *
 * @param int $bid
 *   The book identification number.
 * @param array $element
 *   The element to iterate over, passed by reference.
 * @param int $level
 *   Used internally to determine the current level of the menu.
 */
function _lpbs_book_fix_theme_hooks($bid, array &$element, $level = 0) {
  $hook = $level === 0 ? $bid : 'sub_menu__' . $bid;
  $element['#theme_wrappers'] = array('menu_tree__book_toc__' . $hook);
  foreach (element_children($element) as $child) {
    $element[$child]['#theme'] = 'menu_link__book_toc__' . $hook;
    // Iterate through all child menu items as well.
    if (!empty($element[$child]['#below'])) {
      _lpbs_book_fix_theme_hooks($bid, $element[$child]['#below'], ($level + 1));
    }
  }
}
