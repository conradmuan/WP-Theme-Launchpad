<?php
/**
 * Functions file for the Radical Framework
 *
 * @package Radical_Framework
 * @subpackage functions
 * @author Conrad Muan <con.muan@gmail.com>
 */

/**
 * Definitions to be used in add_custom_image_header()
 * @see add_custom_image_header()
 **/
define('HEADER_TEXTCOLOR' , '');
define('NO_HEADER_TEXT' , true);
define('HEADER_IMAGE', '%s/img/logo-placeholder.jpg');
define('HEADER_IMAGE_WIDTH' , '350');
define('HEADER_IMAGE_HEIGHT', '150');

/**
 * Enables uploading a custom header image. In this theme, it is used to house the logo
 * @see admin_header_style()
 * @see output_header_image()
 **/
add_custom_image_header('output_header_image', 'admin_header_style');

/**
 * Callback function to ouput the header image in the admin screen
 **/
function admin_header_style(){ ?>
    <style type="text/css">
        #headimg {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
            background: no-repeat;
        }
    </style><?php
}

/**
 * Callback to output the header image in the theme
 **/
function output_header_image() { ?>
    <style type="text/css">
        #logo {
            background:url('<?php header_image(); ?>');
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
            display:block;
            margin-left:auto;
            margin-right:auto;
        }
    </style><?php
}

/**
 * Runs launch_theme method at init()
 * @see launch_theme()
 **/
add_action('init' , 'launch_theme');

/**
 * Method that registers sidebars and menus
 **/
function launch_theme(){
    register_sidebar(array(
        'name'=>'Sidebar',
        'id' => 'sidebar-$i'
    ));
    register_nav_menus(array(
        'header_menu' => 'Header Navigation'
    ));
}

/**
 * Properly enqueues js in wp_head()
 * @see boilerplate_scripts()
 */
add_action('wp_enqueue_scripts' , 'boilerplate_scripts');

/**
 * Method wrapping calling html5 boilerplate js
 **/
function boilerplate_scripts(){
    // Store template path for use in this method
    $template_path = get_template_directory_uri();
    
    // Register google cdn version of jquery
    wp_deregister_script('jquery');
    wp_register_script('jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
    wp_enqueue_script('jquery');
    
    // Register Modernizr (html5 for older browsers)
    wp_register_script('modernizr' , $template_path.'/js/libs/modernizr-2.0.6.min.js');
    wp_enqueue_script('modernizr');
    
    // Register plugin.js
    wp_register_script ('boilerplate_plugins' , $template_path.'/js/plugins.js');
    wp_enqueue_script('boilerplate_plugins');
    
    // Register script.js
    wp_register_script ('theme_script' , $template_path.'/js/script.js');
    wp_enqueue_script('theme_script');
}

/**
 * Styles the tinymce editor 
 */
add_editor_style();

/**
 * Post thumbnails enabled
 */
add_theme_support('post-thumbnails');