<?php 
class THFW_Body_Customizer {

    public function __construct() {
        add_action( 'customize_register', array( $this, 'register_thfw_body_customize_section' ) );
    }

    public function register_thfw_body_customize_section( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->thfw_body_section( $wp_customize );
    }

    private function thfw_body_section( $wp_customize ) {

        $wp_customize->add_section( 'body_settings', array(
            'title'          => __('Body', 'thehouseforeverwins'),
            'description'    =>  __('Body options', 'thehouseforeverwins'),
            'priority'       => 4,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'panel'  => 'theme_options',
        ) );

        //Body Settings
        $wp_customize->add_setting('body_background_color');
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'body_background_color', 
                array(
                    'label' => __( 'Body Background Color', 'thehouseforeverwins' ),
                    'section' => 'body_settings',
                    'settings' => 'body_background_color',
                ) 
            ) 
        );

        $wp_customize->add_setting('link_visited_text_color');
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'link_visited_text_color', 
                array(
                    'label' => __( 'Visited Link Color', 'thehouseforeverwins' ),
                    'section' => 'body_settings',
                    'settings' => 'link_visited_text_color',
                ) 
            ) 
        );

    }
}