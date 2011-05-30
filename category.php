<?php get_header(); ?>

<!-- category archives -->
<div class="body-content clearfix">
    
    <h1>Category Archives: <?php single_cat_title('', true); ?></h1>
    <?php
        $category_description = category_description();
        if (!empty($category_description )) {
            echo $category_description;
        } ?>
    
<?php get_template_part('loop' , 'category'); ?>
    
</div>

<div class="sidebar-container">
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>