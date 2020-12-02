<?php
/**
 * The template for displaying the search form.
 *
 * @package Valhalla
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" accept-charset="utf-8" id="searchform" role="search">
  <div class="search-form">
   <div>
    <input class="search-box" type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="<?php echo esc_html__( 'Search for...', 'valhalla' ); ?>" />
  </div>
    <button type="submit" class="btn search-button <?php echo esc_attr( get_theme_mod( 'valhalla_post_search_button_style', 'btn-secondary' ) ); ?>" id="searchsubmit"><?php echo esc_html__( 'Search', 'valhalla' ); ?></button>
  </div>
</form>
