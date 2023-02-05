<?php
class THFW_Buttons_Customizer {

    public function __construct() {
        add_action( 'customize_register', array( $this, 'register_thfw_button_customize_section' ) );
    }
    
    public function register_thfw_button_customize_section( $wp_customize ) {
        $this->thfw_button_section( $wp_customize );
    }
    
    private function thfw_button_section( $wp_customize ) {
    
        $wp_customize->add_section( 'button_settings', 
            array(
                'priority'       => 7,
                'capability'     => 'edit_theme_options',
                'theme_supports' => '',
                'title'          => __('Button', 'the-house-forever-wins'),
                'description'    =>  __('Button Options', 'the-house-forever-wins'),
                'panel'  => 'theme_options',
            ) 
        );
    
        $wp_customize->add_setting('button_border_radius', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));
        
        $wp_customize->add_control('button_border_radius', 
            array(
                'type' => 'input',
                'label' => __( 'Button Border Radius', 'the-house-forever-wins' ),
                'section' => 'button_settings',
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
                    'label' => __( 'Button Background Color', 'the-house-forever-wins' ),
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
                    'label' => __( 'Button Text Color', 'the-house-forever-wins' ),
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
                    'label' => __( 'Button Background Hover Color', 'the-house-forever-wins' ),
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
                    'label' => __( 'Button Text Hover Color', 'the-house-forever-wins' ),
                    'section' => 'button_settings',
                    'settings' => 'button_text_hover_color',
                ) 
            ) 
        );
    }
}