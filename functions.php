<?php
include 'features/features.php';
include 'thfw-portfolio.php';
include 'thfw-team.php';

//Load Theme CSS
add_action('wp_enqueue_scripts', 'load_css');
function load_css(){
	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
	wp_enqueue_style('main');
}

//Load Theme Javascript
add_action('wp_enqueue_scripts', 'load_js');
function load_js(){
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), null, false);
	wp_register_script('jqueryjs', get_template_directory_uri() . '/js/jquery.js', array(), false, true );
	wp_enqueue_script('jqueryjs');
	wp_register_script('mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'), false, false );
	wp_enqueue_script('mainjs');
}

// Font Awesome
add_action('wp_enqueue_scripts', 'enqueue_fa_script');
function enqueue_fa_script() {
	wp_enqueue_script('fascript', 'https://kit.fontawesome.com/ea9246a7a5.js');
}

//Load Features
new THFW_Features();

// Post Types
new THFWTeamPostType();
new THFWPortfolioPostType();