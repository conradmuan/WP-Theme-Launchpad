<?php get_header(); ?>

<!-- single -->
<div class="body-content clearfix">
    
<?php get_template_part('loop' , 'single'); ?>
    
</div>

<div class="sidebar-container">
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>