<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'wp_enqueue_scripts', 'FLChildTheme::enqueue_scripts', 1000 );

function _healthy_six_nations_assets() {
    wp_enqueue_style( '_vive_market_webfonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_healthy_six_nations-admin-stylesheet', get_stylesheet_directory_uri() . '/dist/css/admin.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_healthy_six_nations-stylesheet', get_stylesheet_directory_uri() . '/dist/css/bundle.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( '_healthy_six_nations_bundle-stylesheet', get_stylesheet_directory_uri() . '/dist/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( '_healthy_six_nations-scripts', get_stylesheet_directory_uri() . '/dist/js/bundle.js', array(), '1.0.0', true );

}

add_action('wp_enqueue_scripts', '_healthy_six_nations_assets', 1000 );