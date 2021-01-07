<?php
/*
* The Static Front Page template.
*
* @package Valhalla
* @subpackage Templates
*/

// Do not allow directly accessing this file.

if ( ! defined( 'ABSPATH' ) ) {
exit( 'Direct script access denied.' );
}
?>

<?php
if ( is_front_page() && is_home() ) {
get_header();
get_template_part( 'template-parts/blog-template' );
} elseif ( is_front_page() ) {
get_template_part( 'template-parts/home-template' );
} 
?>