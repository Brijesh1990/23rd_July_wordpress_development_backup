<?php
/**
 * My Custom Theme functions file
 *
 * @package My Custom Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme version
 */
define('MY_CUSTOM_THEME_VERSION', '1.0.0');

/**
 * Theme setup
 */
function my_custom_theme_setup() {

    // Enable dynamic document title
    add_theme_support('title-tag');

     // create a custom dynamic navigation or menus
    register_nav_menus(
        array(
            'primary_menu'=> __('Primary Menu','my-custom-theme'), 
            'footer_menu'=> __('Footer Menu','my-custom-theme'),
            'sidebar_menu'=> __('Sidebar Menu','my-custom-theme')
        )
    ); 
}

add_action('after_setup_theme', 'my_custom_theme_setup');

/**
 * Enqueue styles and scripts
 */
function my_custom_theme_enqueue_assets() {

    // Main theme stylesheet
    wp_enqueue_style(
        'my-custom-theme-style',
        get_stylesheet_uri(),
        array(),
        MY_CUSTOM_THEME_VERSION
    );

    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        array(),
        '5.3.3'
    );

    // Bootstrap Icons
    wp_enqueue_style(
        'bootstrap-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
        array(),
        '1.11.3'
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.3',
        true
    );

    // Main js called 
     wp_enqueue_script(
        'mainjs',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        MY_CUSTOM_THEME_VERSION,
        true
    );


  
    

}

add_action('wp_enqueue_scripts', 'my_custom_theme_enqueue_assets');


/**
 * Include custom theme functions
 */
require get_template_directory() . '/inc/my-custom-theme.php';