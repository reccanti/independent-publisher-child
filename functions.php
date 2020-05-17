<?php
    add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

    function enqueue_parent_styles() {
        wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    }

    /**
     * This function is modeled after independent_publisher_2_setup() in
     * Independent Publisher 2's functions.php.
     * 
     * It just sets up various things
     */
    function independent_publisher_child_setup() {
        register_nav_menus( array(
            'top-menu' => esc_html__( 'Top Menu' )
        ));
    }
    add_action( 'after_setup_theme', 'independent_publisher_child_setup' );

    /**
    * Load this Child theme's template tags.
    */
    require get_stylesheet_directory() . '/inc/child-template-tags.php';
?>