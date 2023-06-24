<?php
class THFW_Customizer_Buttons
{

    public function __construct()
    {
        add_action('customize_register', array($this, 'register_customizer_section'));
        add_action('wp_head', [$this, 'load_css']);
    }

    public function register_customizer_section($wp_customize)
    {
        $this->thfw_button_section($wp_customize);
    }

    private function thfw_button_section($wp_customize)
    {

        $wp_customize->add_section(
            'button_settings',
            array(
                'priority'       => 5,
                'capability'     => 'edit_theme_options',
                'theme_supports' => '',
                'title'          => __('Button', 'the-house-forever-wins'),
                'description'    =>  __('Button Color Options', 'the-house-forever-wins'),
                'panel'  => 'theme_options',
            )
        );

        //Button Settings
        $wp_customize->add_setting('button_background_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'button_background_color',
                array(
                    'label' => __('Button Background Color', 'the-house-forever-wins'),
                    'section' => 'button_settings',
                    'settings' => 'button_background_color',
                )
            )
        );

        $wp_customize->add_setting('button_text_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'button_text_color',
                array(
                    'label' => __('Button Text Color', 'the-house-forever-wins'),
                    'section' => 'button_settings',
                    'settings' => 'button_text_color',
                )
            )
        );

        $wp_customize->add_setting('button_background_hover_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'button_background_hover_color',
                array(
                    'label' => __('Button Background Hover Color', 'the-house-forever-wins'),
                    'section' => 'button_settings',
                    'settings' => 'button_background_hover_color',
                )
            )
        );

        $wp_customize->add_setting('button_text_hover_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'button_text_hover_color',
                array(
                    'label' => __('Button Text Hover Color', 'the-house-forever-wins'),
                    'section' => 'button_settings',
                    'settings' => 'button_text_hover_color',
                )
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
                background-color: <?php if (!get_theme_mod('button_background_color')) {
                                        echo 'var(--thfw-color-secondary)';
                                    } else {
                                        echo esc_html(get_theme_mod('button_background_color'));
                                    } ?>;
                color: <?php if (!get_theme_mod('button_text_color')) {
                            echo 'var(--thfw-color-primary)';
                        } else {
                            echo esc_html(get_theme_mod('button_text_color'));
                        } ?>;
            }
            
            input[type=submit],
            button:hover,
            .button:hover,
            .search-submit:hover {
                background-color: <?php if (!get_theme_mod('button_background_hover_color')) {
                                        echo 'var(--thfw-color-secondary)';
                                    } else {
                                        echo esc_html(get_theme_mod('button_background_hover_color'));
                                    } ?>;
                color: <?php if (!get_theme_mod('button_text_hover_color')) {
                            echo 'var(--thfw-color-primary)';
                        } else {
                            echo esc_html(get_theme_mod('button_text_hover_color'));
                        } ?>;
            }
        </style>
<?php
    }
}
