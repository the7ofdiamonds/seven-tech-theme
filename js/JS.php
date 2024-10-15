<?php

namespace SEVEN_TECH_THEME\JS;

class JS
{
    function load_js()
    {
        wp_enqueue_script('mainjs', get_stylesheet_directory_uri() . '/JS/main.js', array('jquery'), false, true);
    }
}
