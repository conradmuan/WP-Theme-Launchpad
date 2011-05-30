<?php

add_action('init' , 'launchpad_init');
/**
 * Assumes that this theme will be using post thumbnails
 **/

add_theme_support('post-thumbnails');
/**
 * Launchpad asssumes that your theme
 * will have at least one sidebar and one menu
 *
 * It also assumes that you will be using jQuery
 * sometime in the future. We're linking to the
 * Google CDN to decrease load
 **/

function launchpad_init() {
  register_sidebar( array('name'=>'default sidebar' , 'id' => 'sidebar-1') );
  register_nav_menus(
        array(
            'header_navigation' => 'Header Navigation'
        )
    );
  
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery' , 'http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js');
    wp_enqueue_script('jquery');
  }
  
}
?>