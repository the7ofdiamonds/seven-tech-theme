<?php

namespace SEVEN_TECH_THEME;

define('SEVEN_TECH_THEME', get_template_directory() . '/');

require_once SEVEN_TECH_THEME . 'vendor/autoload.php';

use SEVEN_TECH_THEME\CSS\CSS;
use SEVEN_TECH_THEME\JS\JS;
use SEVEN_TECH_THEME\Menu\Menu;

class SEVEN_TECH_THEME
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
