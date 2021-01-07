<?php /* Template Name: Services */ ?>
<?php
/*
* The Services page template.
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

<div class="container-fluid services-section1">
<div class="row services-section1-border">
<div class="col-md">
<p class="services-section1-heading">
<?php echo esc_html( get_theme_mod( 'valhalla_services_s1_heading') ); ?>
</p>
<?php if ( true == get_theme_mod( 'valhalla_services_s1_html_enable') ) : ?>
<?php echo wp_kses_post( get_theme_mod( 'valhalla_services_s1_html') ); ?>
<?php else : ?>
<p class="services-section1-text">
<?php echo esc_html( get_theme_mod( 'valhalla_services_s1_text') ); ?>
</p>
<?php endif; ?>
</div>
<div class="col-md services-section1-img-div">
<?php if ( get_theme_mod( 'valhalla_services_s1_image') ) : ?>
<img src="<?php echo esc_url( get_theme_mod( 'valhalla_services_s1_image') ); ?>" class="img-fluid services-section1-image" alt="<?php echo esc_attr( get_theme_mod( 'valhalla_services_s1_img_alt') ); ?>">
<?php endif; ?>
</div>
</div>
</div>

<?php if ( true == get_theme_mod( 'valhalla_services_s1_display') ) : ?>
<div class="content-separator"></div>
<?php endif; ?>

<div class="container-fluid services-section2">
<div class="row">
<?php $settings = get_theme_mod( 'valhalla_services_add_boxes'); ?>
<div class="col">
<div class="card-deck">
<?php if ( 'bg-light' == get_theme_mod( 'valhalla_services_s2_feature_style') ) : ?>
<?php foreach( $settings as $setting ) : ?>
<div class="card bg-light mb-3">
<div class="card-header services-box-header"><i class="fa fa-2x fa-<?php echo esc_attr( get_theme_mod( 'valhalla_services_s2_icon', 'star' ) ); ?> services-box-icon"></i></div>
<div class="card-body">
<h5 class="card-title services-box-title">
<?php echo esc_html( $setting['field1'] ); ?>
</h5>
<p class="card-text services-box-text">
<?php echo esc_html( $setting['field2'] ); ?>
</p>
</div>
</div>
<?php endforeach; ?>
<?php else : ?>
<?php foreach( $settings as $setting ) : ?>
<div class="card text-white <?php echo esc_attr( get_theme_mod( 'valhalla_services_s2_feature_style', 'bg-info' ) ); ?> mb-3">
<div class="card-header services-box-header"><i class="fa fa-2x fa-<?php echo esc_attr( get_theme_mod( 'valhalla_services_s2_icon', 'star' ) ); ?> services-box-icon"></i></div>
<div class="card-body">
<h5 class="card-title services-box-title">
<?php echo esc_html( $setting['field1'] ); ?>
</h5>
<p class="card-text services-box-text">
<?php echo esc_html( $setting['field2'] ); ?>
</p>
</div>
</div>
<?php endforeach; ?>
<?php endif; ?>
</div>
</div>
</div>
</div>

<?php if ( true == get_theme_mod( 'valhalla_services_s2_display') ) : ?>
<div class="content-separator"></div>
<?php endif; ?>

<div class="container services-section3">
<div id="tabs">
<ul>
<?php $settings = get_theme_mod( 'valhalla_services_add_services'); 
$tabs = 0;
$tabs2 = 0;
?>
<?php foreach( $settings as $setting ) : ?>
<?php $tabs = $tabs + 1; ?>
<li><a href="#tabs-<?php echo esc_attr( $tabs ); ?>">
<?php echo esc_html( $setting['field1'] ); ?></a></li>
<?php endforeach; ?>
</ul>
<?php foreach( $settings as $setting ) : ?>
<?php $tabs2 = $tabs2 + 1; ?>
<div id="tabs-<?php echo esc_attr( $tabs2 ); ?>" class="services-section3-text">
<?php echo wp_kses_post( $setting['field2'] ); ?>
</div>
<?php endforeach; ?>
</div>
</div>

<?php if ( true == get_theme_mod( 'valhalla_services_s3_display') ) : ?>
<div class="content-separator"></div>
<?php endif; ?>

</div>

<?php get_footer(); ?>