<?php get_header(); ?>

<!-- page -->
<div class="body-content clearfix">
    
<?php get_template_part('loop' , 'page'); ?>
    
</div>

<div class="sidebar-container">
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>