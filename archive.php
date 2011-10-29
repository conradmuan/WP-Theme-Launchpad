<?php
/**Template for archive page. We do a bit of a hack here:
 * Query the loop once to see if it's a Daily, Monthly or Yearly archive
 * And then display the appropriate header
 *
 * @author Conrad Muan <con.muan@gmail.com>
 * @package Radical_Framework
 * @subpackage templates
 */
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>
    
<?php get_template_part('loop' , 'archive'); ?>

<?php get_footer(); ?>