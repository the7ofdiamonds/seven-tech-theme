<?php

class THFW_Menu_Widget extends WP_widget {

    public function __construct() {

        $widget_ops = array(
            'classname' => 'thfw-menu-widget',
            'description' => 'THFW Menu Widget',
        );

        parent::__construct('thfw_menu_widget', 'THFW Menu Widget', $widget_ops);
    }

    public function widget( $args, $instance) {}
}