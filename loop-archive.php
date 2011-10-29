<?php
/**
 * Loop for archive
 *
 * @author Conrad Muan <con.muan@gmail.com>
 * @package Radical_Framework
 * @subpackage templates
 **/
?>

    <div id="main" role="main" class="grid_18 clearfix">
    
    <?php if (is_category()): ?>
    
    <header>
        <h1>Category Archives: <?php single_cat_title('', true); ?></h1>
    </header>
    
    <?php $category_description = category_description();
        if (!empty($category_description )) {
            echo $category_description;
        } // category description
    ?>
    
    <?php endif; // is_category() ?>
    
    <?php if (is_tag()): ?>
    
    <header>
        <h1>Tag Archives: <?php single_tag_title('', true); ?></h1>
    </header>
    
    <?php endif; //is_tag() ?>
    
    <?php
    // Cases for querying by date
    // Queue the first post to find the date and type of date
    // for this type of archive page (if it is a date archive page)
    
    // Then, rewind and do the normal loop
    
        if (have_posts()) : the_post();
    ?>
        
        <header>
            <h1>
                <?php if(is_day()) : ?>Daily Archives: <?php echo get_the_date(); ?>
                <?php elseif(is_month()) : ?>Monthly Archives: <?php echo get_the_date('F Y'); ?>
                <?php elseif(is_year()) : ?>Yearly Archives: <?php echo get_the_date('Y'); ?>
                <?php endif; ?>
            </h1>
        </header>
    
    <?php
        endif; // have_posts()
        rewind_posts();
    ?>
        
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        
        <article <?php post_class(); ?>>
            <header>
                <h1 class="the-title"><a href="<?php the_permalink(); ?>" title="Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
            </header>
            
            <section class="post-meta">
                <div class="author-info clearfix">
                    <div class="grid_3 alpha author-avatar">
                        <?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
                    </div>
                    
                    <div class="grid_15 omega author-description">
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
            <h1>404 Goes here</h1>
        </article>
        
        <?php endif; ?>
    
    </div><!--main-->