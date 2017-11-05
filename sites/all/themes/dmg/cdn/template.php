<?php
/**
 * @file
 * The primary PHP file for this theme.
 */


/**
 * Override or insert variables for theme_field().
 */
function pixture_reloaded_process_field(&$vars) {
  $element = $vars['element'];
  // Field type image
  if ($element['#field_type'] == 'image') {
    // Reduce number of images in teaser view mode to single image
    if ($element['#view_mode'] == 'teaser') {
      $item = reset($vars['items']);
      $vars['items'] = array($item);
    }
  }
}
