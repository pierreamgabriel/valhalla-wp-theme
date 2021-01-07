<?php
/*
* Valhalla dynamic styles function.
*
* @package Valhalla
* @subpackage Core
*/

// Do not allow directly accessing this file.

if ( ! defined( 'ABSPATH' ) ) {
exit( 'Direct script access denied.' );
}

function valhalla_dynamic_styles() {
global $template;
$template_slug = basename( $template );

/* Enqueue styles for the home page */

if ( (is_front_page() && is_home()) || (is_front_page()) || (is_404()) || ('index.php' === $template_slug) ) {
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.2.1');
wp_enqueue_style('jquery-ui-theme',  get_template_directory_uri() . '/css/jquery-ui.css');
wp_enqueue_style('valhalla-style',  get_template_directory_uri() . '/style.css', array('bootstrap', 'jquery-ui-theme'));
wp_enqueue_style('valhalla-style-responsive',  get_template_directory_uri() . '/style-responsive.css', array('valhalla-style'));  

$bg1_color1 = get_theme_mod( 'valhalla_home_header_bg1_color1', '#131b80');     
$bg1_color2 = get_theme_mod( 'valhalla_home_header_bg1_color2', '#040325');   
$bg2_color1 = get_theme_mod( 'valhalla_home_header_bg2_color1', '#0a5d9f');     
$bg2_color2 = get_theme_mod( 'valhalla_home_header_bg2_color2', '#1e92dd');  
$bg3_color1 = get_theme_mod( 'valhalla_home_header_bg3_color1', '#2f2e34');     
$bg3_color2 = get_theme_mod( 'valhalla_home_header_bg3_color2', '#16151a');

$bg1_img = get_theme_mod( 'valhalla_home_header_bg1_img');     
$bg1_img_color = get_theme_mod( 'valhalla_home_header_bg1_img_color');
$bg2_img = get_theme_mod( 'valhalla_home_header_bg2_img');     
$bg2_img_color = get_theme_mod( 'valhalla_home_header_bg2_img_color'); 
$bg3_img = get_theme_mod( 'valhalla_home_header_bg3_img');     
$bg3_img_color = get_theme_mod( 'valhalla_home_header_bg3_img_color');    

$menu_default = get_theme_mod( 'valhalla_home_header_menu_default_color', '#fff');
$menu_hover = get_theme_mod( 'valhalla_home_header_menu_hover_color', '#ccc');
$dropdown_bg = get_theme_mod( 'valhalla_home_header_menu_dropdown_bg', '#fff');
$dropdown_border = get_theme_mod( 'valhalla_home_header_menu_dropdown_border', '#ccc');
$dropdown_color = get_theme_mod( 'valhalla_home_header_menu_dropdown_color', '#525f7f');

$home_tabs_active_bg = get_theme_mod( 'valhalla_home_s4_tabs_active_bg', '#fff'); 
$home_tabs_active_border = get_theme_mod( 'valhalla_home_s4_tabs_active_border', '#ddd'); 
$home_tabs_active_color = get_theme_mod( 'valhalla_home_s4_tabs_active_color', '#cfb87c');
$home_tabs_default_bg = get_theme_mod( 'valhalla_home_s4_tabs_default_bg', '#eee');
$home_tabs_default_border = get_theme_mod( 'valhalla_home_s4_tabs_default_border', '#ddd'); 
$home_tabs_default_color = get_theme_mod( 'valhalla_home_s4_tabs_default_color', '#666');  
$home_tabs_default_bg_hover = get_theme_mod( 'valhalla_home_s4_tabs_default_bg_hover', '#fff');
$home_tabs_default_border_hover = get_theme_mod( 'valhalla_home_s4_tabs_default_border_hover', '#ddd');
$home_tabs_default_color_hover = get_theme_mod( 'valhalla_home_s4_tabs_default_color_hover', '#666');  
$home_tabs_content_bg_color = get_theme_mod( 'valhalla_home_s4_tabs_content_bg', '#fff');
$home_tabs_content_border_color = get_theme_mod( 'valhalla_home_s4_tabs_content_border', '#ddd');
$home_tabs_content_font_color = get_theme_mod( 'valhalla_home_s4_tabs_content_color', '#525f7f');    

if ('gradient' == get_theme_mod('valhalla_header_style_home', 'gradient')) {
$header_bg = "
.home-header-background1 {
background: {$bg1_color1} ;
background: -moz-radial-gradient(circle, {$bg1_color1}  0%, {$bg1_color2}  50%);
background: -webkit-radial-gradient(circle, {$bg1_color1}  0%, {$bg1_color2}  50%);
background: radial-gradient(circle, {$bg1_color1}  0%, {$bg1_color2}  50%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\"{$bg1_color1}\",endColorstr=\"{$bg1_color2}\",GradientType=1);
}
.home-header-background2 {
background: {$bg2_color1} ;
background: -moz-radial-gradient(circle, {$bg2_color1}  0%, {$bg2_color2}  50%);
background: -webkit-radial-gradient(circle, {$bg2_color1}  0%, {$bg2_color2}  50%);
background: radial-gradient(circle, {$bg2_color1}  0%, {$bg2_color2}  50%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\"{$bg2_color1}\",endColorstr=\"{$bg2_color2}\",GradientType=1);
}
.home-header-background3 {
background: {$bg3_color1} ;
background: -moz-radial-gradient(circle, {$bg3_color1}  0%, {$bg3_color2}  50%);
background: -webkit-radial-gradient(circle, {$bg3_color1}  0%, {$bg3_color2}  50%);
background: radial-gradient(circle, {$bg3_color1}  0%, {$bg3_color2}  50%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\"{$bg3_color1}\",endColorstr=\"{$bg3_color2}\",GradientType=1);
} ";
wp_add_inline_style( 'valhalla-style', $header_bg );

} else {

$header_bg = "  
.home-header-background1 {
background-image: url(\"{$bg1_img}\");
background-color: {$bg1_img_color};
background-repeat: no-repeat;   
background-size: cover;   
}
.home-header-background2 {
background-image: url(\"{$bg2_img}\");
background-color: {$bg2_img_color};
background-repeat: no-repeat;   
background-size: cover;      
}
.home-header-background3 {
background-image: url(\"{$bg3_img}\");
background-color: {$bg3_img_color};
background-repeat: no-repeat;   
background-size: cover;      
} ";
wp_add_inline_style( 'valhalla-style', $header_bg );
}

$jquery_ui_css = "
.ui-state-default, .ui-widget-content .ui-state-default {
background: {$home_tabs_default_bg} ;
border-color: {$home_tabs_default_border} ;
color: {$home_tabs_default_color} ;
}
.ui-widget-content .ui-state-default a {
color: {$home_tabs_default_color} ;
}
.ui-widget-content .ui-state-default:hover {
background: {$home_tabs_default_bg_hover} ;
border-color: {$home_tabs_default_border_hover} ;
color: {$home_tabs_default_color_hover} ;
}
.ui-widget-content .ui-state-default a:hover {
color: {$home_tabs_default_color_hover} ;
}
.ui-state-active, .ui-widget-content .ui-state-active {
background: {$home_tabs_active_bg} ;
border-color: {$home_tabs_active_border} ;
color: {$home_tabs_active_color} ;
}
.ui-widget-content .ui-state-active a {
color: {$home_tabs_active_color} ;
}
.ui-widget-content .ui-state-active:hover {
background: {$home_tabs_active_bg} ;
border-color: {$home_tabs_active_border} ;
color: {$home_tabs_active_color} ;
}
.ui-widget-content .ui-state-active a:hover {
color: {$home_tabs_active_color} ;
} 
.ui-tabs .ui-tabs-panel {
background: {$home_tabs_content_bg_color} ;
border-color: {$home_tabs_content_border_color} ;
color: {$home_tabs_content_font_color} ;
} ";
wp_add_inline_style( 'valhalla-style', $jquery_ui_css );  

$menu_bar = ".navbar-light .navbar-nav .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .show > .nav-link, 
.navbar-light .navbar-nav .nav-link:focus,
.navbar-custom-toggler-icon {
color: {$menu_default} ;
}
.navbar-light .navbar-nav .nav-link:hover {
color: {$menu_hover} ;
}
.dropdown-menu {
background-color: {$dropdown_bg} ;
}
.dropdown-menu {
border-color: {$dropdown_border} ;
}
.dropdown-item {
color: {$dropdown_color} ;
}
.dropdown-item:hover {
color: {$dropdown_color} ;
text-decoration: underline;
background: transparent;
}";
wp_add_inline_style( 'valhalla-style', $menu_bar );          
} 

/* Enqueue styles for the about us page */

else if ( is_page_template( 'about.php' ) ) {
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.2.1');
wp_enqueue_style('valhalla-style',  get_template_directory_uri() . '/style.css', array('bootstrap'));
wp_enqueue_style('valhalla-style-responsive',  get_template_directory_uri() . '/style-responsive.css', array('valhalla-style'));

$bg_color1 = get_theme_mod( 'valhalla_about_header_bg_color1', '#131b80');     
$bg_color2 = get_theme_mod( 'valhalla_about_header_bg_color2', '#040325');   

$menu_default = get_theme_mod( 'valhalla_about_header_menu_default_color', '#fff');
$menu_hover = get_theme_mod( 'valhalla_about_header_menu_hover_color', '#ccc');
$dropdown_bg = get_theme_mod( 'valhalla_about_header_menu_dropdown_bg', '#fff');
$dropdown_border = get_theme_mod( 'valhalla_about_header_menu_dropdown_border', '#ccc');
$dropdown_color = get_theme_mod( 'valhalla_about_header_menu_dropdown_color', '#525f7f');

$header_bg = "
.about-header-background {
background: {$bg_color1} ;
background: -moz-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: -webkit-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\"{$bg_color1}\",endColorstr=\"{$bg_color2}\",GradientType=1);
} ";
wp_add_inline_style( 'valhalla-style', $header_bg );

$menu_bar = ".navbar-light .navbar-nav .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .show > .nav-link, 
.navbar-light .navbar-nav .nav-link:focus,
.navbar-custom-toggler-icon {
color: {$menu_default} ;
}
.navbar-light .navbar-nav .nav-link:hover {
color: {$menu_hover} ;
}
.dropdown-menu {
background-color: {$dropdown_bg} ;
}
.dropdown-menu {
border-color: {$dropdown_border} ;
}
.dropdown-item {
color: {$dropdown_color} ;
}
.dropdown-item:hover {
color: {$dropdown_color} ;
text-decoration: underline;
background: transparent;
} ";
wp_add_inline_style( 'valhalla-style', $menu_bar );          
} 

/* Enqueue styles for the portfolio page */

else if ( is_page_template( 'portfolio.php' ) ) {
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.2.1');
wp_enqueue_style('valhalla-style',  get_template_directory_uri() . '/style.css', array('bootstrap')); 
wp_enqueue_style('valhalla-style-responsive',  get_template_directory_uri() . '/style-responsive.css', array('valhalla-style')); 

$bg_color1 = get_theme_mod( 'valhalla_portfolio_header_bg_color1', '#131b80');     
$bg_color2 = get_theme_mod( 'valhalla_portfolio_header_bg_color2', '#040325');   

$menu_default = get_theme_mod( 'valhalla_portfolio_header_menu_default_color', '#fff');
$menu_hover = get_theme_mod( 'valhalla_portfolio_header_menu_hover_color', '#ccc');
$dropdown_bg = get_theme_mod( 'valhalla_portfolio_header_menu_dropdown_bg', '#fff');
$dropdown_border = get_theme_mod( 'valhalla_portfolio_header_menu_dropdown_border', '#ccc');
$dropdown_color = get_theme_mod( 'valhalla_portfolio_header_menu_dropdown_color', '#525f7f');

$header_bg = "
.portfolio-header-background {
background: {$bg_color1} ;
background: -moz-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: -webkit-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\"{$bg_color1}\",endColorstr=\"{$bg_color2}\",GradientType=1);
} ";
wp_add_inline_style( 'valhalla-style', $header_bg );

$menu_bar = ".navbar-light .navbar-nav .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .show > .nav-link, 
.navbar-light .navbar-nav .nav-link:focus,
.navbar-custom-toggler-icon {
color: {$menu_default} ;
}
.navbar-light .navbar-nav .nav-link:hover {
color: {$menu_hover} ;
}
.dropdown-menu {
background-color: {$dropdown_bg} ;
}
.dropdown-menu {
border-color: {$dropdown_border} ;
}
.dropdown-item {
color: {$dropdown_color} ;
}
.dropdown-item:hover {
color: {$dropdown_color} ;
text-decoration: underline;
background: transparent;
} ";
wp_add_inline_style( 'valhalla-style', $menu_bar );          
} 

/* Enqueue styles for the services page */

else if ( is_page_template( 'services.php' ) ) {
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.2.1');
wp_enqueue_style('jquery-ui-theme',  get_template_directory_uri() . '/css/jquery-ui.css');
wp_enqueue_style('valhalla-style',  get_template_directory_uri() . '/style.css', array('bootstrap', 'jquery-ui-theme'));
wp_enqueue_style('valhalla-style-responsive',  get_template_directory_uri() . '/style-responsive.css', array('valhalla-style'));

$bg_color1 = get_theme_mod( 'valhalla_services_header_bg_color1', '#131b80');     
$bg_color2 = get_theme_mod( 'valhalla_services_header_bg_color2', '#040325');   

$menu_default = get_theme_mod( 'valhalla_services_header_menu_default_color', '#fff');
$menu_hover = get_theme_mod( 'valhalla_services_header_menu_hover_color', '#ccc');
$dropdown_bg = get_theme_mod( 'valhalla_services_header_menu_dropdown_bg', '#fff');
$dropdown_border = get_theme_mod( 'valhalla_services_header_menu_dropdown_border', '#ccc');
$dropdown_color = get_theme_mod( 'valhalla_services_header_menu_dropdown_color', '#525f7f');

$services_tabs_active_bg = get_theme_mod( 'valhalla_services_s3_tabs_active_bg', '#6c757d'); 
$services_tabs_active_border = get_theme_mod( 'valhalla_services_s3_tabs_active_border', '#6c757d'); 
$services_tabs_active_color = get_theme_mod( 'valhalla_services_s3_tabs_active_color', '#fff');
$services_tabs_default_bg = get_theme_mod( 'valhalla_services_s3_tabs_default_bg', '#eee');
$services_tabs_default_border = get_theme_mod( 'valhalla_services_s3_tabs_default_border', '#ddd'); 
$services_tabs_default_color = get_theme_mod( 'valhalla_services_s3_tabs_default_color', '#666');  
$services_tabs_default_bg_hover = get_theme_mod( 'valhalla_services_s3_tabs_default_bg_hover', '#fff');
$services_tabs_default_border_hover = get_theme_mod( 'valhalla_services_s3_tabs_default_border_hover', '#ddd');
$services_tabs_default_color_hover = get_theme_mod( 'valhalla_services_s3_tabs_default_color_hover', '#666');  
$services_tabs_content_bg_color = get_theme_mod( 'valhalla_services_s3_tabs_content_bg', '#fff');
$services_tabs_content_border_color = get_theme_mod( 'valhalla_services_s3_tabs_content_border', '#6c757d');
$services_tabs_content_font_color = get_theme_mod( 'valhalla_services_s3_tabs_content_color', '#525f7f');    

$header_bg = "
.services-header-background {
background: {$bg_color1} ;
background: -moz-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: -webkit-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\"{$bg_color1}\",endColorstr=\"{$bg_color2}\",GradientType=1);
} ";
wp_add_inline_style( 'valhalla-style', $header_bg );

$menu_bar = ".navbar-light .navbar-nav .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .show > .nav-link, 
.navbar-light .navbar-nav .nav-link:focus,
.navbar-custom-toggler-icon {
color: {$menu_default} ;
}
.navbar-light .navbar-nav .nav-link:hover {
color: {$menu_hover} ;
}
.dropdown-menu {
background-color: {$dropdown_bg} ;
}
.dropdown-menu {
border-color: {$dropdown_border} ;
}
.dropdown-item {
color: {$dropdown_color} ;
}
.dropdown-item:hover {
color: {$dropdown_color} ;
text-decoration: underline;
background: transparent;
} ";
wp_add_inline_style( 'valhalla-style', $menu_bar );         

$jquery_ui_css = "
.ui-state-default, .ui-widget-content .ui-state-default {
background: {$services_tabs_default_bg} ;
border-color: {$services_tabs_default_border} ;
color: {$services_tabs_default_color} ;
}
.ui-widget-content .ui-state-default a {
color: {$services_tabs_default_color} ;
}
.ui-widget-content .ui-state-default:hover {
background: {$services_tabs_default_bg_hover} ;
border-color: {$services_tabs_default_border_hover} ;
color: {$services_tabs_default_color_hover} ;
}
.ui-widget-content .ui-state-default a:hover {
color: {$services_tabs_default_color_hover} ;
}
.ui-state-active, .ui-widget-content .ui-state-active {
background: {$services_tabs_active_bg} ;
border-color: {$services_tabs_active_border} ;
color: {$services_tabs_active_color} ;
}
.ui-widget-content .ui-state-active a {
color: {$services_tabs_active_color} ;
}
.ui-widget-content .ui-state-active:hover {
background: {$services_tabs_active_bg} ;
border-color: {$services_tabs_active_border} ;
color: {$services_tabs_active_color} ;
}
.ui-widget-content .ui-state-active a:hover {
color: {$services_tabs_active_color} ;
} 
.ui-tabs .ui-tabs-panel {
background: {$services_tabs_content_bg_color} ;
border-color: {$services_tabs_content_border_color} ;
color: {$services_tabs_content_font_color} ;
} ";
wp_add_inline_style( 'valhalla-style', $jquery_ui_css ); 
}  

/* Enqueue styles for the faq page */

else if ( is_page_template( 'faq.php' ) ) {
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.2.1');
wp_enqueue_style('valhalla-style',  get_template_directory_uri() . '/style.css', array('bootstrap'));
wp_enqueue_style('valhalla-style-responsive',  get_template_directory_uri() . '/style-responsive.css', array('valhalla-style')); 

$bg_color1 = get_theme_mod( 'valhalla_faq_header_bg_color1', '#131b80');     
$bg_color2 = get_theme_mod( 'valhalla_faq_header_bg_color2', '#040325');   

$menu_default = get_theme_mod( 'valhalla_faq_header_menu_default_color', '#fff');
$menu_hover = get_theme_mod( 'valhalla_faq_header_menu_hover_color', '#ccc');
$dropdown_bg = get_theme_mod( 'valhalla_faq_header_menu_dropdown_bg', '#fff');
$dropdown_border = get_theme_mod( 'valhalla_faq_header_menu_dropdown_border', '#ccc');
$dropdown_color = get_theme_mod( 'valhalla_faq_header_menu_dropdown_color', '#525f7f');

$header_bg = "
.faq-header-background {
background: {$bg_color1} ;
background: -moz-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: -webkit-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\"{$bg_color1}\",endColorstr=\"{$bg_color2}\",GradientType=1);
} ";
wp_add_inline_style( 'valhalla-style', $header_bg );

$menu_bar = ".navbar-light .navbar-nav .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .show > .nav-link, 
.navbar-light .navbar-nav .nav-link:focus,
.navbar-custom-toggler-icon {
color: {$menu_default} ;
}
.navbar-light .navbar-nav .nav-link:hover {
color: {$menu_hover} ;
}
.dropdown-menu {
background-color: {$dropdown_bg} ;
}
.dropdown-menu {
border-color: {$dropdown_border} ;
}
.dropdown-item {
color: {$dropdown_color} ;
}
.dropdown-item:hover {
color: {$dropdown_color} ;
text-decoration: underline;
background: transparent;
} ";
wp_add_inline_style( 'valhalla-style', $menu_bar );          
} 

/* Enqueue styles for the contact page */

else if ( is_page_template( 'contact.php' ) ) {
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.2.1');
wp_enqueue_style('valhalla-style',  get_template_directory_uri() . '/style.css', array('bootstrap'));
wp_enqueue_style('valhalla-style-responsive',  get_template_directory_uri() . '/style-responsive.css', array('valhalla-style'));

$bg_color1 = get_theme_mod( 'valhalla_contact_header_bg_color1', '#131b80');     
$bg_color2 = get_theme_mod( 'valhalla_contact_header_bg_color2', '#040325');   

$menu_default = get_theme_mod( 'valhalla_contact_header_menu_default_color', '#fff');
$menu_hover = get_theme_mod( 'valhalla_contact_header_menu_hover_color', '#ccc');
$dropdown_bg = get_theme_mod( 'valhalla_contact_header_menu_dropdown_bg', '#fff');
$dropdown_border = get_theme_mod( 'valhalla_contact_header_menu_dropdown_border', '#ccc');
$dropdown_color = get_theme_mod( 'valhalla_contact_header_menu_dropdown_color', '#525f7f');

$header_bg = "
.contact-header-background {
background: {$bg_color1} ;
background: -moz-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: -webkit-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\"{$bg_color1}\",endColorstr=\"{$bg_color2}\",GradientType=1);
} ";
wp_add_inline_style( 'valhalla-style', $header_bg );

$menu_bar = ".navbar-light .navbar-nav .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .show > .nav-link, 
.navbar-light .navbar-nav .nav-link:focus,
.navbar-custom-toggler-icon {
color: {$menu_default} ;
}
.navbar-light .navbar-nav .nav-link:hover {
color: {$menu_hover} ;
}
.dropdown-menu {
background-color: {$dropdown_bg} ;
}
.dropdown-menu {
border-color: {$dropdown_border} ;
}
.dropdown-item {
color: {$dropdown_color} ;
}
.dropdown-item:hover {
color: {$dropdown_color} ;
text-decoration: underline;
background: transparent;
} ";
wp_add_inline_style( 'valhalla-style', $menu_bar );          
} 

/* Enqueue styles for the blog page */

else if ( (is_page_template( 'blog.php' )) || (is_home()) ) {
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.2.1');
wp_enqueue_style('valhalla-style',  get_template_directory_uri() . '/style.css', array('bootstrap'));
wp_enqueue_style('valhalla-style-responsive',  get_template_directory_uri() . '/style-responsive.css', array('valhalla-style'));

$bg_color1 = get_theme_mod( 'valhalla_blog_header_bg_color1', '#131b80');     
$bg_color2 = get_theme_mod( 'valhalla_blog_header_bg_color2', '#040325');   

$menu_default = get_theme_mod( 'valhalla_blog_header_menu_default_color', '#fff');
$menu_hover = get_theme_mod( 'valhalla_blog_header_menu_hover_color', '#ccc');
$dropdown_bg = get_theme_mod( 'valhalla_blog_header_menu_dropdown_bg', '#fff');
$dropdown_border = get_theme_mod( 'valhalla_blog_header_menu_dropdown_border', '#ccc');
$dropdown_color = get_theme_mod( 'valhalla_blog_header_menu_dropdown_color', '#525f7f');

$header_bg = "
.blog-header-background {
background: {$bg_color1} ;
background: -moz-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: -webkit-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\"{$bg_color1}\",endColorstr=\"{$bg_color2}\",GradientType=1);
} ";
wp_add_inline_style( 'valhalla-style', $header_bg );

$menu_bar = ".navbar-light .navbar-nav .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .show > .nav-link, 
.navbar-light .navbar-nav .nav-link:focus,
.navbar-custom-toggler-icon {
color: {$menu_default} ;
}
.navbar-light .navbar-nav .nav-link:hover {
color: {$menu_hover} ;
}
.dropdown-menu {
background-color: {$dropdown_bg} ;
}
.dropdown-menu {
border-color: {$dropdown_border} ;
}
.dropdown-item {
color: {$dropdown_color} ;
}
.dropdown-item:hover {
color: {$dropdown_color} ;
text-decoration: underline;
background: transparent;
} ";
wp_add_inline_style( 'valhalla-style', $menu_bar );          
} 

/* Enqueue styles for the post page */

else if ( 'single.php' === $template_slug ) {
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.2.1');
wp_enqueue_style('valhalla-style',  get_template_directory_uri() . '/style.css', array('bootstrap'));
wp_enqueue_style('valhalla-style-responsive',  get_template_directory_uri() . '/style-responsive.css', array('valhalla-style')); 

$bg_color1 = get_theme_mod( 'valhalla_post_header_bg_color1', '#131b80');     
$bg_color2 = get_theme_mod( 'valhalla_post_header_bg_color2', '#040325');   

$menu_default = get_theme_mod( 'valhalla_post_header_menu_default_color', '#fff');
$menu_hover = get_theme_mod( 'valhalla_post_header_menu_hover_color', '#ccc');
$dropdown_bg = get_theme_mod( 'valhalla_post_header_menu_dropdown_bg', '#fff');
$dropdown_border = get_theme_mod( 'valhalla_post_header_menu_dropdown_border', '#ccc');
$dropdown_color = get_theme_mod( 'valhalla_post_header_menu_dropdown_color', '#525f7f');

$header_bg = "
.post-header-background {
background: {$bg_color1} ;
background: -moz-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: -webkit-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\"{$bg_color1}\",endColorstr=\"{$bg_color2}\",GradientType=1);
} ";
wp_add_inline_style( 'valhalla-style', $header_bg );

$menu_bar = "
.navbar-light .navbar-nav .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .show > .nav-link, 
.navbar-light .navbar-nav .nav-link:focus,
.navbar-custom-toggler-icon  {
color: {$menu_default} ;
}
.navbar-light .navbar-nav .nav-link:hover {
color: {$menu_hover} ;
}
.dropdown-menu {
background-color: {$dropdown_bg} ;
}
.dropdown-menu {
border-color: {$dropdown_border} ;
}
.dropdown-item {
color: {$dropdown_color} ;
}
.dropdown-item:hover {
color: {$dropdown_color} ;
text-decoration: underline;
background: transparent;
} ";
wp_add_inline_style( 'valhalla-style', $menu_bar );          
} 

/* Enqueue styles for other pages */

if ( 'page.php' === $template_slug || is_archive() || is_category() || is_search() ) {
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.2.1');
wp_enqueue_style('valhalla-style',  get_template_directory_uri() . '/style.css', array('bootstrap'));
wp_enqueue_style('valhalla-style-responsive',  get_template_directory_uri() . '/style-responsive.css', array('valhalla-style'));

$bg_color1 = get_theme_mod( 'valhalla_other_header_bg_color1', '#131b80');     
$bg_color2 = get_theme_mod( 'valhalla_other_header_bg_color2', '#040325');   

$menu_default = get_theme_mod( 'valhalla_other_header_menu_default_color', '#fff');
$menu_hover = get_theme_mod( 'valhalla_other_header_menu_hover_color', '#ccc');
$dropdown_bg = get_theme_mod( 'valhalla_other_header_menu_dropdown_bg', '#fff');
$dropdown_border = get_theme_mod( 'valhalla_other_header_menu_dropdown_border', '#ccc');
$dropdown_color = get_theme_mod( 'valhalla_other_header_menu_dropdown_color', '#525f7f');

$header_bg = "
.other-pages-header-background {
background: {$bg_color1} ;
background: -moz-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: -webkit-radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
background: radial-gradient(circle, {$bg_color1}  0%, {$bg_color2}  50%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=\"{$bg_color1}\",endColorstr=\"{$bg_color2}\",GradientType=1);
} ";
wp_add_inline_style( 'valhalla-style', $header_bg );

$menu_bar = "
.navbar-light .navbar-nav .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .active > .nav-link, 
.navbar-light .navbar-nav .show > .nav-link, 
.navbar-light .navbar-nav .nav-link:focus,
.navbar-custom-toggler-icon {
color: {$menu_default} ;
}
.navbar-light .navbar-nav .nav-link:hover {
color: {$menu_hover} ;
}
.dropdown-menu {
background-color: {$dropdown_bg} ;
}
.dropdown-menu {
border-color: {$dropdown_border} ;
}
.dropdown-item {
color: {$dropdown_color} ;
}
.dropdown-item:hover {
color: {$dropdown_color} ;
text-decoration: underline;
background: transparent;
} ";
wp_add_inline_style( 'valhalla-style', $menu_bar );          
} 

/* Enqueue styles for the blank page */

if ( is_page_template('blank.php')) {
wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '4.2.1');
wp_enqueue_style('valhalla-style',  get_template_directory_uri() . '/style.css', array('bootstrap'));
}

/* Fix height when admin bar is showing */

if ( is_admin_bar_showing() ) {
$fix_height = "
html {
overflow: hidden;
height: calc(100% - 32px);
}
@media screen and (max-width: 782px) {
html {
height: calc(100% - 46px);
}
} ";
wp_add_inline_style( 'valhalla-style', $fix_height );
}	
}
add_action( 'wp_enqueue_scripts', 'valhalla_dynamic_styles' );