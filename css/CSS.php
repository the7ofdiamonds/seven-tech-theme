<?php

namespace SEVEN_TECH\CSS;

use SEVEN_TECH\CSS\Customizer\Header;
use SEVEN_TECH\CSS\Customizer\Card;
use SEVEN_TECH\CSS\Customizer\Buttons;
use SEVEN_TECH\CSS\Customizer\Font;
use SEVEN_TECH\CSS\Customizer\Border_Radius;
use SEVEN_TECH\CSS\Customizer\Customizer;
use SEVEN_TECH\CSS\Customizer\Shadow;
use SEVEN_TECH\CSS\Customizer\Footer;

class CSS
{
    function load_customization_css()
    {
        (new Customizer())->load_css();
        (new Header())->load_css();
        (new Card())->load_css();
        (new Buttons())->load_css();
        (new Font())->load_css();
        (new Border_Radius())->load_css();
        (new Shadow())->load_css();
        (new Footer())->load_css();
    }

    function load_css()
    {
        $this->load_customization_css();
        wp_enqueue_style('main', get_template_directory_uri() . '/CSS/main.css');
    }
}
