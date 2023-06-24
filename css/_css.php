<?php
include 'customizer/_customizer.php';

class THE_HOUSE_FOREVER_WINS_CSS
{

    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'load_css']);

        new THE_HOUSE_FOREVER_WINS_Customizer;
    }

    function load_css()
    {
        wp_enqueue_style('main', get_template_directory_uri() .'/css/main.css');
    }
}
