<?php

namespace SEVEN_TECH;

use SEVEN_TECH\CSS\CSS;
use SEVEN_TECH\JS\JS;
use SEVEN_TECH\Menu\Menu;

require_once 'vendor/autoload.php';

class SEVEN_TECH
{
    public function __construct()
    {
        $menu = new Menu;

        add_action('after_switch_theme', [$menu, 'register_menus']);

        add_theme_support('customizer');
        add_theme_support('title-tag');
        add_theme_support('html5', array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption',
            'style',
            'script'
        ));
        add_theme_support('widgets');
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails', ['post', 'page', 'custom-post-type']);

        $css = new CSS;
        $js = new JS;

        add_action('wp_head', [$css, 'load_css']);
        add_action('wp_enqueue_scripts', [$js, 'load_js']);
    }
}
