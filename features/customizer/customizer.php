<?php
include 'font-customizer.php';
include 'shadow-customizer.php';
include 'header-customizer.php';
include 'body-customizer.php';
include 'hero-customizer.php';
include 'card-customizer.php';
include 'button-customizer.php';
include 'footer-customizer.php';

class THFW_Customizer
{
    public function __construct() {
        new THFW_Font_Customizer();
		new THFW_Shadow_Customizer();
		new THFW_Header_Customizer();
		new THFW_Body_Customizer();
		new THFW_Hero_Customizer();
		new THFW_Card_Customizer();
		new THFW_Buttons_Customizer();
		new THFW_Footer_Customizer();
    }
}