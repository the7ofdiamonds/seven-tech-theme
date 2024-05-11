<?php
namespace SEVEN_TECH\CSS\Customizer;

use WP_Customize_Color_Control;

class Font
{

    public function __construct()
    {
        add_action('customize_register', array($this, 'register_thfw_font_customize_section'));
        add_action('wp_head', [$this, 'load_css']);
    }

    public function register_thfw_font_customize_section($wp_customize)
    {
        /*
        * Add settings to sections.
        */
        $this->thfw_font_section($wp_customize);
    }

    private function thfw_font_section($wp_customize)
    {

        $wp_customize->add_section('font_settings', array(
            'title'          => __('Font', 'the-house-forever-wins'),
            'description'    =>  __('Font options', 'the-house-forever-wins'),
            'priority'       => 5,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'panel'  => 'theme_options',
        ));

        $wp_customize->add_setting('heading_font_family', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            'heading_font_family',
            array(
                'type' => 'input',
                'label' => __('Heading Font', 'the-house-forever-wins'),
                'section' => 'font_settings',
            )
        );

        $wp_customize->add_setting('body_font_family', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            'body_font_family',
            array(
                'type' => 'input',
                'label' => __('Body Font', 'the-house-forever-wins'),
                'section' => 'font_settings',
            )
        );

        $wp_customize->add_setting('link_text_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'link_text_color',
                array(
                    'label' => __('Link Color', 'the-house-forever-wins'),
                    'section' => 'font_settings',
                    'settings' => 'link_text_color',
                )
            )
        );

        $wp_customize->add_setting('link_text_color_hover', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'link_text_color_hover',
                array(
                    'label' => __('Link Hover Color', 'the-house-forever-wins'),
                    'section' => 'font_settings',
                    'settings' => 'link_text_color_hover',
                )
            )
        );
    }

    function load_css()
    {
?>
        <style>
            body,
            p {
                font-family: <?php if (!get_theme_mod('body_font_family')) {
                                    echo 'var(--thfw-font-body)';
                                } else {
                                    echo esc_html(get_theme_mod('body_font_family'));
                                } ?>;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            label {
                font-family: <?php if (!get_theme_mod('heading_font_family')) {
                                    echo 'var(--thfw-font-heading)';
                                } else {
                                    echo esc_html(get_theme_mod('heading_font_family'));
                                } ?>;
            }

            a {
                color: <?php if (!get_theme_mod('link_text_color')) {
                            echo 'var(--thfw-font-color)';
                        } else {
                            echo esc_html(get_theme_mod('link_text_color'));
                        } ?>;
            }

            a:hover {
                color: <?php if (!get_theme_mod('link_text_color_hover')) {
                            echo 'var(--thfw-font-color)';
                        } else {
                            echo esc_html(get_theme_mod('link_text_color_hover'));
                        } ?>;
            }
        </style>
<?php
    }
}
