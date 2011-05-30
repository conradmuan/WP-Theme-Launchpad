<?php get_header(); ?>

<!-- date archive -->
<div class="body-content clearfix">

<?php

/**
 * Cases for querying by date
 * Queue the first post to find the date and type of date
 * for this type of archive page (if it is a date archive page)
 *
 * Then, rewind and do the normal loop
 **/
    if (have_posts()) : the_post();
?>
    
    <h1>
        <?php if(is_day()) : ?>Daily Archives: <?php echo get_the_date(); ?>
        <?php elseif(is_month()) : ?>Monthly Archives: <?php echo get_the_date('F Y'); ?>
        <?php elseif(is_year()) : ?>Yearly Archives: <?php echo get_the_date('Y'); ?>
        <?php endif; ?>
    </h1>

<?php
    endif; // have_posts()
    rewind_posts();
?>
    
<?php get_template_part('loop' , 'archive'); ?>
    
</div>

<div class="sidebar-container">
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>