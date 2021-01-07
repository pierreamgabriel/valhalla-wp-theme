<?php
/*
* Template part for displaying the Static Front Page.
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
	
<div class="container-fluid home-section1">
<div class="row">
<div class="col-md">
<p class="home-section1-heading-align home-section1-heading"><span class="badge <?php echo esc_attr( get_theme_mod( 'valhalla_home_s1_icon_style', 'badge-secondary' ) ); ?> home-s1-icon"><i class="fa fa-lg fa-<?php echo esc_attr( get_theme_mod( 'valhalla_home_s1_icon', 'quote-left' ) ); ?>"></i></span>
<?php echo esc_html( get_theme_mod( 'valhalla_home_s1_heading') ); ?>
</p>
<?php if ( true == get_theme_mod( 'valhalla_home_s1_html_enable') ) : ?>
<?php echo wp_kses_post( get_theme_mod( 'valhalla_home_s1_html') ); ?>
<?php else : ?>
<p class="home-section1-text">
<?php echo esc_html( get_theme_mod( 'valhalla_home_s1_text') ); ?>
</p>
<?php endif; ?>
</div>
<div class="col-md home-section1-img-div">
<?php if ( get_theme_mod( 'valhalla_home_s1_image') ) : ?>
<img class="img-fluid home-section1-image" src="<?php echo esc_url( get_theme_mod( 'valhalla_home_s1_image') ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'valhalla_home_s1_img_alt') ); ?>">
<?php endif; ?>
</div>
</div>
</div>

<?php if ( true == get_theme_mod( 'valhalla_home_s1_display') ) : ?>
<div class="content-separator"></div>
<?php endif; ?>

<div class="home-section2">
<div class="home-section2_1">
<div class="container-fluid home-section2-bg">
<div class="container-fluid home-section2-div">
<div class="row">
<div class="col-md">
<p class="home-s2-icon"><i class="fa fa-4x fa-<?php echo esc_attr( get_theme_mod( 'valhalla_home_s2_icon', 'bolt' ) ); ?> home-s2-icon"></i></p>
<p class="home-section2-heading">
<?php echo esc_html( get_theme_mod( 'valhalla_home_s2_heading') ); ?>
</p>
<?php if ( true == get_theme_mod( 'valhalla_home_s2_html_enable') ) : ?>
<?php echo wp_kses_post( get_theme_mod( 'valhalla_home_s2_html') ); ?>
<?php else : ?>
<p class="home-section2-text">
<?php echo esc_html( get_theme_mod( 'valhalla_home_s2_text') ); ?>
</p>
<?php endif; ?>
</div>
</div>
<div class="row">
<div class="col-md home-section2-image-col">
<?php if ( get_theme_mod( 'valhalla_home_s2_image') ) : ?>
<img class="img-fluid home-section2-image" src="<?php echo esc_url( get_theme_mod( 'valhalla_home_s2_image') ); ?>" alt="<?php echo esc_attr( get_theme_mod( 'valhalla_home_s2_img_alt') ); ?>">
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
</div>

<?php if ( false == get_theme_mod( 'valhalla_home_s2_display') ) : ?>
<div class="container-fluid home-section3-b">
<?php else : ?>
<div class="container-fluid home-section3">
<?php endif; ?>
<div class="container-fluid">
<div class="row">
<div class="col-md">
<?php if ( true == get_theme_mod( 'valhalla_home_s3_link1_enable') ) : ?>
<p class="home-section3-heading1"><a href="<?php echo esc_url( get_theme_mod( 'valhalla_home_s3_link1') ); ?>">
<span class="badge <?php echo esc_attr( get_theme_mod( 'valhalla_home_s3_icons_style', 'badge-secondary' ) ); ?> home-s3-icon1">
<i class="fa fa-lg fa-<?php echo esc_attr( get_theme_mod( 'valhalla_home_s3_icon1', 'angle-double-left' ) ); ?>"></i></span>&nbsp;&nbsp;
<?php echo esc_html( get_theme_mod( 'valhalla_home_s3_heading1') ); ?></a></p>
<?php else : ?>
<p class="home-section3-heading1">
<span class="badge <?php echo esc_attr( get_theme_mod( 'valhalla_home_s3_icons_style', 'badge-secondary' ) ); ?> home-s3-icon1">
<i class="fa fa-lg fa-<?php echo esc_attr( get_theme_mod( 'valhalla_home_s3_icon1', 'angle-double-left' ) ); ?>"></i></span>&nbsp;&nbsp;
<?php echo esc_html( get_theme_mod( 'valhalla_home_s3_heading1') ); ?>
</p>
<?php endif; ?>
<?php if ( true == get_theme_mod( 'valhalla_home_s3_html1_enable') ) : ?>
<?php echo wp_kses_post( get_theme_mod( 'valhalla_home_s3_html1') ); ?>
<?php else : ?>
<p class="home-section3-text1">
<?php echo esc_html( get_theme_mod( 'valhalla_home_s3_text1') ); ?>
</p>
<?php endif; ?>
</div>
<div class="col-md home-section3-column2">
<?php if ( true == get_theme_mod( 'valhalla_home_s3_link2_enable') ) : ?>
<p class="home-section3-heading2"><a href="<?php echo esc_url( get_theme_mod( 'valhalla_home_s3_link2') ); ?>">
<span class="badge <?php echo esc_attr( get_theme_mod( 'valhalla_home_s3_icons_style', 'badge-secondary' ) ); ?> home-s3-icon2">
<i class="fa fa-lg fa-<?php echo esc_attr( get_theme_mod( 'valhalla_home_s3_icon2', 'exchange' ) ); ?>"></i></span>&nbsp;&nbsp;
<?php echo esc_html( get_theme_mod( 'valhalla_home_s3_heading2') ); ?></a></p>
<?php else : ?>
<p class="home-section3-heading2">
<span class="badge <?php echo esc_attr( get_theme_mod( 'valhalla_home_s3_icons_style', 'badge-secondary' ) ); ?> home-s3-icon2">
<i class="fa fa-lg fa-<?php echo esc_attr( get_theme_mod( 'valhalla_home_s3_icon2', 'exchange' ) ); ?>"></i></span>&nbsp;&nbsp;
<?php echo esc_html( get_theme_mod( 'valhalla_home_s3_heading2') ); ?>
</p>
<?php endif; ?>
<?php if ( true == get_theme_mod( 'valhalla_home_s3_html2_enable') ) : ?>
<?php echo wp_kses_post( get_theme_mod( 'valhalla_home_s3_html2') ); ?>
<?php else : ?>
<p class="home-section3-text2">
<?php echo esc_html( get_theme_mod( 'valhalla_home_s3_text2') ); ?>
</p>
<?php endif; ?>
</div>
</div>
</div>
</div>

<?php if ( true == get_theme_mod( 'valhalla_home_s3_display') ) : ?>
<div class="content-separator"></div>
<?php endif; ?>

<div class="container-fluid home-section4">
<div id="tabs">
<ul>
<?php $settings = get_theme_mod( 'valhalla_home_s4_tabs'); 
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
<div id="tabs-<?php echo esc_attr( $tabs2 ); ?>" class="home-section4-text">
<?php echo wp_kses_post( $setting['field2'] ); ?>
</div>
<?php endforeach; ?>
</div>
</div>

<?php if ( true == get_theme_mod( 'valhalla_home_s4_display') ) : ?>
<div class="content-separator"></div>
<?php endif; ?>

<div class="home-section5">
<div class="container-fluid home-section5-heading-div">
<p class="home-section5-heading">
<?php echo esc_html( get_theme_mod( 'valhalla_home_s5_main_heading') ); ?>
</p>
<div class="home-section5-heading-line"></div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md">
<div class="card home-section5-box1">
<div class="card-header home-section5-box1-header">
<?php if ( true == get_theme_mod( 'valhalla_home_s5_link1_enable') ) : ?>
<p class="home-section5-box1-title"><a href="<?php echo esc_url( get_theme_mod( 'valhalla_home_s5_link1', '' ) ); ?>">
<?php echo esc_html( get_theme_mod( 'valhalla_home_s5_heading1') ); ?></a></p>
<?php else : ?>
<p class="home-section5-box1-title">
<?php echo esc_html( get_theme_mod( 'valhalla_home_s5_heading1') ); ?>
</p>
<?php endif; ?>
</div>
<div class="card-body home-section5-box1-body">
<?php if ( true == get_theme_mod( 'valhalla_home_s5_html1_enable') ) : ?>
<?php echo wp_kses_post( get_theme_mod( 'valhalla_home_s5_html1', '' ) ); ?>
<?php else : ?>
<p class="home-section5-box1-text">
<?php echo esc_html( get_theme_mod( 'valhalla_home_s5_text1', '' ) ); ?>
</p>
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-md">
<div class="card home-section5-box2">
<div class="card-header home-section5-box2-header">
<?php if ( true == get_theme_mod( 'valhalla_home_s5_link2_enable') ) : ?>
<p class="home-section5-box2-title"><a href="<?php echo esc_url( get_theme_mod( 'valhalla_home_s5_link2', '' ) ); ?>">
<?php echo esc_html( get_theme_mod( 'valhalla_home_s5_heading2') ); ?></a></p>
<?php else : ?>
<p class="home-section5-box2-title">
<?php echo esc_html( get_theme_mod( 'valhalla_home_s5_heading2') ); ?>
</p>
<?php endif; ?>
</div>
<div class="card-body home-section5-box2-body">
<?php if ( true == get_theme_mod( 'valhalla_home_s5_html2_enable') ) : ?>
<?php echo wp_kses_post( get_theme_mod( 'valhalla_home_s5_html2') ); ?>
<?php else : ?>
<p class="home-section5-box2-text">
<?php echo esc_html( get_theme_mod( 'valhalla_home_s5_text2') ); ?>
</p>
<?php endif; ?>
</div>
</div>
</div>
</div>
</div>
</div>
	
</div>
	
<?php get_footer(); ?>