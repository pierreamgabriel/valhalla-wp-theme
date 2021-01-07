<?php
/*
* Valhalla functions and definitions.
*
* @package Valhalla
* @subpackage Core
*/

// Do not allow directly accessing this file.

if ( ! defined( 'ABSPATH' ) ) {
exit( 'Direct script access denied.' );
}

require_once( dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php' );
require( dirname( __FILE__ ) . '/inc/kirki/kirki.php' );
require( dirname( __FILE__ ) . '/inc/customizer.php' );
require( 'dynamic-styles.php' );

/*
* Register Custom Navigation Walker
*/

require_once('class-wp-bootstrap-navwalker.php');

function valhalla_bootstrap_nav() {
wp_nav_menu( array(
'theme_location'    => 'header-menu',
'depth'             => 2,
'container'         => 'false',
'menu_class'        => 'nav navbar-nav',
'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
'walker'            => new wp_bootstrap_navwalker())
);
}

function valhalla_register_header_menu() {
register_nav_menu('header-menu',__( 'Header Menu', 'valhalla' ));
}
add_action( 'init', 'valhalla_register_header_menu' );

/*
* Theme setup
*/

function valhalla_setup() {
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'align-wide' );
add_theme_support( 'align-full' );
add_theme_support( 'editor-styles' );
add_editor_style( 'style-editor.css' );
}
add_action( 'after_setup_theme', 'valhalla_setup' );

/*
* Register sidebars
*/

function valhalla_widgets_init() {
register_sidebar( array(
'name'          => __( 'Left Sidebar', 'valhalla' ),
'id'            => 'sidebar-1',
'description'   => __( 'Add widgets here to appear in the sidebar on blog posts.', 'valhalla' ),
'before_widget' => '<section id="%1$s" class="widget %2$s">',
'after_widget'  => '</section>',
'before_title'  => '<h2 class="widget-title">',
'after_title'   => '</h2>',
) );
register_sidebar( array(
'name'          => __( 'Footer Sidebar', 'valhalla' ),
'id'            => 'sidebar-2',
'description'   => __( 'Add widgets here to appear in the footer.', 'valhalla' ),
'before_widget' => '<section id="%1$s" class="widget %2$s">',
'after_widget'  => '</section>',
'before_title'  => '<h2 class="widget-title">',
'after_title'   => '</h2>',
) );
}
add_action( 'widgets_init', 'valhalla_widgets_init' );

/*
* Enqueue scripts and fonts
*/

function valhalla_scripts() {
global $template;
$template_slug = basename( $template );

if ( (is_front_page() && is_home()) || ('index.php' === $template_slug) || (is_404())) { 
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '4.2.1', true);
wp_enqueue_script('valhalla-carousel', get_template_directory_uri() . '/js/valhalla-carousel.js', array('jquery'), null, true);
}
else if ( is_home()) { 
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '4.2.1', true);
}
else if ( is_front_page() || is_page_template('services.php')){
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '4.2.1', true);  
wp_enqueue_script('jquery-ui-core');
wp_enqueue_script('jquery-ui-tabs');     
wp_enqueue_script('valhalla-carousel', get_template_directory_uri() . '/js/valhalla-carousel.js', array('jquery'), null, true);
wp_enqueue_script('font-awesome-shims', get_template_directory_uri() . '/js/v4-shims.js', array(), '5.0.3', true);
wp_enqueue_script('valhalla-tabs', get_template_directory_uri() . '/js/valhalla-tabs.js', array(), null, true); 
} else {
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '4.2.1', true);
wp_enqueue_script('font-awesome-shims', get_template_directory_uri() . '/js/v4-shims.js', array(), '5.0.3', true);
}
}  
add_action('wp_enqueue_scripts', 'valhalla_scripts');

function valhalla_footer_scripts() {
if (is_page_template('faq.php')) { 
?>
<script>
( function( $ ) { 
"use strict";
$( "#faq-button1" ).attr( "aria-expanded", "true" );
$( "#faq-collapse1" ).addClass( "show");
} )(jQuery);
</script>
<?php 
}
}
add_action('wp_footer', 'valhalla_footer_scripts');

function valhalla_fonts() {
wp_enqueue_style( 'google-font-sans-pro', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro', false ); 
wp_enqueue_style( 'google-font-montserrat', 'https://fonts.googleapis.com/css?family=Montserrat', false );  
wp_enqueue_style( 'google-font-libre-baskerville', 'https://fonts.googleapis.com/css?family=Libre+Baskerville', false );  
wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css', array(), '5.7.1', false );  
}
add_action( 'wp_enqueue_scripts', 'valhalla_fonts' );

/*
* Set content max width
*/

if ( ! isset( $content_width ) ) $content_width = 600;

/*
* Style tags
*/

function valhalla_the_tags($html) {
$postid = get_the_ID();
$html = str_replace('<a','<a class="badge badge-primary tags-badge"',$html);
return $html;
}
add_filter('the_tags','valhalla_the_tags',10,1);

/*
* Customizer custom styles
*/

function valhala_customizer_style( $config ) {
return wp_parse_args( array(
'description'  => esc_html__( 'Valhalla is a modern, fast and highly customizable WordPress theme.', 'valhalla' ),
'color_accent' => '#0091EA',
'color_back'   => '#5a6268',
), $config );
}
add_filter( 'kirki_config', 'valhala_customizer_style' );

function valhalla_customizer_additional_style() {
wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/css/customizer.css', false);
wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action('admin_enqueue_scripts', 'valhalla_customizer_additional_style');

/*
* Recommend the installation of the Valhalla Contact Form plugin
*/

function valhalla_register_required_plugins() {
$plugins = array(
array(
'name'               => 'Valhalla Contact Form', 
'slug'               => 'valhalla-contact-form', 
'source'             => get_template_directory() . '/plugins/valhalla-contact-form.zip', 
'required'           => false, 
'version'            => '1.0', 
'force_activation'   => false, 
'force_deactivation' => false, 
'external_url'       => '', 
'is_callable'        => '', 
),
);
$config = array(
'id'           => 'valhalla',                 
'default_path' => '',                      
'menu'         => 'tgmpa-install-plugins', 
'has_notices'  => true,                   
'dismissable'  => true,                    
'dismiss_msg'  => '',                      
'is_automatic' => false,                   
'message'      => '',                     
);

tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'valhalla_register_required_plugins' );

/*
* Categories widget with hierarchy enabled
*/

function categories_widget_border() {
if (is_single()) {
?>
<script>
( function( $ ) { 
"use strict";
$( "ul.children" ).parent().css( "border", "none" );
} )(jQuery);
</script>
<?php 
}
}
add_action('wp_footer', 'categories_widget_border');