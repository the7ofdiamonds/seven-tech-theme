<?php

namespace SEVEN_TECH_THEME\Menu;

class Menu
{
    function register_menus()
    {
        register_nav_menus(
            array(
                'mobile-menu' => 'Mobile Menu',
                'left-menu' => 'Left Menu',
                'right-menu' => 'Right Menu',
                'bottom-menu' => 'Bottom Menu',
            )
        );
    }
}
