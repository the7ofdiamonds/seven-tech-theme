<?php
include 'admin-social.php';
include 'admin-team.php';

class THFW_Admin {

    public function __construct() {
        new THFW_Admin_Social();
        new THFW_Admin_Team();
    }
}