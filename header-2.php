<?php
/**
 * The header for all the pages except for home.
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
<?php 
global $template;
$template_slug = basename( $template );
$title = wp_title( '', false, 'right' );

if (is_page_template('about.php')) {
$header_prefix = 'about';
$custom_title = true;
} elseif (is_page_template('portfolio.php')) {
$header_prefix = 'portfolio';
$custom_title = true;  
} elseif (is_page_template('services.php')) {
$header_prefix = 'services';
$custom_title = true;  
} elseif (is_page_template('faq.php')) {
$header_prefix = 'faq';
$custom_title = true;  
} elseif (is_page_template('contact.php')) {
$header_prefix = 'contact';
$custom_title = true;  
} elseif (is_page_template('blog.php') || 'home.php' === $template_slug ) {
$header_prefix = 'blog';
$custom_title = true;  
} elseif ('single.php' === $template_slug) {
$header_prefix = 'post';
$custom_title = false;  
} else {
$header_prefix = 'other-pages';
$custom_title = false;  
}

?>

<body <?php body_class() ?>>
    <div class="<?php echo esc_attr($header_prefix); ?>-header-top-bar-bg">
        <div class="<?php echo esc_attr($header_prefix); ?>-header-top-bar">
            <i id="header-phone" class="fas fa-lg fa-phone"></i><span class="phone-top">
                <?php echo esc_html( get_theme_mod( 'valhalla_header_phone') ); ?></span><a href="<?php echo esc_url( get_theme_mod( 'valhalla_header_twitter', '' ) ); ?>">
                <i id="header-twitter" class="fa fa-lg fa-twitter"></i></a><a href="<?php echo esc_url( get_theme_mod( 'valhalla_header_facebook', '' ) ); ?>">
                <i id="header-facebook" class="fa fa-lg fa-facebook-f"></i></a><a href="<?php echo esc_url( get_theme_mod( 'valhalla_header_instagram', '' ) ); ?>">
                <i id="header-instagram" class="fa fa-lg fa-instagram"></i></a>
        </div>
    </div>

    <div id="header" class="<?php echo esc_attr($header_prefix); ?>-header-background">
        <div class="container-fluid <?php echo esc_attr($header_prefix); ?>-header-main-div">
            <?php get_template_part( 'template-parts/header-menu' ); ?>
        </div>
    </div>

    <div class="container-fluid <?php echo esc_attr($header_prefix); ?>-header-title-bar">
        <div class="container-fluid <?php echo esc_attr($header_prefix); ?>-header-title-bar-1200px">
            <p class="title-bar-title">
                <?php if (true == $custom_title && true == get_theme_mod( 'valhalla_' . esc_attr($header_prefix) . '_custom_title_enable')) : ?>
                <?php echo esc_html( get_theme_mod( 'valhalla_' . esc_attr($header_prefix) . '_custom_title') ); ?>
                <?php elseif (is_category()) : ?>
                <?php printf( __( 'Category: %s', 'valhalla' ), single_cat_title( '', false ) ); ?>
                <?php elseif (is_archive()) : ?>
                <?php echo the_archive_title(); ?>
                <?php elseif (is_search()) : ?>
                <?php printf( esc_html__( 'Search Results for: %s', 'valhalla' ), '<span>' . get_search_query() . '</span>' ); ?>
                <?php elseif (is_home()) : ?>
                <?php if ($title) : ?>
                <?php echo esc_html($title); ?>
                <?php else : ?>
                <?php echo esc_html(get_bloginfo('name')); ?>
                <?php endif; ?>
                <?php else : ?>
                <?php echo esc_html(get_the_title()); ?>
                <?php endif; ?>
            </p>
        </div>
    </div>