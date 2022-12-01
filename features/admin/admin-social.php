<?php

class THFW_Admin_Social 
{

    public function __construct() {
        add_action( 'admin_menu', [$this, 'register_custom_menu_page'] );
    }

    function register_custom_menu_page() {

        add_menu_page( 'THFW Admin', 'Admin', 'menu_options', 'thfw_admin', [$this, 'create_social_section'], 'dashicons-info', 110 );

        add_submenu_page( 'thfw_admin', 'THFW Admin', 'Add Social Media', 'manage_options', 'thfw_admin', [$this, 'create_social_section'] );

        add_action( 'admin_init', [$this, 'register_social'] );

    }

    function create_social_section() {

        require_once( get_template_directory() . '/includes/admin/add-social.php') ;
    }

    function register_social() {

        register_setting('thfw-admin-social-group', 'facebook_link');
        register_setting('thfw-admin-social-group', 'twitter_link');
        register_setting('thfw-admin-social-group', 'linkedin_link');
        register_setting('thfw-admin-social-group', 'instagram_link');
        add_settings_section('thfw-admin-social', 'Add Social Media', [$this, 'social_section_description'], 'thfw_admin' );
        add_settings_field( 'facbook_link', 'Facebook', [$this, 'admin_facebook_input'], 'thfw_admin', 'thfw-admin-social');        
        add_settings_field( 'twitter_link', 'Twitter', [$this, 'admin_twitter_input'], 'thfw_admin', 'thfw-admin-social');
        add_settings_field( 'linkedin_link', 'linkedin', [$this, 'admin_linkedin_input'], 'thfw_admin', 'thfw-admin-social');
        add_settings_field( 'instagram_link', 'instagram', [$this, 'admin_instagram_input'], 'thfw_admin', 'thfw-admin-social');
    }

    function social_section_description() {
        echo 'Add your social media links';
    }

    function admin_facebook_input() {
        $facebook_link = esc_attr( get_option( 'facebook_link' ) );
        echo '<input type="text" name="facebook_link" value="'.$facebook_link.'" />';
    }

    function admin_twitter_input() {
        $twitter_link = esc_attr( get_option( 'twitter_link' ) );
        echo '<input type="text" name="twitter_link" value="'.$twitter_link.'" />';
    }

    function admin_linkedin_input() {
        $linkedin_link = esc_attr( get_option( 'linkedin_link' ) );
        echo '<input type="text" name="linkedin_link" value="'.$linkedin_link.'" />';
    }

    function admin_instagram_input() {
        $instagram_link = esc_attr( get_option( 'instagram_link' ) );
        echo '<input type="text" name="instagram_link" value="'.$instagram_link.'" />';
    }

}