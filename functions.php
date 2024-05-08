<?php
include 'css/_css.php';
include 'js/_js.php';

new THE_HOUSE_FOREVER_WINS_CSS;
new THE_HOUSE_FOREVER_WINS_JS;

//Custom Theme Support
add_theme_support('customizer');
add_theme_support('title-tag');
add_theme_support('html5', array(
	'comment-list',
	'comment-form',
	'search-form',
	'gallery',
	'caption',
	'style',
	'script'
));
add_theme_support('widgets');
add_theme_support('automatic-feed-links');
add_theme_support('post-thumbnails', ['post', 'page', 'custom-post-type']);

//Register Nav Menus
add_action('init', 'thfw_register_menus');
function thfw_register_menus()
{
	register_nav_menus(
		array(
			'mobile-menu' => 'Mobile Menu',
			'left-menu' => 'Left Menu',
			'right-menu' => 'Right Menu',
			'bottom-menu' => 'Bottom Menu',
		)
	);
}

function add_x_frame_options_header() {
    header('X-Frame-Options: SAMEORIGIN');
}

add_action('send_headers', 'add_x_frame_options_header');
