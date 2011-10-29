<?php
/* Template for when viewing an author's profile.
 * Again we have to do a hack to find who we're looking at
 * by Querying the loop once and finding out who this is.
 *
 * @author Conrad Muan <con.muan@gmail.com>
 * @package Radical_Framework
 * @subpackage templates
 */
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<?php get_template_part('loop' , 'author'); ?>

<?php get_footer(); ?>