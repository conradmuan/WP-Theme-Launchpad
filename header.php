<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" />
<?php /**
       * 960.css framework here in case you need a quick css framework
       * More information http://www.960.gs/
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/960.css" />
       */
?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/text.css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/wp-classes.css" />
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="body-container clearfix">
    <div>
        <h1><a href="<?php bloginfo('url');; ?>" title="Link to <?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
        <?php wp_nav_menu( array('container_class'=>'menu-header clearfix' , 'theme_location'=>'header_navigation')); ?>
    </div>
<!-- header -->