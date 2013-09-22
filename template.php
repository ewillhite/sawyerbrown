<?php
/*
  Preprocess
*/

function sawyerbrown_preprocess_page(&$vars,$hook) {
  $path = drupal_get_path('theme', 'sawyerbrown');
  // general
  drupal_add_js($path .'/assets/js/vendor/modernizr.js', array('scope' => 'head_scripts', 'weight' => -1, 'preprocess' => FALSE));
  // front
  if ($vars['is_front'] == true) {
    drupal_add_css($path .'/assets/css/front.css', array('group' => CSS_THEME));
  }
}
/**
 * Implements hook_process_html().
 */
function sawyerbrown_process_html(&$vars) {
  $vars['head_scripts'] = drupal_get_js('head_scripts');
}

// Views Pre-Render Function
function sawyerbrown_views_pre_render(&$view) {
  if($view->name == 'bio') {
    if ($view->current_display == 'page') {
      $path = drupal_get_path('theme', 'sawyerbrown');
      drupal_add_css($path .'/assets/css/bio.css', array('group' => CSS_THEME));
      drupal_add_js($path .'/assets/js/bio-ck.js', array('group' => JS_THEME));
    }
  }
  if($view->name == 'events') {
    if ($view->current_display == 'events_page') {
      $path = drupal_get_path('theme', 'sawyerbrown');
      drupal_add_css($path .'/assets/css/events.css', array('group' => CSS_THEME));
    }
  }
}

// Hook Form Alter
// function sawyerbrown_form_alter(&$form, &$form_state, $form_id) {
//   if ($form_id == 'user_login_block') {
//     dsm($form);
//   }
// }
/*
function sawyerbrown_preprocess_region(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function sawyerbrown_preprocess_block(&$vars, $hook) {
  //  kpr($vars['content']);

  //lets look for unique block in a region $region-$blockcreator-$delta
   $block =
   $vars['elements']['#block']->region .'-'.
   $vars['elements']['#block']->module .'-'.
   $vars['elements']['#block']->delta;

  // print $block .' ';
   switch ($block) {
     case 'header-menu_block-2':
       $vars['classes_array'][] = '';
       break;
     case 'sidebar-system-navigation':
       $vars['classes_array'][] = '';
       break;
    default:

    break;

   }


  switch ($vars['elements']['#block']->region) {
    case 'header':
      $vars['classes_array'][] = '';
      break;
    case 'sidebar':
      $vars['classes_array'][] = '';
      $vars['classes_array'][] = '';
      break;
    default:

      break;
  }

}
*/
/*

*/
/*
function sawyerbrown_preprocess_comment(&$vars,$hook) {
  //  kpr($vars['content']);
}
*/
/*
function sawyerbrown_preprocess_field(&$vars,$hook) {
  //  kpr($vars['content']);
  //add class to a specific field
  switch ($vars['element']['#field_name']) {
    case 'field_ROCK':
      $vars['classes_array'][] = 'classname1';
    case 'field_ROLL':
      $vars['classes_array'][] = 'classname1';
      $vars['classes_array'][] = 'classname2';
      $vars['classes_array'][] = 'classname1';
    case 'field_FOO':
      $vars['classes_array'][] = 'classname1';
    case 'field_BAR':
      $vars['classes_array'][] = 'classname1';
    default:
      break;
  }

}
*/
/*
function sawyerbrown_preprocess_maintenance_page(){
  //  kpr($vars['content']);
}
*/
/*
function sawyerbrown_form_alter(&$form, &$form_state, $form_id) {
  //if ($form_id == '') {
  //....
  //}
}
*/

