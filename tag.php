<?php get_header(); ?>

<!-- tag archives -->
<div class="body-content clearfix">
    
    <h1>Tag Archives: <?php single_tag_title('', true); ?></h1>
    
<?php get_template_part('loop' , 'tag'); ?>
    
</div>

<div class="sidebar-container">
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>