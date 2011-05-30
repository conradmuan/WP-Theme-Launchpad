 <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>" alt="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
            <span class="post-meta">Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></span>
            
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
        <?php the_post_thumbnail(); ?>
            </div><!-- post-thumbnail -->
        <?php endif; ?> 
            
            <?php the_content(); ?>
        </div><!-- #post-<?php the_ID(); ?>-->
    
    <?php endwhile; ?>
    
        <?php if ($wp_query->max_num_pages > 1) : ?>
        
        <div class="navigation clearfix">
            <div class="nav-previous"><?php next_posts_link('&larr; Older Posts'); ?></div>
            <div class="nav-next"><?php previous_posts_link('Newer Posts &rarr;'); ?></div>
        </div><!-- navigation -->
        
        <?php endif; ?>
    
<?php else: ?>
        
        <div class="post clearfix">
            <h1>404 Error</h1>
            <p>No posts were found.</p>
            <p><?php get_search_form(); ?></p>
        </div>
        
<?php endif; ?>