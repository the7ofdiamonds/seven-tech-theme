<?php
include 'customizer/customizer.php';

//Custom Theme Support
add_theme_support( 'title-tag');
add_theme_support( 'post-formats',  array(
	'aside', 'gallery', 'quote', 'image', 'video' ) );
add_theme_support( 'html5', array( 
	'comment-list', 
	'comment-form', 
	'search-form', 
	'gallery', 
	'caption', 
	'style', 
	'script' 
) );
add_theme_support( 'post-thumbnails' );

//Load Theme CSS
add_action('wp_enqueue_scripts', 'load_css');
function load_css(){
	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
	wp_enqueue_style('main');
}

//Load Theme Javascript
add_action('wp_enqueue_scripts', 'load_js');
function load_js(){
	wp_register_script('mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true );
	wp_enqueue_script('mainjs');
}

//Register Nav Menus
add_action('init', 'thfw_register_menus');
function thfw_register_menus() {
	register_nav_menus(
		array(
			'top-menu' => 'Top Menu Location',
			'left-menu' => 'Left Menu Location',
			'right-menu' => 'Right Menu Location',
			'bottom-menu' => 'Bottom Menu Location',
		)
	);
}

//Theme Customizer
new THFW_Customizer();