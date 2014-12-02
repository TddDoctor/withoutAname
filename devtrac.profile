<?php
/**
 * @file
 * Enables modules and site configuration for the devtrac installation profile.
 */

/**
 * Implements hook_form_alter().
 *
 * Allows the profile to alter the site configuration form
 */
function devtrac_form_install_configure_form_alter(&$form, $form_state, $form_id){
  if($form_id == 'install_configure_form'){
    //set default for site name field
    $form['site_information']['site_name']['#default_value'] = $_SERVER['SERVER_NAME'];
  }
}
