<?php
/*
* The default template for displaying posts.
*
* @package Valhalla
* @subpackage Templates
*/

// Do not allow directly accessing this file.

if ( ! defined( 'ABSPATH' ) ) {
exit( 'Direct script access denied.' );
}
?>

<?php get_header('2'); 
get_template_part( 'template-parts/blog-template' );
?>


