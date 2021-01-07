<?php
/*
* Template part for displaying the header menu.
*
* @package Valhalla
* @subpackage Templates
*/

// Do not allow directly accessing this file.

if ( ! defined( 'ABSPATH' ) ) {
exit( 'Direct script access denied.' );
}
?>

<nav id="header-nav-bar" class="navbar navbar-expand-md navbar-light <?php if (!get_theme_mod( 'valhalla_header_logo_url')) : echo " no-logo"; endif; ?>">
	
<a class="navbar-brand" href="<?php echo esc_url( get_site_url() ); ?>">
<?php if ( get_theme_mod( 'valhalla_header_logo_url') ) : ?>
<img src="<?php echo esc_url( get_theme_mod( 'valhalla_header_logo_url') ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'name' )); ?>" class="img-fluid site-logo">
<?php endif; ?>
</a>
	
<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php echo esc_html__( 'Toggle Navigation', 'valhalla' ); ?>">
<span class="navbar-custom-toggler-icon"><i class="fas fa-bars"></i></span>
</button>
	
<div class="collapse navbar-collapse justify-content-end" id="navbar-content">
<?php valhalla_bootstrap_nav(); ?>
</div>
	
</nav>