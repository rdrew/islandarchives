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
    'sites/all/modules/islandora_modules/islandora_modules/islandora_solution_pack_collection/css/islandora_basic_collection.base.css' => FALSE,
    'sites/all/modules/islandora_modules/islandora_modules/islandora/css/islandora.theme.css' => FALSE,
    //    'modules/system/system.theme.css' => FALSE,
    //    'modules/taxonomy/taxonomy.css' => FALSE,
    //    'modules/tracker/tracker.css' => FALSE,
    //    'modules/update/update.css' => FALSE,
    //    'modules/user/user.css' => FALSE,
    //    'misc/vertical-tabs.css' => FALSE,
  );

  $css = array_diff_key($css, $exclude);
}

function islandarchives_preprocess_islandora_basic_collection_wrapper(&$variables) {
  //$variables['view_links'][0]['title'] = '<i class="fa fa-th" aria-hidden="true"></i>
  //Grid';
  //$variables['view_links'][1]['title'] = 'List';
  //dpm($variables);


}
function islandarchives_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'islandora_solr_simple_search_form') {
    $form['simple']['submit']['#value'] = decode_entities('&#xf002;');
  }
}

//function islandarchives_menu_local_tasks(&$variables) {
  //$output = '';

  //if (!empty($variables['primary'])) {
    //$variables['primary']['#prefix'] = '<p class="config-dropdown__button js-config-dropdown__button">' . t('Click to Select') . '</p>';
    //$variables['primary']['#prefix'] .= '<h2 class="element-invisible">' . t('Configuration Menu') . '</h2>';
    //$variables['primary']['#prefix'] .= '<ul class="config-dropdown__menu">';
    //$variables['primary']['#suffix'] = '</ul>';
    //$output .= drupal_render($variables['primary']);
  //}
  //if (!empty($variables['secondary'])) {
    //$variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    //$variables['secondary']['#prefix'] .= '<ul class="tabs tabs--secondary links--inline">';
    //$variables['secondary']['#suffix'] = '</ul>';
    //$output .= drupal_render($variables['secondary']);
  //}

  //return $output;
//}

//function islandarchives_menu_local_task($variables) {
  //$link = $variables['element']['#link'];
  //$link_text = $link['title'];

 //if (!empty($variables['element']['#active'])) {
    //// Add text to indicate active tab for non-visual users.
    //$active = '<span class="element-invisible">' . t('(active tab)') . '</span>';

    //// If the link does not contain HTML already, check_plain() it now.
    //// After we set 'html'=TRUE the link will not be sanitized by l().
    //if (empty($link['localized_options']['html'])) {
      //$link['title'] = check_plain($link['title']);
    //}
    //$link['localized_options']['html'] = TRUE;
    //$link_text = t('!local-task-title!active', array('!local-task-title' => $link['title'], '!active' => $active));
  //}

  //return '<li class="config-dropdown__menu__item' . (!empty($variables['element']['#active']) ? ' active' : '') . '">' . l($link_text, $link['href'], $link['localized_options']) . "</li>\n";


//}
