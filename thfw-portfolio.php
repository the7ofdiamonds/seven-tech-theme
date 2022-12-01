<?php

class THFWPortfolioPostType 
{
    public function __construct() {
        add_action( 'init', [$this, 'custom_post_type' ]);
        add_action( 'add_meta_boxes', array( $this, 'add_post_meta_boxes' ) );
        add_action( 'save_post', array( $this, 'save_post_project_type' ) );
        add_action( 'save_post', array( $this, 'save_post_project_button' ) );
        add_action( 'save_post', array( $this, 'save_post_project_link') );
        add_shortcode( 't7odt_thfw_portfolio_page', [$this, 'shortcode_archive_page'] );
    }

    public function custom_post_type (){
        $labels = array(
            'name' => 'Portfolio',
            'singular_name' => 'Project',
            'add_new' => 'Add Project',
            'all_items' => 'Portfolio',
            'add_new_item' => 'Add Project',
            'edit_item' => 'Edit Item',
            'new_item' => 'New Item',
            'view_item' => 'View Item',
            'search_item' => 'Search Portfolio',
            'not_found' => 'No Items Found',
            'not_found_in_trash' => 'No items found in trash',
            'parent_item_colon' => 'Parent Item'
        );
    
        $args = array(
            'labels' => $labels,
            'show_ui' => true,
            'menu_icon' => 'dashicons-portfolio',
            'show_in_rest' => true,
            'show_in_nav_menus' => true,
            'public' => true,
            'has_archive' => true,
            'publicly_queryable' => true,
            'query_var' => true,
            'rewrite' => array(
                'with_front' => false,
                'slug'       => 'portfolio'
            ),
                'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail',
                'custom-fields',
                'revisions',
                'page-attributes',
            ),
            'taxonomies' => array('category', 'post_tag'),
            'menu_position' => 6,
            'exclude_from_search' => false
        );

        register_post_type('portfolio', $args);
    }
    
    // add event date field to events post type
    public function add_post_meta_boxes() {
        add_meta_box(
            "post_metadata_project_type", // div id containing rendered fields
            "Project Type", // section heading displayed as text
            [$this, 'post_meta_box_project_type'], // callback function to render fields
            "portfolio", // name of post type on which to render fields
            "side", // location on the screen
            "low" // placement priority
        );
    
        add_meta_box(
            "post_metadata_project_button", // div id containing rendered fields
            "Project Button", // section heading displayed as text
            [$this, 'post_meta_box_project_button' ], // callback function to render fields
            "portfolio", // name of post type on which to render fields
            "normal", // location on the screen
            "low" // placement priority
        );
    
        add_meta_box(
            "post_metadata_project_link", // div id containing rendered fields
            "Project Link", // section heading displayed as text
            [$this, 'post_meta_box_project_link' ], // callback function to render fields
            "portfolio", // name of post type on which to render fields
            "normal", // location on the screen
            "low" // placement priority
        );
    }
    
    // save field value
    function save_post_project_type(){
        global $post;
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }
        // if ( get_post_status( $post->ID ) === 'auto-draft' ) {
        //     return;
        // }
        update_post_meta( $post->ID, "_project_type", sanitize_text_field( $_POST[ "_project_type" ] ) );
    }
    
    function save_post_project_button(){
        global $post;
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }
        // if ( get_post_status( $post->ID ) === 'auto-draft' ) {
        //     return;
        // }
        update_post_meta( $post->ID, "_project_button", sanitize_text_field( $_POST[ "_project_button" ] ) );
    }
    
    function save_post_project_link(){
        global $post;
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }
        // if ( get_post_status( $post->ID ) === 'auto-draft' ) {
        //     return;
        // }
        update_post_meta( $post->ID, "_project_link", sanitize_text_field( $_POST[ "_project_link" ] ) );
    }
    
    // callback function to render fields
    function post_meta_box_project_type(){
        global $post;
        $custom = get_post_custom( $post->ID );
        $projectType = $custom[ "_project_type" ][ 0 ];
    
        echo "<input type=\"text\" name=\"_project_type\" value=\"".$projectType."\" placeholder=\"Project Type\">";
    }
    
    function post_meta_box_project_button(){
        global $post;
        $custom = get_post_custom( $post->ID );
        $projectButton = $custom[ "_project_button"][ 0 ];
    
        echo "<input type=\"text\" name=\"_project_button\" value=\"".$projectButton."\" placeholder=\"Project Button\">";
    }
    
    function post_meta_box_project_link(){
        global $post;
        $custom = get_post_custom( $post->ID );
        $projectLink = $custom[ "_project_link"][ 0 ];
    
        echo "<input type=\"text\" name=\"_project_link\" value=\"".$projectLink."\" placeholder=\"Project Link\">";
    }
    
    function shortcode_archive_page() {

        ob_start();
        include 'includes/part-portfolio.php';
        return ob_get_clean();
    }
}