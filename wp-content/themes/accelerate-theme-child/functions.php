<?php
/**
 * Accelerate Marketing Child functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */


//ENQUEUE SCRIPTS AND STYLES

function accelerate_child_scripts(){
    wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
    wp_enqueue_style('accelerate-child-google-fonts', '//fonts.googleapis.com/css?family=Londrina+Solid:400,900');

}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts', 'accelerate-child-google-fonts');


//CUSTOM POST TYPES FUNTION


function create_custom_post_types() {
    //create case study post types
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => __( 'Case Studies' ),
                'singular_name' => __( 'Case Study' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'case-studies' ),
        )
    );

    //create about page services post types
    register_post_type( 'about_us',
        array(
            'labels' => array(
                'name' => __( 'About Us' ),
                'singular_name' => __( 'About Us' )
            ),
            'public' => true,
        )
    );    
}
add_action( 'init', 'create_custom_post_types' );

