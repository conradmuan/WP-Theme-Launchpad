<?php get_header(); ?>

<!-- author archive -->
<div class="body-content clearfix">

<?php
/** query the first post to display the author's name and meta
 * then rewind the loop
 **/
if (have_posts()) : the_post();
?>
    <div class="author-info clearfix">
        <h1>Author Archives: <?php the_author(); ?></h1>
        <div class="author-avatar">
            <?php echo get_avatar(get_the_author_meta( 'user_email' )); ?>
        </div><!--avatar-->
        
        <div class="author-description">
            <?php the_author_meta('description'); ?>
        </div>
    </div>

<?php
    endif;
    rewind_posts();
?>
    
<?php get_template_part('loop' , 'author'); ?>
    
</div>

<div class="sidebar-container">
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>