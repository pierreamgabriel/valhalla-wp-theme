<?php
/**
 * The 404 error page template.
 *
 * @package Valhalla
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>
<div class="main-content-area">

  <div class="container-fluid">
  <?php get_template_part( 'template-parts/404-template' ); ?>
  </div>
 </div>
<?php get_footer(); ?>