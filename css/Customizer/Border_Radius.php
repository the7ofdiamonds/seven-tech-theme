<?php
namespace SEVEN_TECH_THEME\CSS\Customizer;

use WP_Customize_Color_Control;

class Border_Radius
{

    public function __construct()
    {
        add_action('customize_register', array($this, 'register_customizer_section'));
        add_action('wp_head', [$this, 'load_css']);
    }

    public function register_customizer_section($wp_customize)
    {
        $this->thfw_border_radius_section($wp_customize);
    }

    private function thfw_border_radius_section($wp_customize)
    {

        $wp_customize->add_section(
            'border_radius_settings',
            array(
                'priority'       => 6,
                'capability'     => 'edit_theme_options',
                'theme_supports' => '',
                'title'          => __('Border Radius', 'the-house-forever-wins'),
                'description'    =>  __('Button Radius Settings', 'the-house-forever-wins'),
                'panel'  => 'theme_options',
            )
        );

        $wp_customize->add_setting('card_border_radius', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            'card_border_radius',
            array(
                'type' => 'input',
                'label' => __('Card Border Radius', 'the-house-forever-wins'),
                'section' => 'border_radius_settings',
            )
        );

        $wp_customize->add_setting('card_border_radius_hover', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            'card_border_radius_hover',
            array(
                'type' => 'input',
                'label' => __('Card Border Radius Hover', 'the-house-forever-wins'),
                'section' => 'border_radius_settings',
            )
        );

        $wp_customize->add_setting('button_border_radius', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            'button_border_radius',
            array(
                'type' => 'input',
                'label' => __('Button Border Radius', 'the-house-forever-wins'),
                'section' => 'border_radius_settings',
            )
        );

        $wp_customize->add_setting('button_border_radius_hover', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            'button_border_radius_hover',
            array(
                'type' => 'input',
                'label' => __('Button Border Radius Hover', 'the-house-forever-wins'),
                'section' => 'border_radius_settings',
            )
        );

        $wp_customize->add_setting('input_border_radius', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            'input_border_radius',
            array(
                'type' => 'input',
                'label' => __('Input Border Radius', 'the-house-forever-wins'),
                'section' => 'border_radius_settings',
            )
        );

        $wp_customize->add_setting('input_border_radius_hover', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            'input_border_radius_hover',
            array(
                'type' => 'input',
                'label' => __('Input Border Radius Hover', 'the-house-forever-wins'),
                'section' => 'border_radius_settings',
            )
        );
    }

    function load_css()
    {
?>
        <style>
            input[type=submit],
            button,
            .button,
            .search-submit {
                border-radius: <?php if (!get_theme_mod('button_border_radius')) {
                                    echo 'var(--thfw-border-radius)';
                                } else {
                                    echo esc_html(get_theme_mod('button_border_radius'));
                                } ?>;
            }

            input[type=submit],
            button:hover,
            .button:hover,
            .search-submit:hover {
                border-radius: <?php if (!get_theme_mod('button_border_radius_hover')) {
                                    echo 'var(--thfw-border-radius)';
                                } else {
                                    echo esc_html(get_theme_mod('button_border_radius_hover'));
                                } ?>;
            }

            .card {
                border-radius: <?php if (!get_theme_mod('card_border_radius')) {
                                    echo 'var(--thfw-border-radius)';
                                } else {
                                    echo esc_html(get_theme_mod('card_border_radius'));
                                } ?>;
            }

            input,
            textarea {
                border-radius: <?php if (!get_theme_mod('input_border_radius')) {
                                    echo 'var(--thfw-border-radius)';
                                } else {
                                    echo esc_html(get_theme_mod('input_border_radius'));
                                } ?>;
            }

            input:hover,
            textarea:hover {
                border-radius: <?php if (!get_theme_mod('input_border_radius_hover')) {
                                    echo 'var(--thfw-border-radius)';
                                } else {
                                    echo esc_html(get_theme_mod('input_border_radius_hover'));
                                } ?>;

            }
        </style>
<?php
    }
}
