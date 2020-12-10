<?php
/**
 * Valhalla: Customizer
 *
 * @package Valhalla
 * @subpackage Core
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

// Google fonts list

$google_fonts = ['Source Sans Pro',
'Montserrat',
'Libre Baskerville',	
'Roboto', 
'Open Sans', 
'Lato', 
'Roboto Condensed',
'Oswald', 
'Raleway', 
'PT Sans',
'Noto Sans',
'Poppins',
'Ubuntu',
'Open Sans Condensed', 
'Mukta',
'Muli', 
'Titillium Web',
'Arimo',
'PT Sans Narrow',
'Fira Sans',
'Nunito',
'Work Sans', 
'Nanum Gothic', 
'Quicksand', 
'Dosis', 
'Hind', 
'Rubik',
'Oxygen',
'Anton', 
'Noto Sans KR',
'Josefin Sans',
'Libre Franklin', 
'Cabin', 
'Fjalla One', 
'Nunito Sans',
'Karla', 
'Exo 2',
'Encode Sans Condensed',
'Varela Round',
'Abel', 
'Noto Sans JP', 
'Merriweather Sans',
'Yanone Kaffeesatz', 
'Acme', 
'Kanit',
'Asap',
'Questrial',
'Teko',
'Ubuntu Condensed',
'Archivo Narrow',
'Heebo']; 

Kirki::add_config( 'valhalla_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

// Panels

Kirki::add_panel( 'valhalla_header', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Header', 'valhalla' ),
    'description' => esc_html__( '', 'valhalla' ),
) );
Kirki::add_panel( 'valhalla_home', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Home Page', 'valhalla' ),
    'description' => esc_html__( '', 'valhalla' ),
) );
Kirki::add_panel( 'valhalla_about', array(
    'priority'    => 10,
    'title'       => esc_html__( 'About Us Page', 'valhalla' ),
    'description' => esc_html__( '', 'valhalla' ),
) );
Kirki::add_panel( 'valhalla_portfolio', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Portfolio Page', 'valhalla' ),
    'description' => esc_html__( '', 'valhalla' ),
) );
Kirki::add_panel( 'valhalla_services', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Services Page', 'valhalla' ),
    'description' => esc_html__( '', 'valhalla' ),
) );
Kirki::add_panel( 'valhalla_faq', array(
    'priority'    => 10,
    'title'       => esc_html__( 'FAQ Page', 'valhalla' ),
    'description' => esc_html__( '', 'valhalla' ),
) );
Kirki::add_panel( 'valhalla_blog', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Blog Page', 'valhalla' ),
    'description' => esc_html__( '', 'valhalla' ),
) );
Kirki::add_panel( 'valhalla_post', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Posts Page', 'valhalla' ),
    'description' => esc_html__( '', 'valhalla' ),
) );
Kirki::add_panel( 'valhalla_contact', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Contact Page', 'valhalla' ),
    'description' => esc_html__( '', 'valhalla' ),
) );
Kirki::add_panel( 'valhalla_other', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Other Pages', 'valhalla' ),
    'description' => esc_html__( '', 'valhalla' ),
) );
Kirki::add_panel( 'valhalla_footer', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Footer', 'valhalla' ),
    'description' => esc_html__( '', 'valhalla' ),
) );
Kirki::add_panel( 'valhalla_fonts', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Typography', 'valhalla' ),
    'description' => esc_html__( 'Here you can set fonts for headlines, menu bar, headings and titles, and also a body font that will cover all the other elements of your website.', 'valhalla' ),
) );

// Sections

Kirki::add_section( 'valhalla_header_logo', array(
    'title'          => esc_html__( 'Site logo', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_header',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_header_style', array(
    'title'          => esc_html__( 'Header style', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_header',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_header_contact', array(
    'title'          => esc_html__( 'Contact information', 'valhalla' ),
    'description'    => esc_html__( 'Tell your visitors how they can contact you. ', 'valhalla' ),
    'panel'          => 'valhalla_header',
    'priority'       => 160,
) );

Kirki::add_section( 'valhalla_home_header_headlines', array(
    'title'          => esc_html__( 'Header headlines', 'valhalla' ),
    'description'    => esc_html__( 'Add headlines and captions that grab your visitors attention.', 'valhalla' ),
    'panel'          => 'valhalla_home',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_home_s1', array(
    'title'          => esc_html__( 'Section 1', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_home',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_home_s2', array(
    'title'          => esc_html__( 'Section 2', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_home',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_home_s3', array(
    'title'          => esc_html__( 'Section 3', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_home',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_home_s4', array(
    'title'          => esc_html__( 'Section 4', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_home',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_home_s5', array(
    'title'          => esc_html__( 'Section 5', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_home',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_home_header_color', array(
    'title'          => esc_html__( 'Header color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_home',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_home_color', array(
    'title'          => esc_html__( 'Page color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_home',
    'priority'       => 160,
) );

Kirki::add_section( 'valhalla_about_title', array(
    'title'          => esc_html__( 'Page custom title', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_about',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_about_s1', array(
    'title'          => esc_html__( 'Section 1', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_about',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_about_s2', array(
    'title'          => esc_html__( 'Section 2', 'valhalla' ),
    'description'    => esc_html__( 'Here you can add information about your team members.', 'valhalla' ),
    'panel'          => 'valhalla_about',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_about_s3', array(
    'title'          => esc_html__( 'Section 3', 'valhalla' ),
    'description'    => esc_html__( 'Here you can upload logos of some of your clients.', 'valhalla' ),
    'panel'          => 'valhalla_about',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_about_header_color', array(
    'title'          => esc_html__( 'Header color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_about',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_about_color', array(
    'title'          => esc_html__( 'Page color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_about',
    'priority'       => 160,
) );

Kirki::add_section( 'valhalla_portfolio_title', array(
    'title'          => esc_html__( 'Page custom title', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_portfolio',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_portfolio_add', array(
    'title'          => esc_html__( 'Add items', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_portfolio',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_portfolio_header_color', array(
    'title'          => esc_html__( 'Header color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_portfolio',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_portfolio_color', array(
    'title'          => esc_html__( 'Page color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_portfolio',
    'priority'       => 160,
) );

Kirki::add_section( 'valhalla_services_title', array(
    'title'          => esc_html__( 'Page custom title', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_services',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_services_s1', array(
    'title'          => esc_html__( 'Section 1', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_services',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_services_s2', array(
    'title'          => esc_html__( 'Section 2', 'valhalla' ),
    'description'    => esc_html__( 'This section contains beautiful feature boxes you can use to highlight anything. Headings must be shorter as possible as well as descriptions.', 'valhalla' ),
    'panel'          => 'valhalla_services',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_services_s3', array(
    'title'          => esc_html__( 'Section 3', 'valhalla' ),
    'description'    => esc_html__( 'In this section you can list all your services.', 'valhalla' ),
    'panel'          => 'valhalla_services',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_services_header_color', array(
    'title'          => esc_html__( 'Header color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_services',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_services_color', array(
    'title'          => esc_html__( 'Page color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_services',
    'priority'       => 160,
) );

Kirki::add_section( 'valhalla_faq_title', array(
    'title'          => esc_html__( 'Page custom title', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_faq',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_faq_questions', array(
    'title'          => esc_html__( 'Questions', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_faq',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_faq_header_color', array(
    'title'          => esc_html__( 'Header color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_faq',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_faq_color', array(
    'title'          => esc_html__( 'Page color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_faq',
    'priority'       => 160,
) );

Kirki::add_section( 'valhalla_blog_title', array(
    'title'          => esc_html__( 'Page custom title', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_blog',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_blog_header_color', array(
    'title'          => esc_html__( 'Header color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_blog',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_blog_color', array(
    'title'          => esc_html__( 'Page color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_blog',
    'priority'       => 160,
) );

Kirki::add_section( 'valhalla_post_header_color', array(
    'title'          => esc_html__( 'Header color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_post',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_post_color', array(
    'title'          => esc_html__( 'Page color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_post',
    'priority'       => 160,
) );

Kirki::add_section( 'valhalla_contact_title', array(
    'title'          => esc_html__( 'Page custom title', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_contact',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_contact_s1', array(
    'title'          => esc_html__( 'Section 1', 'valhalla' ),
    'description'    => esc_html__( 'Add a heading and some text to your contact page.', 'valhalla' ),
    'panel'          => 'valhalla_contact',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_contact_s2', array(
    'title'          => esc_html__( 'Section 2 - Contact form', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_contact',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_contact_s3', array(
    'title'          => esc_html__( 'Section 3', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_contact',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_contact_header_color', array(
    'title'          => esc_html__( 'Header color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_contact',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_contact_color', array(
    'title'          => esc_html__( 'Page color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_contact',
    'priority'       => 160,
) );

Kirki::add_section( 'valhalla_other_header_color', array(
    'title'          => esc_html__( 'Header color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_other',
    'priority'       => 160,
) );

Kirki::add_section( 'valhalla_footer_about', array(
    'title'          => esc_html__( 'A little about your business', 'valhalla' ),
    'description'    => esc_html__( 'This section is perfect for you to tell a little about yourself or your business. A 500-600 characters text would be perfect.', 'valhalla' ),
    'panel'          => 'valhalla_footer',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_footer_contact', array(
    'title'          => esc_html__( 'Contact information', 'valhalla' ),
    'description'    => esc_html__( 'Tell your visitors how they can contact you.', 'valhalla' ),
    'panel'          => 'valhalla_footer',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_footer_social', array(
    'title'          => esc_html__( 'Social networks', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_footer',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_footer_color', array(
    'title'          => esc_html__( 'Color scheme', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_footer',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_fonts_header_menu', array(
    'title'          => esc_html__( 'Menu bar', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_fonts',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_fonts_home', array(
    'title'          => esc_html__( 'Home page header', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_fonts',
    'priority'       => 160,
) );

Kirki::add_section( 'valhalla_fonts_headings', array(
    'title'          => esc_html__( 'Headings and titles', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_fonts',
    'priority'       => 160,
) );
Kirki::add_section( 'valhalla_fonts_body', array(
    'title'          => esc_html__( 'Body', 'valhalla' ),
    'description'    => esc_html__( '', 'valhalla' ),
    'panel'          => 'valhalla_fonts',
    'priority'       => 160,
) );

// Controls

Kirki::add_field( 'valhalla_config', [
	'type'        => 'image',
	'settings'    => 'valhalla_header_logo_url',
	'label'       => esc_html__( 'Upload a logo', 'valhalla' ),
	'description' => esc_html__( 'Ideally, an image logo should have equal dimensions, for example, 200x200.', 'valhalla' ),
	'section'     => 'valhalla_header_logo',
	'default'     => '',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'radio',
	'settings'    => 'valhalla_header_style_home',
	'label'       => esc_html__( 'Home page hader style', 'valhalla' ),
	'section'     => 'valhalla_header_style',
	'default'     => 'gradient',
	'priority'    => 10,
	'choices'     => [
		'gradient'   => esc_html__( 'Gradient background (standard)', 'valhalla' ),
		'image' => esc_html__( 'Image background', 'valhalla' ),
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_header_display_phone',
	'label'       => esc_html__( 'Display phone icon', 'valhalla' ),
	'description' => esc_html__( 'This icon is hidden by default.', 'valhalla' ),
	'section'     => 'valhalla_header_contact',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#header-phone',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_header_display_twitter',
	'label'       => esc_html__( 'Display Twitter icon', 'valhalla' ),
	'description' => esc_html__( 'This icon is hidden by default.', 'valhalla' ),
	'section'     => 'valhalla_header_contact',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#header-twitter',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_header_display_facebook',
	'label'       => esc_html__( 'Display Facebook icon', 'valhalla' ),
	'description' => esc_html__( 'This icon is hidden by default.', 'valhalla' ),
	'section'     => 'valhalla_header_contact',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#header-facebook',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_header_display_instagram',
	'label'       => esc_html__( 'Display Instagram icon', 'valhalla' ),
	'description' => esc_html__( 'This icon is hidden by default.', 'valhalla' ),
	'section'     => 'valhalla_header_contact',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#header-instagram',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_header_phone',
	'label'    => esc_html__( 'Phone number', 'valhalla' ),
    'description' => esc_html__( 'Type your phone number', 'valhalla' ),
	'section'  => 'valhalla_header_contact',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'link',
	'settings' => 'valhalla_header_twitter',
	'label'    => esc_html__( 'Twitter profile', 'valhalla' ),
    'description' => esc_html__( 'Type your Twitter profile link', 'valhalla' ),
	'section'  => 'valhalla_header_contact',
	'default'  => '',
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'link',
	'settings' => 'valhalla_header_facebook',
	'label'    => esc_html__( 'Facebook profile', 'valhalla' ),
    'description' => esc_html__( 'Type your Facebook profile link', 'valhalla' ),
	'section'  => 'valhalla_header_contact',
	'default'  => '',
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'link',
	'settings' => 'valhalla_header_instagram',
	'label'    => esc_html__( 'Instagram profile', 'valhalla' ),
    'description' => esc_html__( 'Type your Instagram profile link', 'valhalla' ),
	'section'  => 'valhalla_header_contact',
	'default'  => '',
	'priority' => 10,
] );

Kirki::add_field( 'valhalla_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_headlines',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__('Headline', 'valhalla' ),
		'field' => 'field1',
	],
	'button_label' => esc_html__('Add new headline', 'valhalla' ),
	'settings'     => 'valhalla_header_headlines',
	'fields' => [
		'field1' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Headline', 'valhalla' ),
			'description' => esc_html__( '', 'valhalla' ),
			'default'     => '',
		],
        'field2' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Caption', 'valhalla' ),
			'description' => esc_html__( '', 'valhalla' ),
			'default'     => '',
		],
	]
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'fontawesome',
	'settings' => 'valhalla_home_s1_icon',
	'label'    => esc_html__( 'Font Awesome icon', 'valhalla' ),
	'section'  => 'valhalla_home_s1',
	'description' => esc_html__( '', 'valhalla' ),
	'default'  => esc_html__( 'quote-left', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_home_s1_heading',
	'label'    => esc_html__( 'Heading', 'valhalla' ),
	'section'  => 'valhalla_home_s1',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s1_heading_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s1',
	'default'     => [
		'font-size'      => '25px',
		'text-align'     => 'right',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.home-section1-heading',
			'property' => 'font-size',
            'choice'   => 'font-size',
		],
		[
			'element' => '.home-section1-heading-align',
			'property' => 'text-align',
            'choice'   => 'text-align',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'textarea',
	'settings' => 'valhalla_home_s1_text',
	'label'    => esc_html__( 'Text', 'valhalla' ),
	'section'  => 'valhalla_home_s1',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s1_html_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
	
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s1_text_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s1',
	'default'     => [
		'font-size'      => '16px',
		'line-height'    => '28px',
		'text-align'     => 'justify',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s1_html_enable',
			'operator' => '==',
			'value'    => false,
		]
		],
	'output'      => [
		[
			'element' => '.home-section1-text',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'editor',
	'settings'    => 'valhalla_home_s1_html',
	'label'       => esc_html__( 'Text/HTML', 'valhalla' ),
	'description' => esc_html__( 'HTML code must be added only in the text tab.', 'valhalla' ),
	'section'     => 'valhalla_home_s1',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s1_html_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s1_html_enable',
	'label'       => esc_html__( 'Insert arbitrary HTML code.', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want the above field to be able to accept HTML code.', 'valhalla' ),
	'section'     => 'valhalla_home_s1',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'image',
	'settings'    => 'valhalla_home_s1_image',
	'label'       => esc_html__( 'Upload an image', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s1',
	'default'     => '',
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_home_s1_img_alt',
	'label'    => esc_html__( 'Alt attribute', 'valhalla' ),
	'section'  => 'valhalla_home_s1',
	'description' => esc_html__( 'Describe the uploaded image in a short sentence.', 'valhalla' ),
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'fontawesome',
	'settings' => 'valhalla_home_s2_icon',
	'label'    => esc_html__( 'Font Awesome icon', 'valhalla' ),
	'section'  => 'valhalla_home_s2',
	'description' => esc_html__( '', 'valhalla' ),
	'default'  => esc_html__( 'bolt', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s2_icon_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s2',
	'default'     => [
		'font-size'      => '25px',
		'text-align'     => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.home-s2-icon',
		],
	],
] );

Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_home_s2_heading',
	'label'    => esc_html__( 'Heading', 'valhalla' ),
	'section'  => 'valhalla_home_s2',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s2_heading_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s2',
	'default'     => [
		'font-size'      => '25px',
		'text-align'     => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.home-section2-heading',
		],
	],
] );

Kirki::add_field( 'valhalla_config', [
	'type'     => 'textarea',
	'settings' => 'valhalla_home_s2_text',
	'label'    => esc_html__( 'Text', 'valhalla' ),
	'section'  => 'valhalla_home_s2',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s2_html_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s2_text_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s2',
	'default'     => [
		'font-size'      => '16px',
		'line-height'    => '28px',
		'text-align'     => 'justify',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s2_html_enable',
			'operator' => '==',
			'value'    => false,
		]
		],
	'output'      => [
		[
			'element' => '.home-section2-text',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'editor',
	'settings'    => 'valhalla_home_s2_html',
	'label'       => esc_html__( 'Text/HTML', 'valhalla' ),
	'description' => esc_html__( 'HTML code must be added only in the text tab.', 'valhalla' ),
	'section'     => 'valhalla_home_s2',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s2_html_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s2_html_enable',
	'label'       => esc_html__( 'Insert arbitrary HTML code.', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want the above field to be able to accept HTML code.', 'valhalla' ),
	'section'     => 'valhalla_home_s2',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'image',
	'settings'    => 'valhalla_home_s2_image',
	'label'       => esc_html__( 'Upload an image', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s2',
	'default'     => '',
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_home_s2_img_alt',
	'label'    => esc_html__( 'Alt attribute', 'valhalla' ),
	'section'  => 'valhalla_home_s2',
	'description' => esc_html__( 'Describe the uploaded image in a short sentence.', 'valhalla' ),
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'fontawesome',
	'settings' => 'valhalla_home_s3_icon1',
	'label'    => esc_html__( 'Area 1 Font Awesome icon', 'valhalla' ),
	'section'  => 'valhalla_home_s3',
	'description' => esc_html__( '', 'valhalla' ),
	'default'  => esc_html__( 'angle-double-left', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_home_s3_heading1',
	'label'    => esc_html__( 'Area 1 heading', 'valhalla' ),
	'section'  => 'valhalla_home_s3',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s3_heading1_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s3',
	'default'     => [
		'font-size'      => '25px',
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.home-section3-heading1',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s3_link1_enable',
	'label'       => esc_html__( 'Make the above heading into a link', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want to insert a link to another page in the above heading.', 'valhalla' ),
	'section'     => 'valhalla_home_s3',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'link',
	'settings' => 'valhalla_home_s3_link1',
	'label'    => esc_html__( 'Link URL', 'valhalla' ),
	'section'  => 'valhalla_home_s3',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s3_link1_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'textarea',
	'settings' => 'valhalla_home_s3_text1',
	'label'    => esc_html__( 'Area 1 text', 'valhalla' ),
	'section'  => 'valhalla_home_s3',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s3_html1_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s3_text1_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s3',
	'default'     => [
		'font-size'      => '16px',
		'line-height'    => '28px',
		'text-align'     => 'justify',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s3_html1_enable',
			'operator' => '==',
			'value'    => false,
		]
		],
	'output'      => [
		[
			'element' => '.home-section3-text1',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'editor',
	'settings'    => 'valhalla_home_s3_html1',
	'label'       => esc_html__( 'Text/HTML', 'valhalla' ),
	'description' => esc_html__( 'HTML code must be added only in the text tab.', 'valhalla' ),
	'section'     => 'valhalla_home_s3',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s3_html1_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s3_html1_enable',
	'label'       => esc_html__( 'Insert arbitrary HTML code.', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want the above field to be able to accept HTML code.', 'valhalla' ),
	'section'     => 'valhalla_home_s3',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'fontawesome',
	'settings' => 'valhalla_home_s3_icon2',
	'label'    => esc_html__( 'Area 2 Font Awesome icon', 'valhalla' ),
	'section'  => 'valhalla_home_s3',
	'description' => esc_html__( '', 'valhalla' ),
	'default'  => esc_html__( 'exchange', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_home_s3_heading2',
	'label'    => esc_html__( 'Area 2 heading', 'valhalla' ),
	'section'  => 'valhalla_home_s3',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s3_heading2_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s3',
	'default'     => [
		'font-size'      => '25px',
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.home-section3-heading2',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s3_link2_enable',
	'label'       => esc_html__( 'Make the above heading into a link', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want to insert a link to another page in the above heading.', 'valhalla' ),
	'section'     => 'valhalla_home_s3',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'link',
	'settings' => 'valhalla_home_s3_link2',
	'label'    => esc_html__( 'Link URL', 'valhalla' ),
	'section'  => 'valhalla_home_s3',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s3_link2_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'textarea',
	'settings' => 'valhalla_home_s3_text2',
	'label'    => esc_html__( 'Area 2 text', 'valhalla' ),
	'section'  => 'valhalla_home_s3',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s3_html2_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s3_text2_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s3',
	'default'     => [
		'font-size'      => '16px',
		'line-height'    => '28px',
		'text-align'     => 'justify',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s3_html2_enable',
			'operator' => '==',
			'value'    => false,
		]
		],
	'output'      => [
		[
			'element' => '.home-section3-text2',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'editor',
	'settings'    => 'valhalla_home_s3_html2',
	'label'       => esc_html__( 'Text/HTML', 'valhalla' ),
	'description' => esc_html__( 'HTML code must be added only in the text tab.', 'valhalla' ),
	'section'     => 'valhalla_home_s3',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s3_html2_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s3_html2_enable',
	'label'       => esc_html__( 'Insert arbitrary HTML code.', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want the above field to be able to accept HTML code.', 'valhalla' ),
	'section'     => 'valhalla_home_s3',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s4',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__('Tab', 'valhalla' ),
		'field' => 'field1',
	],
	'button_label' => esc_html__('Add new tab', 'valhalla' ),
	'settings'     => 'valhalla_home_s4_tabs',
	'fields' => [
		'field1' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Tab heading', 'valhalla' ),
			'description' => esc_html__( '', 'valhalla' ),
			'default'     => '',
		],
        'field2' => [
			'type'        => 'textarea',
			'label'       => esc_html__( 'Content', 'valhalla' ),
			'description' => esc_html__( 'This field accepts both text and HTML tags.', 'valhalla' ),
			'default'     => '',
		],
	]
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s4_tabs_content_typography',
	'label'       => esc_html__( 'Typography settings for tabs content', 'valhalla' ),
	'section'     => 'valhalla_home_s4',
	'default'     => [
		'font-size'      => '16px',
		'line-height'    => '28px',
		'text-align'     => 'justify',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.home-section4-text',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_home_s5_main_heading',
	'label'    => esc_html__( 'Main heading', 'valhalla' ),
	'section'  => 'valhalla_home_s5',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s5_heading_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s5',
	'default'     => [
		'font-size'      => '25px',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.home-section5-heading',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_home_s5_heading1',
	'label'    => esc_html__( 'Area 1 heading', 'valhalla' ),
	'section'  => 'valhalla_home_s5',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s5_heading1_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s5',
	'default'     => [
		'font-size'      => '20px',
		'text-align'      => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.home-section5-box1-title',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s5_link1_enable',
	'label'       => esc_html__( 'Make the above heading into a link', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want to insert a link to another page in the above heading.', 'valhalla' ),
	'section'     => 'valhalla_home_s5',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'link',
	'settings' => 'valhalla_home_s5_link1',
	'label'    => esc_html__( 'Link URL', 'valhalla' ),
	'section'  => 'valhalla_home_s5',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s5_link1_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'textarea',
	'settings' => 'valhalla_home_s5_text1',
	'label'    => esc_html__( 'Area 1 text', 'valhalla' ),
	'section'  => 'valhalla_home_s5',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s5_html1_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s5_text1_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s5',
	'default'     => [
		'font-size'      => '16px',
		'line-height'      => '28px',
		'text-align'      => 'justify',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s5_html1_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
	'output'      => [
		[
			'element' => '.home-section5-box1-text',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'editor',
	'settings'    => 'valhalla_home_s5_html1',
	'label'       => esc_html__( 'Text/HTML', 'valhalla' ),
	'description' => esc_html__( 'HTML code must be added only in the text tab.', 'valhalla' ),
	'section'     => 'valhalla_home_s5',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s5_html1_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s5_html1_enable',
	'label'       => esc_html__( 'Insert arbitrary HTML code.', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want the above field to be able to accept HTML code.', 'valhalla' ),
	'section'     => 'valhalla_home_s5',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_home_s5_heading2',
	'label'    => esc_html__( 'Area 2 heading', 'valhalla' ),
	'section'  => 'valhalla_home_s5',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s5_heading2_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s5',
	'default'     => [
		'font-size'      => '20px',
		'text-align'      => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.home-section5-box2-title',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s5_link2_enable',
	'label'       => esc_html__( 'Make the above heading into a link', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want to insert a link to another page in the above heading.', 'valhalla' ),
	'section'     => 'valhalla_home_s5',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'link',
	'settings' => 'valhalla_home_s5_link2',
	'label'    => esc_html__( 'Link URL', 'valhalla' ),
	'section'  => 'valhalla_home_s5',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s5_link2_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'textarea',
	'settings' => 'valhalla_home_s5_text2',
	'label'    => esc_html__( 'Area 2 text', 'valhalla' ),
	'section'  => 'valhalla_home_s5',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s5_html2_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_s5_text2_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_s5',
	'default'     => [
		'font-size'      => '16px',
		'line-height'      => '28px',
		'text-align'      => 'justify',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s5_html2_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
	'output'      => [
		[
			'element' => '.home-section5-box2-text',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'editor',
	'settings'    => 'valhalla_home_s5_html2',
	'label'       => esc_html__( 'Text/HTML', 'valhalla' ),
	'description' => esc_html__( 'HTML code must be added only in the text tab.', 'valhalla' ),
	'section'     => 'valhalla_home_s5',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_home_s5_html2_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s5_html2_enable',
	'label'       => esc_html__( 'Insert arbitrary HTML code.', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want the above field to be able to accept HTML code.', 'valhalla' ),
	'section'     => 'valhalla_home_s5',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_top_bg',
	'label'       => __( 'Top bar background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.home-header-top-bar-bg',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_top_color',
	'label'       => __( 'Top bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.home-header-top-bar, .home-header-top-bar a ',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_bg1_color1',
	'label'       => __( 'Gradient background 01: primary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#131b80',
	'active_callback' => [
		[
			'setting'  => 'valhalla_header_style_home',
			'operator' => '==',
			'value'    => 'gradient',
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_bg1_color2',
	'label'       => __( 'Gradient background 01: secondary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#040325',
	'active_callback' => [
		[
			'setting'  => 'valhalla_header_style_home',
			'operator' => '==',
			'value'    => 'gradient',
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_bg2_color1',
	'label'       => __( 'Gradient background 02: primary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#0a5d9f',
	'active_callback' => [
		[
			'setting'  => 'valhalla_header_style_home',
			'operator' => '==',
			'value'    => 'gradient',
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_bg2_color2',
	'label'       => __( 'Gradient background 02: secondary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#1e92dd',
	'active_callback' => [
		[
			'setting'  => 'valhalla_header_style_home',
			'operator' => '==',
			'value'    => 'gradient',
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_bg3_color1',
	'label'       => __( 'Gradient background 03: primary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#2f2e34',
	'active_callback' => [
		[
			'setting'  => 'valhalla_header_style_home',
			'operator' => '==',
			'value'    => 'gradient',
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_bg3_color2',
	'label'       => __( 'Gradient background 03: secondary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#16151a',
	'active_callback' => [
		[
			'setting'  => 'valhalla_header_style_home',
			'operator' => '==',
			'value'    => 'gradient',
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'image',
	'settings'    => 'valhalla_home_header_bg1_img',
	'label'       => esc_html__( 'Backgound image 01', 'valhalla' ),
	'description' => esc_html__( 'A background image should be at least 1400x550 pixels.', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_header_style_home',
			'operator' => '==',
			'value'    => 'image',
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_bg1_img_color',
	'label'       => __( 'Background color for image 01', 'valhalla' ),
	'description' => esc_html__( 'Choose a color that best suts the background image 01', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_header_style_home',
			'operator' => '==',
			'value'    => 'image',
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'image',
	'settings'    => 'valhalla_home_header_bg2_img',
	'label'       => esc_html__( 'Backgound image 02', 'valhalla' ),
	'description' => esc_html__( 'A background image should be at least 1400x550 pixels.', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_header_style_home',
			'operator' => '==',
			'value'    => 'image',
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_bg2_img_color',
	'label'       => __( 'Background color for image 02', 'valhalla' ),
	'description' => esc_html__( 'Choose a color that best suts the background image 02', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_header_style_home',
			'operator' => '==',
			'value'    => 'image',
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'image',
	'settings'    => 'valhalla_home_header_bg3_img',
	'label'       => esc_html__( 'Backgound image 03', 'valhalla' ),
	'description' => esc_html__( 'A background image should be at least 1400x550 pixels.', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_header_style_home',
			'operator' => '==',
			'value'    => 'image',
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_bg3_img_color',
	'label'       => __( 'Background color for image 03', 'valhalla' ),
	'description' => esc_html__( 'Choose a color that best suts the background image 03', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_header_style_home',
			'operator' => '==',
			'value'    => 'image',
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_menu_default_color',
	'label'       => __( 'Menu bar default font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_menu_hover_color',
	'label'       => __( 'Menu bar font color on hover', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_menu_dropdown_bg',
	'label'       => __( 'Dropdown menu background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_menu_dropdown_border',
	'label'       => __( 'Dropdown menu border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_menu_dropdown_color',
	'label'       => __( 'Dropdown menu font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#525f7f',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_header_headlines_color',
	'label'       => __( 'Headlines and captions font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_header_color',
	'default'     => '#fff',
	'output' => array(
		array(
			'element'  => '.h1-header-headline, .header-carousel-caption',
			'property' => 'color',
		),
		array(
			'element'  => '.carousel-indicators li',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'select',
	'settings'    => 'valhalla_home_s1_icon_style',
	'label'       => esc_html__( 'Section 1 icon style', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => 'badge-secondary',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'badge-primary' => esc_html__( 'Primary', 'valhalla' ),
		'badge-secondary' => esc_html__( 'Secondary', 'valhalla' ),
		'badge-success' => esc_html__( 'Success', 'valhalla' ),
		'badge-danger' => esc_html__( 'Danger', 'valhalla' ),
		'badge-warning' => esc_html__( 'Warning', 'valhalla' ),
		'badge-info' => esc_html__( 'Info', 'valhalla' ),
		'badge-light' => esc_html__( 'Light', 'valhalla' ),
		'badge-dark' => esc_html__( 'Dark', 'valhalla' ),
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s1_heading_color',
	'label'       => __( 'Section 1 heading color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => '.home-section1-heading',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s1_text_color',
	'label'       => __( 'Section 1 text color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.home-section1-text',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s1_line_color',
	'label'       => __( 'Section 1 bottom line color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#ccc',
	'output' => array(
		array(
			'element'  => '.home-section1-text',
			'property' => 'border-bottom-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s2_bg',
	'label'       => __( 'Section 2 background color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#6772e5',
	'output' => array(
		array(
			'element'  => '.home-section2-bg',
			'property' => 'background-color',
		),
		array(
			'element'  => '.home-section2_1',
			'property' => 'background-image',
			'value_pattern'   => 'linear-gradient($, $)',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s2_heading_color',
	'label'       => __( 'Section 2 heading color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.home-section2-heading, .home-s2-icon',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s2_text_color',
	'label'       => __( 'Section 2 text color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.home-section2-text',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s2_line_color',
	'label'       => __( 'Section 2 bottom line color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#fff',
	'output' => array(
		array(
			'element'  => '.home-section2-text',
			'property' => 'border-bottom-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'select',
	'settings'    => 'valhalla_home_s3_icons_style',
	'label'       => esc_html__( 'Section 3 icons style', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => 'badge-secondary',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'badge-primary' => esc_html__( 'Primary', 'valhalla' ),
		'badge-secondary' => esc_html__( 'Secondary', 'valhalla' ),
		'badge-success' => esc_html__( 'Success', 'valhalla' ),
		'badge-danger' => esc_html__( 'Danger', 'valhalla' ),
		'badge-warning' => esc_html__( 'Warning', 'valhalla' ),
		'badge-info' => esc_html__( 'Info', 'valhalla' ),
		'badge-light' => esc_html__( 'Light', 'valhalla' ),
		'badge-dark' => esc_html__( 'Dark', 'valhalla' ),
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s3_heading_color',
	'label'       => __( 'Section 3 heading color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#24b47e',
	'output' => array(
		array(
			'element'  => '.home-section3-heading1, .home-section3-heading1 a, .home-section3-heading2, .home-section3-heading2 a ',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s3_text_color',
	'label'       => __( 'Section 3 text color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.home-section3-text1, .home-section3-text2',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s3_border_color',
	'label'       => __( 'Section 3 border color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#ccc',
	'output' => array(
		array(
			'element'  => '.home-section3, .home-section3-b',
			'property' => 'border-bottom-color',
		),
		array(
			'element'  => '.home-section3-b',
			'property' => 'border-top-color',
		),
		array(
			'element'  => '.home-section3-column2',
			'property' => 'border-left-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s4_tabs_active_bg',
	'label'       => __( 'Section 4 active tab background color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s4_tabs_active_border',
	'label'       => __( 'Section 4 active tab border color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#ddd',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s4_tabs_active_color',
	'label'       => __( 'Section 4 active tab font color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#cfb87c',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s4_tabs_default_bg',
	'label'       => __( 'Section 4 default tabs background color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#eee',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s4_tabs_default_border',
	'label'       => __( 'Section 4 default tabs border color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#ddd',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s4_tabs_default_color',
	'label'       => __( 'Section 4 default tabs font color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#666',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s4_tabs_default_bg_hover',
	'label'       => __( 'Section 4 default tabs background color on hover', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s4_tabs_default_border_hover',
	'label'       => __( 'Section 4 default tabs border color on hover', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#ddd',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s4_tabs_default_color_hover',
	'label'       => __( 'Section 4 default tabs font color on hover', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#666',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s4_tabs_content_bg',
	'label'       => __( 'Section 4 tabs content area background color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s4_tabs_content_border',
	'label'       => __( 'Section 4 tabs content area border color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#ddd',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s4_tabs_content_color',
	'label'       => __( 'Section 4 tabs content area font color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#525f7f',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s5_bg',
	'label'       => __( 'Section 5 background color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#F6F9FC',
	'output' => array(
		array(
			'element'  => '.home-section5, .home-section5-heading',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s5_heading_color',
	'label'       => __( 'Section 5 heading color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => '.home-section5-heading',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s5_lines_color',
	'label'       => __( 'Section 5 top lines color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => '.home-section5-heading-line',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s5_border_color',
	'label'       => __( 'Section 5 bottom border color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => '.home-section5',
			'property' => 'border-bottom-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s5_box_header_bg',
	'label'       => __( 'Section 5 box header background', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#F7F7F7',
	'output' => array(
		array(
			'element'  => '.home-section5-box1-header, .home-section5-box2-header',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s5_box_border',
	'label'       => __( 'Section 5 box border color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#ddd',
	'output' => array(
		array(
			'element'  => '.home-section5-box1-header, .home-section5-box2-header, .home-section5-box1, .home-section5-box2',
			'property' => 'border-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s5_box_body_bg',
	'label'       => __( 'Section 5 box body background', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#fff',
	'output' => array(
		array(
			'element'  => '.home-section5-box1-body, .home-section5-box2-body',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s5_box_title_color',
	'label'       => __( 'Section 5 box title color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => '.home-section5-box1-title, .home-section5-box2-title, .home-section5-box1-title a, .home-section5-box2-title a',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_home_s5_box_text_color',
	'label'       => __( 'Section 5 box text color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_home_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.home-section5-box1-text, .home-section5-box2-text',
			'property' => 'color',
		),
	),
] );

Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_about_custom_title_enable',
	'label'       => esc_html__( 'Set a custom title for this page header', 'valhalla' ),
	'description' => esc_html__( 'By default, the title shown in the header title bar is the one you set in the WordPress editor.', 'valhalla' ),
	'section'     => 'valhalla_about_title',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_about_custom_title',
	'label'    => esc_html__( 'Custom title', 'valhalla' ),
	'section'  => 'valhalla_about_title',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_about_custom_title_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_about_s1_heading',
	'label'    => esc_html__( 'Heading', 'valhalla' ),
	'section'  => 'valhalla_about_s1',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_about_s1_heading_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_s1',
	'default'     => [
		'font-size'      => '25px',
		'text-align'     => 'right',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.about-section1-heading',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'textarea',
	'settings' => 'valhalla_about_s1_text',
	'label'    => esc_html__( 'Text', 'valhalla' ),
	'section'  => 'valhalla_about_s1',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_about_s1_html_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_about_s1_text_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_s1',
	'default'     => [
		'font-size'      => '16px',
		'line-height'    => '28px',
		'text-align'     => 'justify',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'active_callback' => [
		[
			'setting'  => 'valhalla_about_s1_html_enable',
			'operator' => '==',
			'value'    => false,
		]
		],
	'output'      => [
		[
			'element' => '.about-section1-text',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'editor',
	'settings'    => 'valhalla_about_s1_html',
	'label'       => esc_html__( 'Text/HTML', 'valhalla' ),
	'description' => esc_html__( 'HTML code must be added only in the text tab.', 'valhalla' ),
	'section'     => 'valhalla_about_s1',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_about_s1_html_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_about_s1_html_enable',
	'label'       => esc_html__( 'Insert arbitrary HTML code.', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want the above field to be able to accept HTML code.', 'valhalla' ),
	'section'     => 'valhalla_about_s1',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'image',
	'settings'    => 'valhalla_about_s1_image',
	'label'       => esc_html__( 'Upload an image', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_s1',
	'default'     => '',
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_about_s1_img_alt',
	'label'    => esc_html__( 'Alt attribute', 'valhalla' ),
	'description' => esc_html__( 'Describe the uploaded image in a short sentence.', 'valhalla' ),
	'section'  => 'valhalla_about_s1',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'fontawesome',
	'settings' => 'valhalla_about_s2_icon',
	'label'    => esc_html__( 'Font Awesome icon', 'valhalla' ),
	'section'  => 'valhalla_about_s2',
	'description' => esc_html__( '', 'valhalla' ),
	'default'  => esc_html__( 'user-circle', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_about_s2_icon_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_s2',
	'default'     => [
		'font-size'      => '25px',
		'text-align'     => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.about-s2-icon',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_about_s2_heading',
	'label'    => esc_html__( 'Heading', 'valhalla' ),
    'description' => esc_html__( 'e.g., "Meet Our Team".', 'valhalla' ),
	'section'  => 'valhalla_about_s2',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_about_s2_heading_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_s2',
	'default'     => [
		'font-size'      => '25px',
		'text-align'     => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.about-section2-heading',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'select',
	'settings'    => 'valhalla_about_s2_members_number',
	'label'       => esc_html__( 'Number of members', 'valhalla' ),
	'section'     => 'valhalla_about_s2',
	'description' => esc_html__( 'This information is important for the grid layout. Add from 2 to 6 members.', 'valhalla' ),
	'default'     => '3',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'2' => esc_html__( '2', 'valhalla' ),
		'3' => esc_html__( '3', 'valhalla' ),
		'4' => esc_html__( '4', 'valhalla' ),
		'5' => esc_html__( '5', 'valhalla' ),
		'6' => esc_html__( '6', 'valhalla' ),
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_s2',
	'priority'    => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_about_s2_html_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__('Member', 'valhalla' ),
		'field' => 'field2',
	],
	'button_label' => esc_html__('Add new member', 'valhalla' ),
	'settings'     => 'valhalla_about_s2_members',
	'fields' => [
		'field1' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Picture', 'valhalla' ),
			'description' => esc_html__( '', 'valhalla' ),
			'default'     => '',
		],
		'field2' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Name', 'valhalla' ),
			'description' => esc_html__( '', 'valhalla' ),
			'default'     => '',
		],
        'field3' => [
			'type'        => 'text',
			'label'       => esc_html__( 'Job title', 'valhalla' ),
			'description' => esc_html__( '', 'valhalla' ),
			'default'     => '',
		],
	]
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'editor',
	'settings'    => 'valhalla_about_s2_html',
	'label'       => esc_html__( 'Text/HTML', 'valhalla' ),
	'description' => esc_html__( 'HTML code must be added only in the text tab.', 'valhalla' ),
	'section'     => 'valhalla_about_s2',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_about_s2_html_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_about_s2_html_enable',
	'label'       => esc_html__( 'Insert arbitrary HTML code instead of team members.', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you wish to use this section for a purpose different than showing your team members.', 'valhalla' ),
	'section'     => 'valhalla_about_s2',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_about_s3_heading',
	'label'    => esc_html__( 'Heading', 'valhalla' ),
    'description' => esc_html__( 'e.g., "Some of Our Clients".', 'valhalla' ),
	'section'  => 'valhalla_about_s3',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_about_s3_heading_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_s3',
	'default'     => [
		'font-size'      => '25px',
		'text-align'     => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.about-section3-heading',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'repeater',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_s3',
	'priority'    => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_about_s3_html_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
	'row_label' => [
		'type'  => 'text',
		'value' => esc_html__('Client', 'valhalla' ),
	],
	'button_label' => esc_html__('Add new client', 'valhalla' ),
	'settings'     => 'valhalla_about_s3_clients',
	'fields' => [
		'field1' => [
			'type'        => 'image',
			'label'       => esc_html__( 'Logo image', 'valhalla' ),
			'description' => esc_html__( '', 'valhalla' ),
			'default'     => '',
		],
	]
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'editor',
	'settings'    => 'valhalla_about_s3_html',
	'label'       => esc_html__( 'Text/HTML', 'valhalla' ),
	'description' => esc_html__( 'HTML code must be added only in the text tab.', 'valhalla' ),
	'section'     => 'valhalla_about_s3',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_about_s3_html_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_about_s3_html_enable',
	'label'       => esc_html__( 'Insert arbitrary HTML code instead of client logos.', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you wish to use this section for a purpose different than showing your clients.', 'valhalla' ),
	'section'     => 'valhalla_about_s3',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_header_top_bg',
	'label'       => __( 'Top bar background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.about-header-top-bar-bg',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_header_top_color',
	'label'       => __( 'Top bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_header_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.about-header-top-bar, .about-header-top-bar a',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_header_title_bar_bg',
	'label'       => __( 'Title bar background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.about-header-title-bar',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_header_title_bar_color',
	'label'       => __( 'Title bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_header_color',
	'default'     => '#fff',
	'output' => array(
		array(
			'element'  => '.about-header-title-bar',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_header_bg_color1',
	'label'       => __( 'Gradient background: primary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_header_color',
	'default'     => '#131b80',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_header_bg_color2',
	'label'       => __( 'Gradient background: secondary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_header_color',
	'default'     => '#040325',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_header_menu_default_color',
	'label'       => __( 'Menu bar default font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_header_menu_hover_color',
	'label'       => __( 'Menu bar font color on hover', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_header_menu_dropdown_bg',
	'label'       => __( 'Dropdown menu background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_header_menu_dropdown_border',
	'label'       => __( 'Dropdown menu border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_header_menu_dropdown_color',
	'label'       => __( 'Dropdown menu font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_header_color',
	'default'     => '#525f7f',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_s1_heading_color',
	'label'       => __( 'Section 1 heading color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => '.about-section1-heading',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_s1_text_color',
	'label'       => __( 'Section 1 text color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.about-section1-text',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_s1_line_color',
	'label'       => __( 'Section 1 bottom line color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_color',
	'default'     => '#ccc',
	'output' => array(
		array(
			'element'  => '.about-section1-text',
			'property' => 'border-bottom-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_s2_bg',
	'label'       => __( 'Section 2 background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_color',
	'default'     => '#90F9D2',
	'output' => array(
		array(
			'element'  => '.about-section2-bg',
			'property' => 'background-color',
		),
		array(
			'element'  => '.about-section2_1',
			'property' => 'background-image',
			'value_pattern'   => 'linear-gradient($, $)',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_s2_heading_color',
	'label'       => __( 'Section 2 heading color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_color',
	'default'     => '#24b47e',
	'output' => array(
		array(
			'element'  => '.about-section2-heading, .about-s2-icon',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_s2_text_color',
	'label'       => __( 'Section 2 text color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.about-section2-team',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_s2_box_bg',
	'label'       => __( 'Section 2 member box background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_color',
	'default'     => '#F6F9FC',
	'output' => array(
		array(
			'element'  => '.about-section2-card-div',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_s2_box_border',
	'label'       => __( 'Section 2 member box border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_color',
	'default'     => '#ddd',
	'output' => array(
		array(
			'element'  => '.about-section2-card-div',
			'property' => 'border-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_s3_heading_color',
	'label'       => __( 'Section 3 heading color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => '.about-section3-heading',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_about_s3_box_border_color',
	'label'       => __( 'Section 3 logo box border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_about_color',
	'default'     => '#ccc',
	'output' => array(
		array(
			'element'  => '.about-clients',
			'property' => 'border-color',
		),
	),
] );

Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_portfolio_custom_title_enable',
	'label'       => esc_html__( 'Set a custom title for this page header', 'valhalla' ),
	'description' => esc_html__( 'By default, the title shown in the header title bar is the one you set in the WordPress editor.', 'valhalla' ),
	'section'     => 'valhalla_portfolio_title',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_portfolio_custom_title',
	'label'    => esc_html__( 'Custom title', 'valhalla' ),
	'section'  => 'valhalla_portfolio_title',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_portfolio_custom_title_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field('valhalla_config', array (
    'type' => 'repeater',
    'settings' => 'valhalla_portfolio_add_items',
    'label' => esc_html__('Portfolio items', 'valhalla'),
	'section' => 'valhalla_portfolio_add',
	'button_label' => esc_html__('Add new item', 'valhalla' ),
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__('Item', 'valhalla' ),
		'field' => 'field2',
	],
    'fields' => array(
        'field1' => array(
            'type'        => 'image',
	        'label'       => esc_html__( 'Image', 'valhalla' ),
	        'description' => esc_html__( '', 'valhalla' ),
	        'default'     => '',
        ),
        'field2' => array(
            'type' => 'text',
            'label' => _('Title'),
            'default' => ''
		),
		'field3' => array(
            'type' => 'textarea',
            'label' => _('Description'),
            'default' => ''
        ),
    )
));
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_portfolio_header_top_bg',
	'label'       => __( 'Top bar background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_portfolio_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.portfolio-header-top-bar-bg',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_portfolio_header_top_color',
	'label'       => __( 'Top bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_portfolio_header_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.portfolio-header-top-bar, .portfolio-header-top-bar a',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_portfolio_header_title_bar_bg',
	'label'       => __( 'Title bar background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_portfolio_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.portfolio-header-title-bar',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_portfolio_header_title_bar_color',
	'label'       => __( 'Title bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_portfolio_header_color',
	'default'     => '#fff',
	'output' => array(
		array(
			'element'  => '.portfolio-header-title-bar',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_portfolio_header_bg_color1',
	'label'       => __( 'Gradient background: primary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_portfolio_header_color',
	'default'     => '#131b80',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_portfolio_header_bg_color2',
	'label'       => __( 'Gradient background: secondary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_portfolio_header_color',
	'default'     => '#040325',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_portfolio_header_menu_default_color',
	'label'       => __( 'Menu bar default font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_portfolio_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_portfolio_header_menu_hover_color',
	'label'       => __( 'Menu bar font color on hover', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_portfolio_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_portfolio_header_menu_dropdown_bg',
	'label'       => __( 'Dropdown menu background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_portfolio_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_portfolio_header_menu_dropdown_border',
	'label'       => __( 'Dropdown menu border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_portfolio_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_portfolio_header_menu_dropdown_color',
	'label'       => __( 'Dropdown menu font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_portfolio_header_color',
	'default'     => '#525f7f',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_portfolio_border_color',
	'label'       => __( 'Image box border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_portfolio_color',
	'default'     => '#ccc',
	'output' => array(
		array(
			'element'  => '.portfolio-items-div',
			'property' => 'border-color',
		),
	),
] );

Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_services_custom_title_enable',
	'label'       => esc_html__( 'Set a custom title for this page header', 'valhalla' ),
	'description' => esc_html__( 'By default, the title shown in the header title bar is the one you set in the WordPress editor.', 'valhalla' ),
	'section'     => 'valhalla_services_title',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_services_custom_title',
	'label'    => esc_html__( 'Custom title', 'valhalla' ),
	'section'  => 'valhalla_services_title',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_services_custom_title_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_services_s1_heading',
	'label'    => esc_html__( 'Heading', 'valhalla' ),
	'section'  => 'valhalla_services_s1',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_services_s1_heading_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_s1',
	'default'     => [
		'font-size'      => '25px',
		'text-align'     => 'right',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.services-section1-heading',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'textarea',
	'settings' => 'valhalla_services_s1_text',
	'label'    => esc_html__( 'Text', 'valhalla' ),
	'section'  => 'valhalla_services_s1',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_services_s1_html_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_services_s1_text_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_s1',
	'default'     => [
		'font-size'      => '16px',
		'line-height'    => '28px',
		'text-align'     => 'justify',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'active_callback' => [
		[
			'setting'  => 'valhalla_services_s1_html_enable',
			'operator' => '==',
			'value'    => false,
		]
		],
	'output'      => [
		[
			'element' => '.services-section1-text',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'editor',
	'settings'    => 'valhalla_services_s1_html',
	'label'       => esc_html__( 'Text/HTML', 'valhalla' ),
	'description' => esc_html__( 'HTML code must be added only in the text tab.', 'valhalla' ),
	'section'     => 'valhalla_services_s1',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_services_s1_html_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_services_s1_html_enable',
	'label'       => esc_html__( 'Insert arbitrary HTML code.', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want the above field to be able to accept HTML code.', 'valhalla' ),
	'section'     => 'valhalla_services_s1',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'image',
	'settings'    => 'valhalla_services_s1_image',
	'label'       => esc_html__( 'Upload an image', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_s1',
	'default'     => '',
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_services_s1_img_alt',
	'label'    => esc_html__( 'Alt attribute', 'valhalla' ),
	'section'  => 'valhalla_services_s1',
	'description' => esc_html__( 'Describe the uploaded image in a short sentence.', 'valhalla' ),
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'fontawesome',
	'settings' => 'valhalla_services_s2_icon',
	'label'    => esc_html__( 'Font Awesome icon', 'valhalla' ),
	'section'  => 'valhalla_services_s2',
	'description' => esc_html__( '', 'valhalla' ),
	'default'  => esc_html__( 'star', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field('valhalla_config', array (
    'type' => 'repeater',
    'settings' => 'valhalla_services_add_boxes',
    'label' => esc_html__('Feature boxes', 'valhalla'),
	'section' => 'valhalla_services_s2',
	'button_label' => esc_html__('Add new box', 'valhalla' ),
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__('Box', 'valhalla' ),
		'field' => 'field1',
	],
    'fields' => array(
        'field1' => array(
            'type' => 'text',
            'label' => _('Title'),
            'default' => ''
		),
		'field2' => array(
            'type' => 'textarea',
			'label' => _('Description'),
            'default' => ''
        ),
    )
));
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_services_s2_box_title_typography',
	'label'       => esc_html__( 'Typography settings for box titles', 'valhalla' ),
	'section'     => 'valhalla_services_s2',
	'default'     => [
		'font-size'      => '20px',
		'text-align'     => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.services-box-title',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_services_s2_box_content_typography',
	'label'       => esc_html__( 'Typography settings for box content', 'valhalla' ),
	'section'     => 'valhalla_services_s2',
	'default'     => [
		'font-size'      => '16px',
		'text-align'     => 'center',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.services-box-text',
		],
	],
] );
Kirki::add_field('valhalla_config', array (
    'type' => 'repeater',
    'settings' => 'valhalla_services_add_services',
    'label' => esc_html__('Services list', 'valhalla'),
	'section' => 'valhalla_services_s3',
	'button_label' => esc_html__('Add new service', 'valhalla' ),
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__('Service', 'valhalla' ),
		'field' => 'field1',
	],
    'fields' => array(
        'field1' => array(
            'type' => 'text',
            'label' => _('Title'),
            'default' => ''
		),
		'field2' => array(
            'type' => 'textarea',
			'label' => _('Content'),
			'description' => esc_html__( 'This field accepts both text and HTML tags.', 'valhalla' ),
            'default' => ''
        ),
    )
));
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_services_s3_tabs_content_typography',
	'label'       => esc_html__( 'Typography settings for tabs content', 'valhalla' ),
	'section'     => 'valhalla_services_s3',
	'default'     => [
		'font-size'      => '16px',
		'line-height'    => '28px',
		'text-align'     => 'justify',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.services-section3-text',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_header_top_bg',
	'label'       => __( 'Top bar background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.services-header-top-bar-bg',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_header_top_color',
	'label'       => __( 'Top bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_header_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.services-header-top-bar, .services-header-top-bar a',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_header_title_bar_bg',
	'label'       => __( 'Title bar background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.services-header-title-bar',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_header_title_bar_color',
	'label'       => __( 'Title bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_header_color',
	'default'     => '#fff',
	'output' => array(
		array(
			'element'  => '.services-header-title-bar',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_header_bg_color1',
	'label'       => __( 'Gradient background: primary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_header_color',
	'default'     => '#131b80',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_header_bg_color2',
	'label'       => __( 'Gradient background: secondary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_header_color',
	'default'     => '#040325',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_header_menu_default_color',
	'label'       => __( 'Menu bar default font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_header_menu_hover_color',
	'label'       => __( 'Menu bar font color on hover', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_header_menu_dropdown_bg',
	'label'       => __( 'Dropdown menu background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_header_menu_dropdown_border',
	'label'       => __( 'Dropdown menu border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_header_menu_dropdown_color',
	'label'       => __( 'Dropdown menu font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_header_color',
	'default'     => '#525f7f',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s1_heading_color',
	'label'       => __( 'Section 1 heading color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => '.services-section1-heading',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s1_text_color',
	'label'       => __( 'Section 1 text color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.services-section1-text',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s1_line_color',
	'label'       => __( 'Section 1 bottom line color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.services-section1-border',
			'property' => 'border-bottom-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'select',
	'settings'    => 'valhalla_services_s2_feature_style',
	'label'       => esc_html__( 'Section 2 feature box color style', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => 'bg-info',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'bg-primary' => esc_html__( 'Primary', 'valhalla' ),
		'bg-secondary' => esc_html__( 'Secondary', 'valhalla' ),
		'bg-success' => esc_html__( 'Success', 'valhalla' ),
		'bg-danger' => esc_html__( 'Danger', 'valhalla' ),
		'bg-warning' => esc_html__( 'Warning', 'valhalla' ),
		'bg-info' => esc_html__( 'Info', 'valhalla' ),
		'bg-light' => esc_html__( 'Light', 'valhalla' ),
		'bg-dark' => esc_html__( 'Dark', 'valhalla' ),
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s3_tabs_active_bg',
	'label'       => __( 'Section 3 active tab background color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#6c757d',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s3_tabs_active_border',
	'label'       => __( 'Section 3 active tab border color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#6c757d',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s3_tabs_active_color',
	'label'       => __( 'Section 3 active tab font color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s3_tabs_default_bg',
	'label'       => __( 'Section 3 default tabs background color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#eee',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s3_tabs_default_border',
	'label'       => __( 'Section 3 default tabs border color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#ddd',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s3_tabs_default_color',
	'label'       => __( 'Section 3 default tabs font color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#666',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s3_tabs_default_bg_hover',
	'label'       => __( 'Section 3 default tabs background color on hover', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s3_tabs_default_border_hover',
	'label'       => __( 'Section 3 default tabs border color on hover', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#ddd',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s3_tabs_default_color_hover',
	'label'       => __( 'Section 3 default tabs font color on hover', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#666',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s3_tabs_content_bg',
	'label'       => __( 'Section 3 tabs content area background color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s3_tabs_content_border',
	'label'       => __( 'Section 3 tabs content area border color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#6c757d',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_services_s3_tabs_content_color',
	'label'       => __( 'Section 3 tabs content area font color', 'valhalla' ),
	'description' => esc_html__('', 'valhalla' ),
	'section'     => 'valhalla_services_color',
	'default'     => '#525f7f',
] );

Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_faq_custom_title_enable',
	'label'       => esc_html__( 'Set a custom title for this page header', 'valhalla' ),
	'description' => esc_html__( 'By default, the title shown in the header title bar is the one you set in the WordPress editor.', 'valhalla' ),
	'section'     => 'valhalla_faq_title',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_faq_custom_title',
	'label'    => esc_html__( 'Custom title', 'valhalla' ),
	'section'  => 'valhalla_faq_title',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_faq_custom_title_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field('valhalla_config', array (
    'type' => 'repeater',
    'settings' => 'valhalla_faq_questions_add',
    'label' => esc_html__('', 'valhalla'),
	'section' => 'valhalla_faq_questions',
	'button_label' => esc_html__('Add new question', 'valhalla' ),
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__('Question', 'valhalla' ),
		'field' => 'field1',
	],
    'fields' => array(
        'field1' => array(
            'type' => 'text',
            'label' => _('Question'),
            'default' => ''
        ),
        'field2' => array(
            'type' => 'textarea',
            'label' => _('Answer'),
            'default' => ''
        ),
    )
));
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_faq_question_typography',
	'label'       => esc_html__( 'Typography settings for question title', 'valhalla' ),
	'section'     => 'valhalla_faq_questions',
	'default'     => [
		'font-size'      => '20px',
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.faq-collapse-button',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_faq_answer_typography',
	'label'       => esc_html__( 'Typography settings for answer text', 'valhalla' ),
	'section'     => 'valhalla_faq_questions',
	'default'     => [
		'font-size'      => '16px',
		'line-height'    => '28px',
		'text-align'     => 'justify',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.faq-collapse-body',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_header_top_bg',
	'label'       => __( 'Top bar background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.faq-header-top-bar-bg',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_header_top_color',
	'label'       => __( 'Top bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_header_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.faq-header-top-bar, .faq-header-top-bar a',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_header_title_bar_bg',
	'label'       => __( 'Title bar background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.faq-header-title-bar',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_header_title_bar_color',
	'label'       => __( 'Title bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_header_color',
	'default'     => '#fff',
	'output' => array(
		array(
			'element'  => '.faq-header-title-bar',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_header_bg_color1',
	'label'       => __( 'Gradient background: primary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_header_color',
	'default'     => '#131b80',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_header_bg_color2',
	'label'       => __( 'Gradient background: secondary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_header_color',
	'default'     => '#040325',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_header_menu_default_color',
	'label'       => __( 'Menu bar default font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_header_menu_hover_color',
	'label'       => __( 'Menu bar font color on hover', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_header_menu_dropdown_bg',
	'label'       => __( 'Dropdown menu background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_header_menu_dropdown_border',
	'label'       => __( 'Dropdown menu border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_header_menu_dropdown_color',
	'label'       => __( 'Dropdown menu font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_header_color',
	'default'     => '#525f7f',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_question_box_header_bg',
	'label'       => __( 'Question box header background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_color',
	'default'     => '#f5f5f5',
	'output' => array(
		array(
			'element'  => '.faq-collapse-header',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_question_box_header_color',
	'label'       => __( 'Question box header font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_color',
	'default'     => '#333',
	'output' => array(
		array(
			'element'  => '.faq-collapse-button, .faq-collapse-button:hover',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_question_box_body_color',
	'label'       => __( 'Question box body font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.faq-collapse-body',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_faq_question_box_border',
	'label'       => __( 'Question box border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_faq_color',
	'default'     => '#ddd',
	'output' => array(
		array(
			'element'  => '.faq-collapse-border',
			'property' => 'border-color',
		),
		array(
			'element'  => '.faq-collapse-header',
			'property' => 'border-color',
		),
	),
] );

Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_blog_custom_title_enable',
	'label'       => esc_html__( 'Set a custom title for this page header', 'valhalla' ),
	'description' => esc_html__( 'By default, the title shown in the header title bar is the one you set in the WordPress editor.', 'valhalla' ),
	'section'     => 'valhalla_blog_title',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_blog_custom_title',
	'label'    => esc_html__( 'Custom title', 'valhalla' ),
	'section'  => 'valhalla_blog_title',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_blog_custom_title_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_header_top_bg',
	'label'       => __( 'Top bar background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.blog-header-top-bar-bg',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_header_top_color',
	'label'       => __( 'Top bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_header_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.blog-header-top-bar, .blog-header-top-bar a',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_header_title_bar_bg',
	'label'       => __( 'Title bar background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.blog-header-title-bar',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_header_title_bar_color',
	'label'       => __( 'Title bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_header_color',
	'default'     => '#fff',
	'output' => array(
		array(
			'element'  => '.blog-header-title-bar',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_header_bg_color1',
	'label'       => __( 'Gradient background: primary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_header_color',
	'default'     => '#131b80',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_header_bg_color2',
	'label'       => __( 'Gradient background: secondary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_header_color',
	'default'     => '#040325',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_header_menu_default_color',
	'label'       => __( 'Menu bar default font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_header_menu_hover_color',
	'label'       => __( 'Menu bar font color on hover', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_header_menu_dropdown_bg',
	'label'       => __( 'Dropdown menu background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_header_menu_dropdown_border',
	'label'       => __( 'Dropdown menu border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_header_menu_dropdown_color',
	'label'       => __( 'Dropdown menu font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_header_color',
	'default'     => '#525f7f',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_post_box_border_color',
	'label'       => __( 'Post box border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_color',
	'default'     => '#24b47e',
	'output' => array(
		array(
			'element'  => '.post-box',
			'property' => 'border-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_post_box_title_color',
	'label'       => __( 'Post box title color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => '.post-box h4 a, .post-box h4 a:hover',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_blog_post_box_text_color',
	'label'       => __( 'Post box text color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_blog_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.post-box p, .post-box a',
			'property' => 'color',
		),
	),
] );

Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_header_top_bg',
	'label'       => __( 'Top bar background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.post-header-top-bar-bg',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_header_top_color',
	'label'       => __( 'Top bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_header_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.post-header-top-bar, .post-header-top-bar a',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_header_title_bar_bg',
	'label'       => __( 'Title bar background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.post-header-title-bar',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_header_title_bar_color',
	'label'       => __( 'Title bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_header_color',
	'default'     => '#fff',
	'output' => array(
		array(
			'element'  => '.post-header-title-bar',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_header_bg_color1',
	'label'       => __( 'Gradient background: primary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_header_color',
	'default'     => '#131b80',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_header_bg_color2',
	'label'       => __( 'Gradient background: secondary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_header_color',
	'default'     => '#040325',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_header_menu_default_color',
	'label'       => __( 'Menu bar default font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_header_menu_hover_color',
	'label'       => __( 'Menu bar font color on hover', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_header_menu_dropdown_bg',
	'label'       => __( 'Dropdown menu background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_header_menu_dropdown_border',
	'label'       => __( 'Dropdown menu border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_header_menu_dropdown_color',
	'label'       => __( 'Dropdown menu font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_header_color',
	'default'     => '#525f7f',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_main_bg',
	'label'       => __( 'Main content area background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#F6F9FC',
	'output' => array(
		array(
			'element'  => '.post-main-content-area',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_main_border',
	'label'       => __( 'Main content area border bottom color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#ccc',
	'output' => array(
		array(
			'element'  => '.post-main-content-area',
			'property' => 'border-bottom-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_content_bg',
	'label'       => __( 'Post content area background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.post-section',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_content_color',
	'label'       => __( 'Post content font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.post-content, .post-tags, .post-tags a, .post-author, .comments-title, .logged-in-as a, .comment-form-comment label, .no-comments',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_comment_box_bg',
	'label'       => __( 'Comment box background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#f9f9f9',
	'output' => array(
		array(
			'element'  => '.comment-body',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_comment_box_border_color',
	'label'       => __( 'Comment box border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#ddd',
	'output' => array(
		array(
			'element'  => '.comment-body',
			'property' => 'border-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_comment_box_links_color',
	'label'       => __( 'Comment box links color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => 'div.comment-author a, div.comment-meta a, .comment-author .fn',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_comment_box_text_color',
	'label'       => __( 'Comment box text color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#333',
	'output' => array(
		array(
			'element'  => '.comment-body p',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_reply_button_bg',
	'label'       => __( 'Reply button background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#1e88e5',
	'output' => array(
		array(
			'element'  => '.comment-reply-link',
			'property' => 'background',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_reply_button_color',
	'label'       => __( 'Reply button font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.comment-reply-link, .comment-reply-link:hover',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_submit_button_bg',
	'label'       => __( 'Submit button background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#1e88e5',
	'output' => array(
		array(
			'element'  => '.submit',
			'property' => 'background',
		),
		array(
			'element'  => '.submit',
			'property' => 'border-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_submit_button_color',
	'label'       => __( 'Submit button font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.submit',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'select',
	'settings'    => 'valhalla_post_search_button_style',
	'label'       => esc_html__( 'Search button style', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => 'btn-secondary',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'btn-primary' => esc_html__( 'Primary', 'valhalla' ),
		'btn-secondary' => esc_html__( 'Secondary', 'valhalla' ),
		'btn-success' => esc_html__( 'Success', 'valhalla' ),
		'btn-danger' => esc_html__( 'Danger', 'valhalla' ),
		'btn-warning' => esc_html__( 'Warning', 'valhalla' ),
		'btn-info' => esc_html__( 'Info', 'valhalla' ),
		'btn-light' => esc_html__( 'Light', 'valhalla' ),
		'btn-dark' => esc_html__( 'Dark', 'valhalla' ),
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_sidebar_titles_color',
	'label'       => __( 'Sidebar titles color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => '.post-sidebar h2',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_post_sidebar_content_color',
	'label'       => __( 'Sidebar content color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_post_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.post-sidebar li, .post-sidebar a, .post-sidebar .widget_calendar td, .post-sidebar .widget_calendar th, .post-sidebar .widget_calendar caption',
			'property' => 'color',
		),
		array(
			'element'  => '.widget_categories li, .widget_archive li, .widget_recent_comments li, .widget_recent_entries li, .widget_meta li, .widget_rss li, .widget_pages li, .widget_nav_menu li',
			'property' => 'border-bottom-color',
		),
	),
] );

Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_contact_custom_title_enable',
	'label'       => esc_html__( 'Set a custom title for this page header', 'valhalla' ),
	'description' => esc_html__( 'By default, the title shown in the header title bar is the one you set in the WordPress editor.', 'valhalla' ),
	'section'     => 'valhalla_contact_title',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_contact_custom_title',
	'label'    => esc_html__( 'Custom title', 'valhalla' ),
	'section'  => 'valhalla_contact_title',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_contact_custom_title_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_contact_s1_heading',
	'label'    => esc_html__( 'Heading', 'valhalla' ),
	'description' => esc_html__( 'e.g., "We Would Love to Hear From You, Lets Get In Touch".', 'valhalla' ),
	'section'  => 'valhalla_contact_s1',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_contact_s1_heading_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_s1',
	'default'     => [
		'font-size'      => '25px',
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.contact-section1-heading',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'textarea',
	'settings' => 'valhalla_contact_s1_text',
	'label'    => esc_html__( 'Text', 'valhalla' ),
	'section'  => 'valhalla_contact_s1',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
	'active_callback' => [
		[
			'setting'  => 'valhalla_contact_s1_html_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_contact_s1_text_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_s1',
	'default'     => [
		'font-size'      => '16px',
		'line-height'    => '28px',
		'text-align'     => 'justify',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'active_callback' => [
		[
			'setting'  => 'valhalla_contact_s1_html_enable',
			'operator' => '==',
			'value'    => false,
		]
	],
	'output'      => [
		[
			'element' => '.contact-section1-text',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'editor',
	'settings'    => 'valhalla_contact_s1_html',
	'label'       => esc_html__( 'Text/HTML', 'valhalla' ),
	'description' => esc_html__( 'HTML code must be added only in the text tab.', 'valhalla' ),
	'section'     => 'valhalla_contact_s1',
	'default'     => '',
	'active_callback' => [
		[
			'setting'  => 'valhalla_contact_s1_html_enable',
			'operator' => '==',
			'value'    => true,
		]
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_contact_s1_html_enable',
	'label'       => esc_html__( 'Insert arbitrary HTML code.', 'valhalla' ),
	'description' => esc_html__( 'Check this option if you want the above field to be able to accept HTML code.', 'valhalla' ),
	'section'     => 'valhalla_contact_s1',
	'default'     => false,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'dimension',
	'settings'    => 'valhalla_contact_s2_width',
	'label'       => esc_html__( 'Form max width in pixels', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_s2',
	'default'     => '1200px',
	'output' => array(
		array(
			'element'  => '.contact-form',
			'property' => 'max-width',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_contact_s2_maps_location',
	'label'    => esc_html__( 'Google Maps location', 'valhalla' ),
	'description' => esc_html__( 'Type a location or an address without space and with a + sign between the words. For example, 1600+Amphitheatre+Parkway+Mountain+View+CA', 'valhalla' ),
	'section'  => 'valhalla_contact_s2',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_s2_label_color',
	'label'       => __( 'Field label color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_s2',
	'default'     => '#333',
	'output' => array(
		array(
			'element'  => '.contact-form-label',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'select',
	'settings'    => 'valhalla_contact_s2_submit_style',
	'label'       => esc_html__( 'Submit button style', 'valhalla' ),
	'section'     => 'valhalla_contact_s2',
	'default'     => 'btn-success',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => [
		'btn-primary' => esc_html__( 'Primary', 'valhalla' ),
		'btn-secondary' => esc_html__( 'Secondary', 'valhalla' ),
		'btn-success' => esc_html__( 'Success', 'valhalla' ),
		'btn-danger' => esc_html__( 'Danger', 'valhalla' ),
		'btn-warning' => esc_html__( 'Warning', 'valhalla' ),
		'btn-info' => esc_html__( 'Info', 'valhalla' ),
		'btn-light' => esc_html__( 'Light', 'valhalla' ),
		'btn-dark' => esc_html__( 'Dark', 'valhalla' ),
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_s2_mesage_success',
	'label'       => __( 'Success message color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_s2',
	'default'     => '#398f14',
	'output' => array(
		array(
			'element'  => '.contact-form-success',
			'property' => 'border-color',
		),
        array(
			'element'  => '.contact-form-success',
			'property' => 'color',
		),
	),	
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_s2_mesage_error',
	'label'       => __( 'Error message color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_s2',
	'default'     => '#ff0000',
	'output' => array(
		array(
			'element'  => '.contact-form-error',
			'property' => 'border-color',
		),
        array(
			'element'  => '.contact-form-error',
			'property' => 'color',
		),
	),	
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_contact_s3_hide_emails',
	'label'       => esc_html__( 'Hide emails', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_s3',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#contact-emails',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( false ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_contact_s3_hide_phones',
	'label'       => esc_html__( 'Hide phone numbers', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_s3',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#contact-phones',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( false ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_contact_s3_hide_addresses',
	'label'       => esc_html__( 'Hide addresses', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_s3',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#contact-addresses',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( false ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_contact_s3_email_heading',
	'label'    => esc_html__( 'Email section heading', 'valhalla' ),
	'section'  => 'valhalla_contact_s3',
	'description' => esc_html__( 'e.g., "Our emails".', 'valhalla' ),
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field('valhalla_config', array (
    'type' => 'repeater',
    'settings' => 'valhalla_contact_s3_email',
    'label' => esc_html__('', 'valhalla'),
	'section' => 'valhalla_contact_s3',
	'button_label' => esc_html__('Add new email', 'valhalla' ),
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__('Email', 'valhalla' ),
		'field' => 'field1',
	],
    'fields' => array(
        'field1' => array(
            'type' => 'text',
            'label' => _('Email'),
            'default' => ''
        ),
    )
));
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_contact_s3_phone_heading',
	'label'    => esc_html__( 'Phone number section heading', 'valhalla' ),
	'section'  => 'valhalla_contact_s3',
	'description' => esc_html__( 'e.g., "Our phone numbers".', 'valhalla' ),
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field('valhalla_config', array (
    'type' => 'repeater',
    'settings' => 'valhalla_contact_s3_phone',
    'label' => esc_html__('', 'valhalla'),
	'section' => 'valhalla_contact_s3',
	'button_label' => esc_html__('Add new number', 'valhalla' ),
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__('Phone', 'valhalla' ),
		'field' => 'field1',
	],
    'fields' => array(
        'field1' => array(
            'type' => 'text',
            'label' => _('Phone number'),
            'default' => ''
        ),
    )
));
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_contact_s3_address_heading',
	'label'    => esc_html__( 'Address section heading', 'valhalla' ),
	'section'  => 'valhalla_contact_s3',
	'description' => esc_html__( 'e.g., "Our addresses".', 'valhalla' ),
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field('valhalla_config', array (
    'type' => 'repeater',
    'settings' => 'valhalla_contact_s3_address',
    'label' => esc_html__('', 'valhalla'),
	'section' => 'valhalla_contact_s3',
	'button_label' => esc_html__('Add new address', 'valhalla' ),
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__('Address', 'valhalla' ),
		'field' => 'field1',
	],
    'fields' => array(
        'field1' => array(
            'type' => 'text',
            'label' => _('Address'),
            'default' => ''
        ),
    )
));
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_contact_s3_headings_typography',
	'label'       => esc_html__( 'Typography settings for headings', 'valhalla' ),
	'section'     => 'valhalla_contact_s3',
	'default'     => [
		'font-size'      => '20px',
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.contact-section3-headings',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_contact_s3_items_typography',
	'label'       => esc_html__( 'Typography settings for items', 'valhalla' ),
	'section'     => 'valhalla_contact_s3',
	'default'     => [
		'font-size'      => '16px',
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.contact-section3-items',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_header_top_bg',
	'label'       => __( 'Top bar background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.contact-header-top-bar-bg',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_header_top_color',
	'label'       => __( 'Top bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_header_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.contact-header-top-bar, .contact-header-top-bar a',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_header_title_bar_bg',
	'label'       => __( 'Title bar background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.contact-header-title-bar',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_header_title_bar_color',
	'label'       => __( 'Title bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_header_color',
	'default'     => '#fff',
	'output' => array(
		array(
			'element'  => '.contact-header-title-bar',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_header_bg_color1',
	'label'       => __( 'Gradient background: primary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_header_color',
	'default'     => '#131b80',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_header_bg_color2',
	'label'       => __( 'Gradient background: secondary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_header_color',
	'default'     => '#040325',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_header_menu_default_color',
	'label'       => __( 'Menu bar default font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_header_menu_hover_color',
	'label'       => __( 'Menu bar font color on hover', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_header_menu_dropdown_bg',
	'label'       => __( 'Dropdown menu background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_header_menu_dropdown_border',
	'label'       => __( 'Dropdown menu border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_header_menu_dropdown_color',
	'label'       => __( 'Dropdown menu font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_header_color',
	'default'     => '#525f7f',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_s1_heading_color',
	'label'       => __( 'Section 1 heading color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => '.contact-section1-heading',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_s1_text_color',
	'label'       => __( 'Section 1 text color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.contact-section1-text',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_s3_headings_color',
	'label'       => __( 'Section 3 headings color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'  => '.contact-section3-headings',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_contact_s3_items_color',
	'label'       => __( 'Section 3 items color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_contact_color',
	'default'     => '#525f7f',
	'output' => array(
		array(
			'element'  => '.contact-section3-items',
			'property' => 'color',
		),
	),
] );

Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_other_header_top_bg',
	'label'       => __( 'Top bar background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_other_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.other-pages-header-top-bar-bg',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_other_header_top_color',
	'label'       => __( 'Top bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_other_header_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'  => '.other-pages-header-top-bar, .other-pages-header-top-bar a',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_other_header_title_bar_bg',
	'label'       => __( 'Title bar background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_other_header_color',
	'default'     => '#212121',
	'output' => array(
		array(
			'element'  => '.other-pages-header-title-bar',
			'property' => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_other_header_title_bar_color',
	'label'       => __( 'Title bar font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_other_header_color',
	'default'     => '#fff',
	'output' => array(
		array(
			'element'  => '.other-pages-header-title-bar',
			'property' => 'color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_other_header_bg_color1',
	'label'       => __( 'Gradient background: primary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_other_header_color',
	'default'     => '#131b80',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_other_header_bg_color2',
	'label'       => __( 'Gradient background: secondary color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_other_header_color',
	'default'     => '#040325',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_other_header_menu_default_color',
	'label'       => __( 'Menu bar default font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_other_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_other_header_menu_hover_color',
	'label'       => __( 'Menu bar font color on hover', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_other_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_other_header_menu_dropdown_bg',
	'label'       => __( 'Dropdown menu background color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_other_header_color',
	'default'     => '#fff',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_other_header_menu_dropdown_border',
	'label'       => __( 'Dropdown menu border color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_other_header_color',
	'default'     => '#ccc',
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_other_header_menu_dropdown_color',
	'label'       => __( 'Dropdown menu font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_other_header_color',
	'default'     => '#525f7f',
] );

Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_footer_about_heading',
	'label'    => esc_html__( 'Heading', 'valhalla' ),
	'section'  => 'valhalla_footer_about',
	'description' => esc_html__( 'e.g., "A little about us".', 'valhalla' ),
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'textarea',
	'settings' => 'valhalla_footer_about_text',
	'label'    => esc_html__( 'Text', 'valhalla' ),
	'section'  => 'valhalla_footer_about',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_footer_about_text_typography',
	'label'       => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_footer_about',
	'default'     => [
		'text-align'     => 'left',
	],
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#footer-about .footer-text',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_footer_contact_heading',
	'label'    => esc_html__( 'Heading', 'valhalla' ),
	'section'  => 'valhalla_footer_contact',
	'description' => esc_html__( 'e.g., "Get in touch".', 'valhalla' ),
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_footer_contact_display_phone',
	'label'       => esc_html__( 'Display phone icon', 'valhalla' ),
	'description' => esc_html__( 'This icon is hidden by default.', 'valhalla' ),
	'section'     => 'valhalla_footer_contact',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#footer-phone',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_footer_contact_display_whatsapp',
	'label'       => esc_html__( 'Display Whatsapp icon', 'valhalla' ),
	'description' => esc_html__( 'This icon is hidden by default.', 'valhalla' ),
	'section'     => 'valhalla_footer_contact',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#footer-whatsapp',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_footer_contact_display_email',
	'label'       => esc_html__( 'Display email icon', 'valhalla' ),
	'description' => esc_html__( 'This icon is hidden by default.', 'valhalla' ),
	'section'     => 'valhalla_footer_contact',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#footer-email',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_footer_contact_display_address',
	'label'       => esc_html__( 'Display address icon', 'valhalla' ),
	'description' => esc_html__( 'This icon is hidden by default.', 'valhalla' ),
	'section'     => 'valhalla_footer_contact',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#footer-address',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_footer_contact_phone',
	'label'    => esc_html__( 'Phone number', 'valhalla' ),
	'section'  => 'valhalla_footer_contact',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_footer_contact_whatsapp',
	'label'    => esc_html__( 'Whatsapp', 'valhalla' ),
	'section'  => 'valhalla_footer_contact',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_footer_contact_email',
	'label'    => esc_html__( 'Email', 'valhalla' ),
	'section'  => 'valhalla_footer_contact',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_footer_contact_address',
	'label'    => esc_html__( 'Address', 'valhalla' ),
	'section'  => 'valhalla_footer_contact',
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'text',
	'settings' => 'valhalla_footer_social_heading',
	'label'    => esc_html__( 'Heading', 'valhalla' ),
	'section'  => 'valhalla_footer_social',
	'description' => esc_html__( 'e.g., "Social networks".', 'valhalla' ),
	'default'  => esc_html__( '', 'valhalla' ),
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_footer_social_display_twitter',
	'label'       => esc_html__( 'Display Twitter icon', 'valhalla' ),
	'description' => esc_html__( 'This icon is hidden by default.', 'valhalla' ),
	'section'     => 'valhalla_footer_social',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#footer-twitter',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_footer_social_display_facebook',
	'label'       => esc_html__( 'Display Facebook icon', 'valhalla' ),
	'description' => esc_html__( 'This icon is hidden by default.', 'valhalla' ),
	'section'     => 'valhalla_footer_social',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#footer-facebook',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_footer_social_display_instagram',
	'label'       => esc_html__( 'Display Instagram icon', 'valhalla' ),
	'description' => esc_html__( 'This icon is hidden by default.', 'valhalla' ),
	'section'     => 'valhalla_footer_social',
	'default'     => false,
	'output' => array(
		array(
			'element'       => '#footer-instagram',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'link',
	'settings' => 'valhalla_footer_social_twitter',
	'label'    => __( 'Twitter profile', 'valhalla' ),
	'section'  => 'valhalla_footer_social',
	'description'  => esc_html__( 'Type your Twitter profile link', 'valhalla' ),
	'default'  => '',
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'link',
	'settings' => 'valhalla_footer_social_facebook',
	'label'    => __( 'Facebook profile', 'valhalla' ),
	'section'  => 'valhalla_footer_social',
	'description'  => esc_html__( 'Type your Facebook profile link', 'valhalla' ),
	'default'  => '',
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'     => 'link',
	'settings' => 'valhalla_footer_social_instagram',
	'label'    => __( 'Instagram profile', 'valhalla' ),
	'section'  => 'valhalla_footer_social',
	'description'  => esc_html__( 'Type your Instagram profile link', 'valhalla' ),
	'default'  => '',
	'priority' => 10,
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_footer1_bg',
	'label'       => __( 'Footer 1 background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_footer_color',
	'default'     => '#F6F9FC',
	'output' => array(
		array(
			'element'       => '.footer',
			'property'      => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_footer1_color',
	'label'       => __( 'Footer 1 font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_footer_color',
	'default'     => '#8898aa',
	'output' => array(
		array(
			'element'       => '.footer, .footer a, .footer-sidebar h2, .footer-sidebar a, .footer-sidebar li, .footer-sidebar caption',
			'property'      => 'color',
		),
		array(
			'element'       => '.footer a, .footer-sidebar a',
			'property'      => 'text-decoration',
			'value_pattern' => 'none',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_footer2_bg',
	'label'       => __( 'Footer 2 background', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_footer_color',
	'default'     => '#6772e5',
	'output' => array(
		array(
			'element'       => '.footer2',
			'property'      => 'background-color',
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'color',
	'settings'    => 'valhalla_footer2_color',
	'label'       => __( 'Footer 2 font color', 'valhalla' ),
	'description' => esc_html__( '', 'valhalla' ),
	'section'     => 'valhalla_footer_color',
	'default'     => '#ffffff',
	'output' => array(
		array(
			'element'       => '.footer2',
			'property'      => 'color',
		),
	),
] );

Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_header_menu_main',
	'label'       => esc_html__( 'Main items', 'valhalla' ),
	'section'     => 'valhalla_fonts_header_menu',
	'default'     => [
		'font-family'    => 'Montserrat',
		'font-size'    => '14px',
	],
	'choices' => [
		'fonts' => [
			'google' => $google_fonts,
		],
	],	
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.navbar-light .navbar-nav .nav-link, .navbar-light .navbar-nav .active > .nav-link, .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .active > .nav-link',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_header_menu_dropdown',
	'label'       => esc_html__( 'Dropdown items', 'valhalla' ),
	'section'     => 'valhalla_fonts_header_menu',
	'default'     => [
		'font-family'    => 'Montserrat',
		'font-size'    => '14px',
	],
	'choices' => [
		'fonts' => [
			'google' => $google_fonts,
		],
	],	
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.dropdown-item',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_header_headlines_font',
	'label'       => esc_html__( 'Headlines', 'valhalla' ),
	'section'     => 'valhalla_fonts_home',
	'default'     => [
		'font-family'    => 'Libre Baskerville',
		'font-size'    => '40px',
	],
	'choices' => [
		'fonts' => [
			'google' => $google_fonts,
		],
	],	
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.h1-header-headline',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_home_header_captions_font',
	'label'       => esc_html__( 'Captions', 'valhalla' ),
	'section'     => 'valhalla_fonts_home',
	'default'     => [
		'font-family'    => 'Libre Baskerville',
		'font-size'    => '20px',
	],
	'choices' => [
		'fonts' => [
			'google' => $google_fonts,
		],
	],	
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.header-carousel-caption',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_headings_font',
	'label'       => esc_html__( 'Font for headingss', 'valhalla' ),
	'section'     => 'valhalla_fonts_headings',
	'default'     => [
		'font-family'    => 'Montserrat',
	],
	'choices' => [
		'fonts' => [
			'google' => $google_fonts,
		],
	],	
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '.home-section1-heading, .home-section2-heading, .home-s2-icon, .home-section3-heading1, .home-section3-heading2, .home-section5-heading, .home-section5-box1-title, .home-section5-box2-title, .footer-headings, .footer-sidebar h2, .about-section1-heading, .about-section2-heading, .about-s2-icon, .card-title, .about-section3-heading, .modal-title, .post-title, .contact-section1-heading, .contact-form-label, .contact-section3-headings, .services-section1-heading, .services-box-title, .search-page-title, .search-post-title, .search-older, .search-newer, .panel-title a, .post-sidebar h2, .comments-title, .comment-reply-title, .widget_page_section1 h1, .widget_page_section1 h2, .about-header-title-bar-1200px, .portfolio-header-title-bar-1200px, .services-header-title-bar-1200px, .faq-header-title-bar-1200px, .contact-header-title-bar-1200px, .blog-header-title-bar-1200px, .post-header-title-bar-1200px, .other-pages-header-title-bar-1200px, .ui-widget-content .ui-state-default a, .faq-collapse-header, .no-comments, .post-page-links-title, .post-page-links a, .page-links-title, .page-links a, .pages-navigation .current, .pages-navigation a, .text-404, .not-found-404',
		],
	],
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'typography',
	'settings'    => 'valhalla_body_font',
	'label'       => esc_html__( 'Body font', 'valhalla' ),
	'section'     => 'valhalla_fonts_body',
	'default'     => [
		'font-family'    => 'Source Sans Pro',
		'font-size'      => '16px',
	],
	'choices' => [
		'fonts' => [
			'google' => $google_fonts,
		],
	],	
	'priority'    => 10,
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => 'body, .ui-widget',
		],
	],
] );

Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s1_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_home_s1',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.home-section1',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s2_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_home_s2',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.home-section2',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s3_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_home_s3',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.home-section3, .home-section3-b',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s4_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_home_s4',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.home-section4',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_home_s5_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_home_s5',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.home-section5',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_about_s1_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_about_s1',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.about-section1',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_about_s2_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_about_s2',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.about-section2',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_about_s3_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_about_s3',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.about-section3',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_services_s1_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_services_s1',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.services-section1',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_services_s2_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_services_s2',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.services-section2',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_services_s3_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_services_s3',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.services-section3',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_contact_s1_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_contact_s1',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.contact-section1',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_contact_s2_form_display',
	'label'       => esc_html__( 'Display contact form', 'valhalla' ),
	'description' => esc_html__( 'The contact form is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_contact_s2',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.contact-form-display',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_contact_s2_maps_display',
	'label'       => esc_html__( 'Display Google Maps', 'valhalla' ),
	'description' => esc_html__( 'The contact form map is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_contact_s2',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.contact-google-maps',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_contact_s3_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_contact_s3',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '.contact-section3',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_footer_about_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_footer_about',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '#footer-about',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_footer_contact_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_footer_contact',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '#footer-contact',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );
Kirki::add_field( 'valhalla_config', [
	'type'        => 'checkbox',
	'settings'    => 'valhalla_footer_social_display',
	'label'       => esc_html__( 'Display this section', 'valhalla' ),
	'description' => esc_html__( 'This section is hidden by default. Check this option to display it.', 'valhalla' ),
	'section'     => 'valhalla_footer_social',
	'default'     => false,
	'priority'    => 9,
	'output' => array(
		array(
			'element'       => '#footer-social',
			'property'      => 'display',
			'value_pattern' => 'none',
			'exclude'       => array( true ),
		),
	),
] );

