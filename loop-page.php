    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><?php the_title(); ?></h2>
            
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
            </div><!-- post-thumbnail -->
        <?php endif; ?> 
            
            <?php the_content(); ?>
        </div><!-- #post-<?php the_ID(); ?>-->
        
        <?php comments_template('' , true); ?>
    
    <?php endwhile; else: ?>
        
        <div class="post clearfix">
            <h1>404 Error</h1>
            <p>Page not found.</p>
            <p><?php get_search_form(); ?></p>
        </div>
        
    <?php endif; ?>