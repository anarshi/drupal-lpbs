<?php
/**
 *
 */

/**
 * Override the search results page
 */
function lpbs_preprocess_search_result(&$vars){
  $vars['content'] = array();
  if (!empty($vars['result']['node'])) {
    $node = node_load($vars['result']['node']->entity_id);
    if (!empty($node)) {
  error_log('loooo');
      $vars['content'] = node_view($node,'listing');
    }
  }
}
