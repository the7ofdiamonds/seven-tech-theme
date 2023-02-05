<?php 
class THFW_Font_Customizer {

    public function __construct() {
        add_action( 'customize_register', array( $this, 'register_thfw_font_customize_section' ) );
    }

    public function register_thfw_font_customize_section( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->thfw_font_section( $wp_customize );
    }

    private function thfw_font_section( $wp_customize ) {

        $wp_customize->add_section( 'font_settings', array(
            'title'          => __('Font', 'the-house-forever-wins'),
            'description'    =>  __('Font options', 'the-house-forever-wins'),
            'priority'       => 1,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'panel'  => 'theme_options',
        ) );

        $wp_customize->add_setting('heading_link_font_family', array(
            'default' => "'Times New Roman', Times, serif",
            'sanitize_callback' => 'sanitize_text_field',
        ));
        
        $wp_customize->add_control('heading_link_font_family', 
            array(
                'type' => 'input',
                'label' => __( 'Heading & Link Font', 'the-house-forever-wins' ),
                'section' => 'font_settings',
            ) 
        );

        $wp_customize->add_setting('body_font_family', array(
            'default' => "'Anonymous Pro', monospace",
            'sanitize_callback' => 'sanitize_text_field',
        ));
        
        $wp_customize->add_control('body_font_family', 
            array(
                'type' => 'input',
                'label' => __( 'Body Font', 'the-house-forever-wins' ),
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
                    'label' => __( 'Link Color', 'the-house-forever-wins' ),
                    'section' => 'font_settings',
                    'settings' => 'link_text_color',
                ) 
            ) 
        );

        $wp_customize->add_setting('link_visited_text_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'link_visited_text_color', 
                array(
                    'label' => __( 'Visited Link Color', 'the-house-forever-wins' ),
                    'section' => 'font_settings',
                    'settings' => 'link_visited_text_color',
                ) 
            ) 
        );
    }
}