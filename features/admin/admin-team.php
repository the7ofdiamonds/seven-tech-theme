<?php

class THFW_Admin_Team 
{

    public function __construct() {
        add_action( 'admin_menu', [$this, 'register_custom_menu_page'] );
    }

    function register_custom_menu_page() {

        add_submenu_page( 'thfw_admin', 'THFW Admin', 'Add Team Member', 'manage_options', 'thfw_admin_team', [$this, 'create_admin_team_section'] );
    }

    function create_admin_team_section() {

        require_once( get_template_directory() . '/includes/admin/add-team.php') ;
    }
}