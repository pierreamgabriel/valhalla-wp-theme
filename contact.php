<?php /* Template Name: Contact */ ?>
<?php
/*
* The Contact page template.
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

<div class="main-content-area">

<div class="container-fluid contact-section1">
<div class="row">
<div class="col-md">
<p class="contact-section1-heading">
<?php echo esc_html( get_theme_mod( 'valhalla_contact_s1_heading') ); ?>
</p>
<?php if ( true == get_theme_mod( 'valhalla_contact_s1_html_enable') ) : ?>
<?php echo wp_kses_post( get_theme_mod( 'valhalla_contact_s1_html') ); ?>
<?php else : ?>
<p class="contact-section1-text">
<?php echo esc_html( get_theme_mod( 'valhalla_contact_s1_text') ); ?>
</p>
<?php endif; ?>
</div>
</div>
</div>

<?php if ( true == get_theme_mod( 'valhalla_contact_s1_display') ) : ?>
<div class="content-separator"></div>
<?php endif; ?>

<div class="container-fluid contact-section2">
<?php if (is_plugin_active('valhalla-contact-form/valhalla-contact-form.php')) : ?>
<?php echo do_shortcode('[valhalla-contact-form]'); ?>
<?php endif; ?>
</div>

<?php if ( true == get_theme_mod( 'valhalla_contact_s2_form_display') || true == get_theme_mod( 'valhalla_contact_s2_maps_display') ) : ?>
<div class="content-separator"></div>
<?php endif; ?>

<div class="container-fluid contact-section3">
<div class="row">
<div id="contact-emails" class="col-md">
<h3 class="contact-section3-headings">
<i class="fas fa-at contact-icons"></i><?php echo esc_html( get_theme_mod( 'valhalla_contact_s3_email_heading') ); ?></h3>
<?php $settings = get_theme_mod( 'valhalla_contact_s3_email'); ?>
<?php foreach( $settings as $setting ) : ?>
<p class="contact-section3-items">
<?php echo esc_html( $setting['field1'] ); ?>
</p>
<?php endforeach; ?>
</div>
<div id="contact-phones" class="col-md">
<h3 class="contact-section3-headings">
<i class="fas fa-phone contact-icons"></i><?php echo esc_html( get_theme_mod( 'valhalla_contact_s3_phone_heading') ); ?></h3>
<?php $settings = get_theme_mod( 'valhalla_contact_s3_phone'); ?>
<?php foreach( $settings as $setting ) : ?>
<p class="contact-section3-items">
<?php echo esc_html( $setting['field1'] ); ?>
</p>
<?php endforeach; ?>
</div>
<div id="contact-addresses" class="col-md">
<h3 class="contact-section3-headings">
<i class="far fa-envelope contact-icons"></i><?php echo esc_html( get_theme_mod( 'valhalla_contact_s3_address_heading') ); ?></h3>
<?php $settings = get_theme_mod( 'valhalla_contact_s3_address'); ?>
<?php foreach( $settings as $setting ) : ?>
<p class="contact-section3-items">
<?php echo esc_html( $setting['field1'] ); ?>
</p>
<?php endforeach; ?>
</div>
</div>
</div>

<?php if ( true == get_theme_mod( 'valhalla_contact_s3_display') ) : ?>
<div class="content-separator"></div>
<?php endif; ?>
	
</div>

<?php get_footer(); ?>