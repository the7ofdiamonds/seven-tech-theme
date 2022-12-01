<?php 
class THFW_Footer_Customizer {

    public function __construct() {
        add_action( 'customize_register', array( $this, 'register_thfw_footer_customize_section' ) );
    }

    public function register_thfw_footer_customize_section( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->thfw_footer_section( $wp_customize );
    }

    private function thfw_footer_section( $wp_customize ) {

        $wp_customize->add_section( 'footer_settings', array(
            'title'          => __('Footer', 'thehouseforeverwins'),
            'description'    =>  __('Footer Options', 'thehouseforeverwins'),
            'priority'       => 8,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'panel'  => 'theme_options',
        ) );

        //Footer Settings
        $wp_customize->add_setting('footer_background_color');

        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'footer_background_color', 
                array(
                    'label' => __( 'Footer Background Color', 'thehouseforeverwins' ),
                    'section' => 'footer_settings',
                    'settings' => 'footer_background_color',
                ) 
            ) 
        );

        $wp_customize->add_setting('footer_text_color');

        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'footer_text_color', 
                array(
                    'label' => __( 'Footer Text Color', 'thehouseforeverwins' ),
                    'section' => 'footer_settings',
                    'settings' => 'footer_text_color',
                ) 
            ) 
        );

        $wp_customize->add_setting('footer_link_color');

        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'footer_link_color', 
                array(
                    'label' => __( 'Footer Link Color', 'thehouseforeverwins' ),
                    'section' => 'footer_settings',
                    'settings' => 'footer_link_color',
                ) 
            ) 
        );
    }
}