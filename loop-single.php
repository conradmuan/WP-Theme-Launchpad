    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><?php the_title(); ?></h2>
            <span class="post-meta">Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></span>
            <?php the_content(); ?>
        </div><!-- #post-<?php the_ID(); ?>-->
        
        <div class="author-info clearfix">
            <div class="author-avatar">
                <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
            </div>
            
            <div class="author-description">
                <h2><?php the_author(); ?></h2>
                <?php the_author_meta('description'); ?>
                <p>View all posts written by <?php the_author_posts_link(); ?></p>
            </div>
        </div>
        
        <div class="posted-under">
            <p>Posted under: <?php the_category(); ?></p>
            <p>Tagged under: <?php the_tags(); ?></p>
            <?php edit_post_link('Edit this post'); ?>
        </div>
        
        <?php comments_template('' , true); ?>
    
    <?php endwhile; else: ?>
        
        <div class="post clearfix">
            <h1>404 Error</h1>
            <p>No posts were found.</p>
            <p><?php get_search_form(); ?></p>
        </div>
        
    <?php endif; ?>