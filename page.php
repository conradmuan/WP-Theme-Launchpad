<?php
/** Template for page. Post type is page
 *
 * @author Conrad Muan <con.muan@gmail.com>
 * @package Radical_Framework
 * @subpackage templates
 */
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>
    
<?php get_template_part('loop','page'); ?>

<?php get_footer(); ?>