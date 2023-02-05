<?php 
class THFW_Card_Customizer {

    public function __construct() {
        add_action( 'customize_register', array( $this, 'register_thfw_card_customize_section' ) );
    }

    public function register_thfw_card_customize_section( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->thfw_card_section( $wp_customize );
    }

    private function thfw_card_section( $wp_customize ) {

        $wp_customize->add_section( 'card_settings', array(
            'title'          => __('Card', 'the-house-forever-wins'),
            'description'    =>  __('Card Options', 'the-house-forever-wins'),
            'priority'       => 6,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'panel'  => 'theme_options',
        ) );

        $wp_customize->add_setting('card_background_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'card_background_color', 
                array(
                    'label' => __( 'Card Background Color', 'the-house-forever-wins' ),
                    'section' => 'card_settings',
                    'settings' => 'card_background_color',
                ) 
            ) 
        );

        $wp_customize->add_setting('card_text_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'card_text_color', 
                array(
                    'label' => __( 'Card Text Color', 'the-house-forever-wins' ),
                    'section' => 'card_settings',
                    'settings' => 'card_text_color',
                ) 
            ) 
        );
    }
}