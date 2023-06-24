<?php

class THE_HOUSE_FOREVER_WINS_JS
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'load_js']);
    }

    function load_js()
    {
        wp_enqueue_script('mainjs', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), false, true);
    }
}
