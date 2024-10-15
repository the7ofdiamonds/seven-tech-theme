<?php
namespace SEVEN_TECH_THEME\CSS\Customizer;

use WP_Customize_Color_Control;

class Header
{

    public function __construct()
    {
        add_action('customize_register', array($this, 'register_thfw_header_customize_settings'));
        add_action('wp_head', [$this, 'load_css']);
    }

    public function register_thfw_header_customize_settings($wp_customize)
    {
        $this->thfw_header_callout_settings($wp_customize);
    }

    private function thfw_header_callout_settings($wp_customize)
    {

        $wp_customize->add_panel(
            'theme_options',
            array(
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'theme_supports' => '',
                'title'          => __('Theme Options', 'the-house-forever-wins'),
                'description'    => __('Header options', 'the-house-forever-wins'),
            )
        );

        $wp_customize->add_section(
            'header_settings',
            array(
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'theme_supports' => '',
                'title'          => __('Header', 'the-house-forever-wins'),
                'description'    =>  __('Header Options', 'the-house-forever-wins'),
                'panel'  => 'theme_options',
            )
        );

        $wp_customize->add_setting('header_background_color', [
            'sanitize_callback' => 'sanitize_text_field',
        ]);

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'header_background_color',
                array(
                    'label' => __('Header Background Color', 'the-house-forever-wins'),
                    'section' => 'header_settings',
                    'settings' => 'header_background_color',
                    'sanitize_callback' => 'sanitize_text_field',
                )
            )
        );

        $wp_customize->add_setting('nav_background_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'nav_background_color',
                array(
                    'label' => __('Navigation Background Color', 'the-house-forever-wins'),
                    'section' => 'header_settings',
                    'settings' => 'nav_background_color',
                    'sanitize_callback' => 'sanitize_text_field',
                )
            )
        );

        $wp_customize->add_setting('nav_text_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'nav_text_color',
                array(
                    'label' => __('Navigation Text Color', 'the-house-forever-wins'),
                    'section' => 'header_settings',
                    'settings' => 'nav_text_color',
                    'sanitize_callback' => 'sanitize_text_field',
                )
            )
        );

        $wp_customize->add_setting('nav_background_color_hover', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'nav_background_color_hover',
                array(
                    'label' => __('Navigation Background Hover Color', 'the-house-forever-wins'),
                    'section' => 'header_settings',
                    'settings' => 'nav_background_color_hover',
                    'sanitize_callback' => 'sanitize_text_field',
                )
            )
        );

        $wp_customize->add_setting('nav_text_color_hover', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'nav_text_color_hover',
                array(
                    'label' => __('Navigation Text Hover Color', 'the-house-forever-wins'),
                    'section' => 'header_settings',
                    'settings' => 'nav_text_color_hover',
                    'sanitize_callback' => 'sanitize_text_field',
                )
            )
        );

        $wp_customize->add_setting('hamburger_background_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'hamburger_background_color',
                array(
                    'label' => __('Hamburger Menu Background', 'the-house-forever-wins'),
                    'section' => 'header_settings',
                    'settings' => 'hamburger_background_color',
                    'sanitize_callback' => 'sanitize_text_field',
                )
            )
        );

        $wp_customize->add_setting('hamburger_text_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'hamburger_text_color',
                array(
                    'label' => __('Hamburger Menu Text', 'the-house-forever-wins'),
                    'section' => 'header_settings',
                    'settings' => 'hamburger_text_color',
                    'sanitize_callback' => 'sanitize_text_field',
                )
            )
        );
    }

    function load_css()
    {
?>
        <style>
            header {
                background-color: <?php if (!get_theme_mod('header_background_color')) {
                                        echo 'var(--thfw-color-primary)';
                                    } else {
                                        echo esc_html(get_theme_mod('header_background_color'));
                                    } ?>;
            }

            header li {
                background-color: <?php if (!get_theme_mod('nav_background_color')) {
                                        echo 'var(--thfw-color-primary)';
                                    } else {
                                        echo esc_html(get_theme_mod('nav_background_color'));
                                    } ?>;
            }

            header li a {
                color: <?php if (!get_theme_mod('nav_text_color')) {
                            echo 'var(--thfw-font-color)';
                        } else {
                            echo esc_html(get_theme_mod('nav_text_color'));
                        } ?>;
            }

            header nav li:hover {
                background-color: <?php if (!get_theme_mod('nav_background_color_hover')) {
                                        echo 'var(--thfw-header-background-color-hover)';
                                    } else {
                                        echo esc_html(get_theme_mod('nav_background_color_hover'));
                                    } ?>;
            }

            header nav li:hover a {
                color: <?php if (!get_theme_mod('nav_text_color_hover')) {
                            echo 'var(--thfw-header-text-color-hover)';
                        } else {
                            echo esc_html(get_theme_mod('nav_text_color_hover'));
                        } ?>;
            }

            header nav .logo {
                background-color: <?php if (!get_theme_mod('logo_background_color')) {
                                        echo 'var(--thfw--color--primary)';
                                    } else {
                                        echo esc_html(get_theme_mod('nav_background_color'));
                                    } ?>;
            }

            header .rightSide .hamburger {
                background-color: <?php if (!get_theme_mod('hamburger_background_color')) {
                                        echo 'var(--thfw-color-primary)';
                                    } else {
                                        echo esc_html(get_theme_mod('hamburger_background_color'));
                                    } ?>;
            }

            header .rightSide h1 {
                color: <?php if (!get_theme_mod('hamburger_text_color')) {
                            echo 'var(--thfw-color-secondary)';
                        } else {
                            echo esc_html(get_theme_mod('hamburger_text_color'));
                        } ?>;
            }
        </style>
<?php
    }
}
