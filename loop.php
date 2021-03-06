<?php
/**
 * Main Loop
 *
 * @author Conrad Muan <con.muan@gmail.com>
 * @package Radical_Framework
 * @subpackage templates
 **/
?>
    <div id="main" role="main" class="grid_9 clearfix">
    
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header>
                <h1 class="the-title"><a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
            </header>
            
            <section class="post-meta">
                <div class="author-info clearfix">
                    <div class="grid_2 alpha author-avatar">
                        <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
                    </div>
                    
                    <div class="grid_7 omega author-description">
                        <h2><?php the_author(); ?></h2>
                        <?php the_author_meta('description'); ?>
                        <p>View all posts written by <?php the_author_posts_link(); ?></p>
                    </div>
                </div>
                
                <div class="posted-under">
                    <p>Posted under: <?php the_category(); ?></p>
                    <p><?php the_tags(); ?></p>
                    <?php edit_post_link('Edit this post'); ?>
                </div>  
            </section>
            
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail();
            }?>
            
            <?php the_content(); ?>
            
            <?php if(have_comments()): ?>
            
            <footer>
                
                <?php if (comments_open()) : ?>
                
                <a href="<?php comments_link(); ?>" title="Link to <?php the_title();?>'s Comments"><?php comments_number('No responses' , 'One response', '% responses'); ?></a>
                
                <?php endif; ?>
                
            </footer>
            
            <?php endif; ?>
            
        </article>
        
        <?php endwhile; ?>
        
        <?php if ($wp_query->max_num_pages > 1) : ?>
        
        <div class="navigation clearfix">
            <div class="nav-previous"><?php next_posts_link('&larr; Older Posts'); ?></div>
            <div class="nav-next"><?php previous_posts_link('Newer Posts &rarr;'); ?></div>
        </div><!-- navigation -->
        
        <?php endif; ?>
        
        <?php else: ?>
        
        <article <?php post_class(); ?>>
            <h1>404 - Not Found</h1>
			<p>Unfortunately, the content you were looking for was not found. Try searching for it</p>
			<?php get_search_form(); ?>
        </article>
        
        <?php endif; ?>
    
    </div><!--main-->