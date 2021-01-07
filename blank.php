<?php /* Template Name: Blank */ ?>
<?php
/*
* Blank page template
*
* @package Valhalla
* @subpackage Templates
*/

// Do not allow directly accessing this file.

if ( ! defined( 'ABSPATH' ) ) {
exit( 'Direct script access denied.' );
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="blank-page-section1">
<?php  while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
</div>
	
<div class="content-separator"></div>
	
<?php get_footer(); ?>