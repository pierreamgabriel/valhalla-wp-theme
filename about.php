<?php /* Template Name: About */ ?>
<?php
/*
* The About Us page template.
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

<div class="container-fluid about-section1">
<div class="row">
<div class="col-md">
<p class="about-section1-heading">
<?php echo esc_html( get_theme_mod( 'valhalla_about_s1_heading') ); ?>
</p>
<?php if ( true == get_theme_mod( 'valhalla_about_s1_html_enable') ) : ?>
<?php echo wp_kses_post( get_theme_mod( 'valhalla_about_s1_html') ); ?>
<?php else : ?>
<p class="about-section1-text">
<?php echo esc_html( get_theme_mod( 'valhalla_about_s1_text') ); ?>
</p>
<?php endif; ?>
</div>
<div class="col-md about-section1-img-div">
<?php if ( get_theme_mod( 'valhalla_about_s1_image') ) : ?>
<img class="img-fluid about-section1-image" src="<?php echo esc_url( get_theme_mod( 'valhalla_about_s1_image') ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'valhalla_about_s1_img_alt') ); ?>">
<?php endif; ?>
</div>
</div>
</div>

<?php if ( true == get_theme_mod( 'valhalla_about_s1_display') ) : ?>
<div class="content-separator"></div>
<?php endif; ?>

<div class="about-section2">
<div class="about-section2_1">
<div class="container-fluid about-section2-bg">
<div class="container-fluid about-section2-div">
<div class="row">
<div class="col-md">
<p class="about-s2-icon"><i class="fa fa-4x fa-<?php echo esc_attr( get_theme_mod('valhalla_about_s2_icon', 'user-circle') ); ?>"></i></p>
<p class="about-section2-heading">
<?php echo esc_html( get_theme_mod( 'valhalla_about_s2_heading') ); ?>
</p>
</div>
</div>
<div class="row">
<div class="col-md about-section2-team">
<?php if ( true == get_theme_mod( 'valhalla_about_s2_html_enable') ) : ?>
<?php echo wp_kses_post( get_theme_mod( 'valhalla_about_s2_html') ); ?>
<?php else : ?>
<div class="about-members-<?php echo esc_attr( get_theme_mod('valhalla_about_s2_members_number', '3') ); ?> card-deck">
<?php $settings = get_theme_mod( 'valhalla_about_s2_members'); ?>
<?php foreach( $settings as $setting ) : ?>
<div class="card about-section2-card-div">
<img src="<?php echo esc_url(wp_get_attachment_url($setting['field1'])); ?>" class="card-img-top img-fluid" alt="<?php echo esc_attr( $setting['field2'] ); ?>">
<div class="card-body">
<h5 class="card-title">
<?php echo esc_html( $setting['field2'] ); ?>
</h5>
<p class="card-text">
<?php echo esc_html( $setting['field3'] ); ?>
</p>
</div>
</div>
<?php endforeach; ?>
</div>
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
</div>

<?php if ( true == get_theme_mod( 'valhalla_about_s2_display') ) : ?>
<div class="content-separator"></div>
<?php endif; ?>

<div class="container-fluid about-section3">
<div class="row">
<div class="col-md">
<p class="about-section3-heading">
<?php echo esc_html( get_theme_mod( 'valhalla_about_s3_heading') ); ?>
</p>
</div>
</div>
<div class="row">
<div class="col-md">
<?php if ( true == get_theme_mod( 'valhalla_about_s3_html_enable') ) : ?>
<?php echo wp_kses_post( get_theme_mod( 'valhalla_about_s3_html') ); ?>
<?php else : ?>
<div class="card-columns">
<?php $settings = get_theme_mod( 'valhalla_about_s3_clients'); ?>
<?php foreach( $settings as $setting ) : ?>
<div class="card about-clients">
<img src="<?php echo wp_get_attachment_url($setting['field1']); ?>" class="about-client-img">
</div>
<?php endforeach; ?>
</div>
<?php endif; ?>
</div>
</div>
</div>

<?php if ( true == get_theme_mod( 'valhalla_about_s3_display') ) : ?>
<div class="content-separator"></div>
<?php endif; ?>

</div>

<?php get_footer(); ?>