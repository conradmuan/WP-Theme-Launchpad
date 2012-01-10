<?php
/**
 * Comments Template Segment
 *
 * @author Conrad Muan <con.muan@gmail.com>
 * @package Radical_Framework
 * @subpackage templates
 **/
?>
<div id="comments">
    <?php if (post_password_required()) : ?>
    <p>Post is password protected. Enter password to view comments.</p>
    <?php return; ?>
</div><!-- #comments -->
    <?php endif; ?>

<?php if(have_comments()): ?>
<?php
    $comment_defaults = array(
        'comment_notes_after' => '',
    );
    comment_form($comment_defaults);

?>
    <h3>
        <?php comments_number('No responses' , 'One response', '% responses'); ?> to <?php the_title(); ?>
    </h3>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

    <div class="navigation clearfix">
        <div class="nav-previous alpha grid_4"><?php next_comments_link('&larr; Older Comments'); ?></div>
        <div class="nav-next omega grid_4"><?php previous_comments_link('Newer Comments &rarr;'); ?></div>
    </div>

<?php endif; // get_comment_pages_count ?>

    <ol class="commentlist">
        <?php wp_list_comments(); ?>
    </ol>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

    <div class="navigation clearfix">
        <div class="nav-previous"><?php next_comments_link('&larr; Older Comments'); ?></div>
        <div class="nav-next"><?php previous_comments_link('Newer Comments &rarr;'); ?></div>
    </div>

<?php endif; // get_comment_pages_count ?>

<?php else: // have_comments ?>

    <?php //if (! comments_open() ): ?>
        <!--<p>Comments are closed</p>-->
    <?php // endif; //comments_open ?>

<?php endif; //have_comments ?>

<?php
    $comment_defaults = array(
        'comment_notes_after' => '',
    );
    comment_form($comment_defaults);

?>

</div><!-- #comments-->