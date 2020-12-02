<?php
/**
 * The header for the home page.
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

<body <?php body_class() ?>>
    <div class="home-header-top-bar-bg">
        <div class="home-header-top-bar">
            <i id="header-phone" class="fas fa-lg fa-phone"></i><span class="phone-top">
                <?php echo esc_html( get_theme_mod( 'valhalla_header_phone' ) ); ?></span><a href="<?php echo esc_url( get_theme_mod( 'valhalla_header_twitter') ); ?>">
                <i id="header-twitter" class="fa fa-lg fa-twitter"></i></a><a href="<?php echo esc_url( get_theme_mod( 'valhalla_header_facebook') ); ?>">
                <i id="header-facebook" class="fa fa-lg fa-facebook-f"></i></a><a href="<?php echo esc_url( get_theme_mod( 'valhalla_header_instagram') ); ?>">
                <i id="header-instagram" class="fa fa-lg fa-instagram"></i></a>
        </div>
    </div>
    <div id="home-header" class="home-header-background1">
        <div class="container-fluid home-header-main-div">
            <div class="row">
                <div class="col">
                    <?php get_template_part( 'template-parts/header-menu' ); ?>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="home-header-transparency-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/transparency.png" alt="<?php esc_attr__('transparent image', 'valhalla'); ?>" class="img-fluid">
                        <div class="home-header-headlines">
                            <div id="header-carousel" class="carousel" data-ride="carousel">
                                <?php $settings = get_theme_mod( 'valhalla_header_headlines'); 
                                      $headlines = count($settings);
                                      $indicator = 0;
                                      $item = 0;
                                ?>
                                <?php if ( $headlines > 1 ) : ?>
                                <ol class="carousel-indicators">
                                    <?php foreach( $settings as $setting ) : ?>
                                    <li id="indicator<?php echo esc_attr( $indicator ); ?>" data-target="#header-carousel" data-slide-to="<?php echo esc_attr( $indicator ); ?>"></li>
                                    <?php $indicator = $indicator + 1; ?>
                                    <?php endforeach; ?>
                                </ol>
                                <div class="carousel-inner">
                                    <?php foreach( $settings as $setting ) : ?>
                                    <?php $item = $item + 1; ?>
                                    <div id="carousel-item<?php echo esc_attr( $item ); ?>" class="carousel-item">
                                        <div>
                                            <h1 class="h1-header-headline">
                                                <?php echo esc_html( $setting['field1'] ); ?>
                                            </h1>
                                            <p class="header-carousel-caption">
                                                <?php echo esc_html( $setting['field2'] ); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <?php else : ?>
                                <div class="carousel-inner">
                                    <?php foreach( $settings as $setting ) : ?>
                                    <div class="item active">
                                        <div>
                                            <h1 class="h1-header-headline">
                                                <?php echo esc_html( $setting['field1'] ); ?>
                                            </h1>
                                            <p class="header-carousel-caption">
                                                <?php echo esc_html( $setting['field2'] ); ?>
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
    </div>