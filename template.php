<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * islandarchives theme.
 */

/**
 * Implements hook_css_alter().
 * @param $css
 */
function islandarchives_css_alter(&$css) {
  // Remove Drupal core css
  $exclude = array(
//    'modules/aggregator/aggregator.css' => FALSE,
//    'modules/block/block.css' => FALSE,
//    'modules/dblog/dblog.css' => FALSE,
//    'modules/field/theme/field.css' => FALSE,
//    'modules/file/file.css' => FALSE,
//    'modules/filter/filter.css' => FALSE,
//    'modules/forum/forum.css' => FALSE,
//    'modules/help/help.css' => FALSE,
//    'modules/menu/menu.css' => FALSE,
//    'modules/node/node.css' => FALSE,
//    'modules/poll/poll.css' => FALSE,
//    'modules/profile/profile.css' => FALSE,
//    'modules/search/search.css' => FALSE,
//    'modules/syslog/syslog.css' => FALSE,
//    'modules/system/system.admin.css' => FALSE,
//    'modules/system/maintenance.css' => FALSE,
//    'modules/system/system.admin.css' => FALSE,
//    'modules/system/system.base.css' => FALSE,
    'modules/system/system.maintenance.css' => FALSE,
    'modules/system/system.messages.css' => FALSE,
    'modules/system/system.menus.css' => FALSE,
	'sites/all/themes/omega/omega/css/modules/system/system.menus.theme.css' => FALSE,
//    'modules/system/system.theme.css' => FALSE,
//    'modules/taxonomy/taxonomy.css' => FALSE,
//    'modules/tracker/tracker.css' => FALSE,
//    'modules/update/update.css' => FALSE,
//    'modules/user/user.css' => FALSE,
//    'misc/vertical-tabs.css' => FALSE,
  );

  $css = array_diff_key($css, $exclude);
}
