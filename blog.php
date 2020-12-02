<?php /* Template Name: Blog  */ ?>
<?php
/**
 * The Blog page template.
 *
 * @package Valhalla
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

<?php get_header('2'); ?>

<?php get_template_part( 'template-parts/blog-template' ); ?>

<?php get_footer();?>