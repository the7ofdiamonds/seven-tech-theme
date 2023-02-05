<?php
class THFW_Header_Customizer {

	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_thfw_header_customize_settings' ) );
	}

	public function register_thfw_header_customize_settings( $wp_customize ) {
        $this->thfw_header_callout_settings( $wp_customize );
    }
      
    private function thfw_header_callout_settings( $wp_customize ) {
        
        $wp_customize->add_panel( 'theme_options', 
            array(
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'theme_supports' => '',
                'title'          => __('Theme Options', 'the-house-forever-wins'),
                'description'    => __('Header options', 'the-house-forever-wins'),
            ) 
        );

        $wp_customize->add_section( 'header_settings', 
            array(
                'priority'       => 3,
                'capability'     => 'edit_theme_options',
                'theme_supports' => '',
                'title'          => __('Header', 'the-house-forever-wins'),
                'description'    =>  __('Header Options', 'the-house-forever-wins'),
                'panel'  => 'theme_options',
            ) 
        );
        
        $wp_customize->add_setting('nav_background_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));

        $wp_customize->add_control( 
                new WP_Customize_Color_Control( 
                $wp_customize, 
                'nav_background_color', 
                array(
                    'label' => __( 'Navigation Background Color', 'the-house-forever-wins' ),
                    'section' => 'header_settings',
                    'settings' => 'nav_background_color',
                    'sanitize_callback' => 'sanitize_text_field',
                )
            ) 
        );

        $wp_customize->add_setting('nav_text_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'nav_text_color', 
                array(
                    'label' => __( 'Navigation Text Color', 'the-house-forever-wins' ),
                    'section' => 'header_settings',
                    'settings' => 'nav_text_color',
                    'sanitize_callback' => 'sanitize_text_field',
                ) 
            ) 
        );

        $wp_customize->add_setting('listitem_background_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'listitem_background_color', 
                array(
                    'label' => __( 'Navigation Background Hover Color', 'the-house-forever-wins' ),
                    'section' => 'header_settings',
                    'settings' => 'listitem_background_color',
                    'sanitize_callback' => 'sanitize_text_field',
                ) 
            ) 
        );

        $wp_customize->add_setting('listitem_background_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'listitem_background_color', 
                array(
                    'label' => __( 'Navigation Background Hover Color', 'the-house-forever-wins' ),
                    'section' => 'header_settings',
                    'settings' => 'listitem_background_color',
                    'sanitize_callback' => 'sanitize_text_field',
                ) 
            ) 
        );

        $wp_customize->add_setting('listitem_link_text_hover_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'listitem_link_text_hover_color', 
                array(
                    'label' => __( 'Navigation Text Hover Color', 'the-house-forever-wins' ),
                    'section' => 'header_settings',
                    'settings' => 'listitem_link_text_hover_color',
                    'sanitize_callback' => 'sanitize_text_field',
                ) 
            ) 
        );

        $wp_customize->add_setting('hamburger_background_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'hamburger_background_color', 
                array(
                    'label' => __( 'Hamburger Menu Background', 'the-house-forever-wins' ),
                    'section' => 'header_settings',
                    'settings' => 'hamburger_background_color',
                    'sanitize_callback' => 'sanitize_text_field',
                ) 
            ) 
        );

        $wp_customize->add_setting('hamburger_text_color', array(
            'sanitize_callback' => 'sanitize_text_field',
        ));
    
        $wp_customize->add_control( 
            new WP_Customize_Color_Control( 
            $wp_customize, 
            'hamburger_text_color', 
                array(
                    'label' => __( 'Hamburger Menu Text', 'the-house-forever-wins' ),
                    'section' => 'header_settings',
                    'settings' => 'hamburger_text_color',
                    'sanitize_callback' => 'sanitize_text_field',
                ) 
            ) 
        );
    }
}
