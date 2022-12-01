<?php
include 'customizer/customizer.php';
include 'widgets/widgets.php';
include 'admin/admin.php';

class THFW_Features 
{
    public function __construct() {
		//Custom Theme Support
		add_theme_support( 'menus');
		add_theme_support( 'post-thumbnails');
		add_theme_support( 'title-tag');
		add_theme_support( 'custom-logo');
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'automatic-feed-links' ); 
		add_theme_support( 'post-formats',  array(
			'aside', 'gallery', 'quote', 'image', 'video' ) );
		add_theme_support( 'html5', array(
			'comments-list', 'comment-form', 'search-form'
		) );

		//Custom Menus
		add_action( 'init', [$this, 'thfw_register_menus']);

		//SVG Support
		add_filter( 'wp_check_filetype_and_ext', [$this, 'svg_file_type'], 10, 4 );
		add_filter( 'upload_mimes', [$this, 'cc_mime_types'] );
		add_action( 'admin_head', [$this, 'fix_svg'] );

		//Customization
		add_action('content_width', [$this, 'set_content_width']);
		
		// Customizer Settings
		new THFW_Customizer();

		//Custom Admin
		new THFW_Admin();
		
		//Widgets
		new THFW_Widgets();
    }

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
	
	function svg_file_type($data, $file, $filename, $mimes) {

		global $wp_version;
		if ( $wp_version !== '4.7.1' ) {
		return $data;
		}
	
		$filetype = wp_check_filetype( $filename, $mimes );
	
		return [
			'ext'             => $filetype['ext'],
			'type'            => $filetype['type'],
			'proper_filename' => $data['proper_filename']
		];
	
	}

	function cc_mime_types( $mimes ){
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	
	function fix_svg() {
		echo '<style type="text/css">
			.attachment-266x266, .thumbnail img {
				width: 100% !important;
				height: auto !important;
			}
			</style>';
	}

	function set_content_width() {
		if ( ! isset ( $content_width) ) {
			$content_width = 800;
		}
	}
}