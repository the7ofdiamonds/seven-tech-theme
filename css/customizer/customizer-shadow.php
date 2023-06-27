<?php
class THFW_Customizer_Shadow
{

    public function __construct()
    {
        add_action('customize_register', array($this, 'register_thfw_shadow_customize_settings'));
        add_action('wp_head', [$this, 'load_css']);
    }

    public function register_thfw_shadow_customize_settings($wp_customize)
    {
        $this->thfw_shadow_callout_settings($wp_customize);
    }

    private function thfw_shadow_callout_settings($wp_customize)
    {

        $wp_customize->add_section('shadow_settings', array(
            'title'          => __('Shadow', 'the-house-forever-wins'),
            'description'    =>  __('Shadow options', 'the-house-forever-wins'),
            'priority'       => 7,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'panel'  => 'theme_options',
        ));

        $wp_customize->add_setting('header_box_shadow', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            'header_box_shadow',
            array(
                'type' => 'input',
                'label' => __('Header Shadow', 'the-house-forever-wins'),
                'section' => 'shadow_settings',
            )
        );

        $wp_customize->add_setting('card_box_shadow', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            'card_box_shadow',
            array(
                'type' => 'input',
                'label' => __('Card Shadow', 'the-house-forever-wins'),
                'section' => 'shadow_settings',
            )
        );

        $wp_customize->add_setting('button_box_shadow', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            'button_box_shadow',
            array(
                'type' => 'input',
                'label' => __('Button Shadow', 'the-house-forever-wins'),
                'section' => 'shadow_settings',
            )
        );

        $wp_customize->add_setting('input_box_shadow', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            'input_box_shadow',
            array(
                'type' => 'input',
                'label' => __('Input Shadow', 'the-house-forever-wins'),
                'section' => 'shadow_settings',
            )
        );
    }

    function load_css()
    {
?>
        <style>
            header {
                box-shadow: <?php
                            if (!get_theme_mod('header_box_shadow')) {
                                echo 'var(--thfw-box-shadow)';
                            } else {
                                echo esc_html(get_theme_mod('header_box_shadow'));
                            } ?>;
            }

            .card {
                box-shadow: <?php
                            if (!get_theme_mod('card_box_shadow')) {
                                echo 'var(--thfw-box-shadow)';
                            } else {
                                echo esc_html(get_theme_mod('card_box_shadow'));
                            } ?>;
            }

            input[type=submit],
            button {
                box-shadow: <?php
                            if (!get_theme_mod('button_box_shadow')) {
                                echo 'var(--thfw-box-shadow)';
                            } else {
                                echo esc_html(get_theme_mod('button_box_shadow'));
                            } ?>;
            }

            input[type=submit]:hover,
            button:hover {
                box-shadow: unset;
            }

            input,
            textarea {
                box-shadow: <?php
                            if (!get_theme_mod('input_box_shadow')) {
                                echo 'var(--thfw-box-shadow-input)';
                            } else {
                                echo esc_html(get_theme_mod('input_box_shadow'));
                            } ?>;
            }
        </style>
<?php
    }
}
