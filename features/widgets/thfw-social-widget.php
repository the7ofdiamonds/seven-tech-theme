<?php

class THFW_Social_Widget extends WP_widget {

    public function __construct() {

        $widget_ops = array(
            'classname' => 'thfw-social-widget',
            'description' => 'THFW Social Widget',
        );

        parent::__construct('thfw_social_widget', 'THFW Social Widget', $widget_ops);
    }

    public function form( $instance ) {
        echo '<p>Control this widget from here.</p>';
    }

    public function widget( $args, $instance) {
        $facebook = esc_attr( get_option( 'facebook_link'));
        $twitter = esc_attr( get_option( 'twitter_link'));
        $linkedin = esc_attr( get_option( 'linkedin_link'));
        $instagram = esc_attr( get_option( 'instagram_link'));
        
        echo $args['before_widget']; ?>
        <a href="<?php print $facebook ?>">
            <img src="wordpress/wp-content/uploads/2022/03/facebook-2048x2048.png" alt="">
        </a>
        <a href="<?php print $twitter ?>">
            <img src="wordpress/wp-content/uploads/2022/03/twitter-300x300.png" alt="">
        </a>
        <a href="<?php print $linkedin ?>">
            <img src="wordpress/wp-content/uploads/2022/04/7.svg" alt="">
        </a>
        <a href="<?php print $linkedin ?>">
            <img src="wordpress/wp-content/uploads/2022/04/linkedin.png" alt="">
        </a>
        <a href="<?php print $instagram ?>">
            <img src="wordpress/wp-content/uploads/2022/04/ig-300x300.png" alt="">
        </a>
        <?php
        echo $args['after_widget'];
    }
}