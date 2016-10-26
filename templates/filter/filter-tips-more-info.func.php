<?php
/**
 * @file
 * Stub file for lpbs_filter_tips_more_info().
 */

/**
 * Returns HTML for a link to the more extensive filter tips.
 *
 * @return string
 *   The constructed HTML.
 *
 * @see theme_filter_tips_more_info()
 *
 * @ingroup theme_functions
 */
function lpbs_filter_tips_more_info() {
  $attributes = array(
    'target' => '_blank',
    'title' => t('Opens in new window'),
  );
  if (lpbs_setting('tooltip_enabled')) {
    $attributes['data-toggle'] = 'tooltip';
  }
  return l(_lpbs_icon('question-sign') . t('More information about text formats'), 'filter/tips', array(
    'html' => TRUE,
    'attributes' => $attributes,
  ));
}
