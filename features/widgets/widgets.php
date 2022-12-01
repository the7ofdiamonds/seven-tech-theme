<?php
include 'thfw-social-widget.php';
include 'thfw-menu-widget.php';

class THFW_Widgets extends WP_widget {

    public function __construct() {
        add_theme_support( 'widgets');
        add_action( 'widgets_init', [$this, 'thfw_register_widget_areas'] );
        add_action( 'widgets_init', function() {
            register_widget('THFW_Social_Widget');
            register_widget('THFW_Menu_Widget');
        });
    }

	function thfw_register_widget_areas() {
		register_sidebar( 
			array(
			'name'          => 'Footer Social Bar',
			'id'            => 'thfw_footer_social_icons',
			'description'   => 'This widget area discription',
			'before_widget' => '<div class="social-icons">',
			'after_widget'  => '</div>',
		  )
		);

		register_sidebar( 
			array(
			'name'          => 'Footer Menu',
			'id'            => 'thfw_footer_menu',
			'description'   => 'This widget area discription',
			'before_widget' => '<div class="footer-menu">',
			'after_widget'  => '</div>',
		  )
		);
	}
}