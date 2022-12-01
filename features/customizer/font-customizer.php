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
            'title'          => __('Font', 'thehouseforeverwins'),
            'description'    =>  __('Font options', 'thehouseforeverwins'),
            'priority'       => 1,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'panel'  => 'theme_options',
        ) );

        $wp_customize->add_setting('heading_link_font_family', array(
            'default' => "'Times New Roman', Times, serif",
        ));
        
        $wp_customize->add_control('heading_link_font_family', 
            array(
                'type' => 'input',
                'label' => __( 'Heading & Link Font', 'thehouseforeverwins' ),
                'section' => 'font_settings',
            ) 
        );

        $wp_customize->add_setting('body_font_family', array(
            'default' => "'Anonymous Pro', monospace",
        ));
        
        $wp_customize->add_control('body_font_family', 
            array(
                'type' => 'input',
                'label' => __( 'Body Font', 'thehouseforeverwins' ),
                'section' => 'font_settings',
            ) 
        );
    }
}