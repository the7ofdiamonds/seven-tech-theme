<?php
class THFW_Shadow_Customizer {

	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_thfw_shadow_customize_settings' ) );
	}

	public function register_thfw_shadow_customize_settings( $wp_customize ) {
        $this->thfw_shadow_callout_settings( $wp_customize );
    }
      
    private function thfw_shadow_callout_settings( $wp_customize ) {

        $wp_customize->add_section( 'shadow_settings', array(
            'title'          => __('Shadow', 'thehouseforeverwins'),
            'description'    =>  __('Shadow options', 'thehouseforeverwins'),
            'priority'       => 2,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'panel'  => 'theme_options',
        ) );

        $wp_customize->add_setting('box_shadow_color');
        
        $wp_customize->add_control('box_shadow_color', 
            array(
                'type' => 'input',
                'label' => __( 'Box Shadow Color', 'thehouseforeverwins' ),
                'section' => 'shadow_settings',
            ) 
        );

        $wp_customize->add_setting('box_shadow');
        
        $wp_customize->add_control('box_shadow', 
            array(
                'type' => 'input',
                'label' => __( 'Box Shadow', 'thehouseforeverwins' ),
                'section' => 'shadow_settings',
            ) 
        );

        $wp_customize->add_setting('box_shadow_hover_color');
        
        $wp_customize->add_control('box_shadow_hover_color', 
            array(
                'type' => 'input',
                'label' => __( 'Box Shadow Hover Color', 'thehouseforeverwins' ),
                'section' => 'shadow_settings',
            ) 
        );

        $wp_customize->add_setting('box_shadow_hover');
        
        $wp_customize->add_control('box_shadow_hover', 
            array(
                'type' => 'input',
                'label' => __( 'Box Shadow Hover', 'thehouseforeverwins' ),
                'section' => 'shadow_settings',
            ) 
        );
    }
}
