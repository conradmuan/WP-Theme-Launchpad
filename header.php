<?php
/** Header template segment
 *
 * @author Conrad Muan <con.mun@gmail.com>
 * @package Radical_Framework
 * @subpackage templates
 **/
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php bloginfo('name'); ?> | <?php bloginfo('description');?></title>

  <!-- CSS -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/boilerplate.css" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/960_12_col.css" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <!-- end CSS-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="parent-header">
    <div class="container_12 clearfix">
        <div class="grid_5 logo">
            <a href="<?php bloginfo('url'); ?>" id="logo"></a>
        </div>
        <div class="grid_7 tagline-container">
            <h1 class="site-title"><a href="<?php bloginfo('url'); ?>" title="Link to <?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
        <div class="clear"></div>
        <div class="header-menu grid_12 clearfix">
          
          <?php wp_nav_menu(array('theme_location'=>'header_menu', 'container'=>'nav'));?>
          
        </div><!--header-menu-->
    </div>  
</header>

<div id="container" class="container_12 clearfix">