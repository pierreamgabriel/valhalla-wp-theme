<?php
/**
 * The main template file.
 *
 * @package Valhalla
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

<?php get_header(); 
      get_template_part( 'template-parts/blog-template' );
?>


