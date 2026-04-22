<?php

if (!defined('ABSPATH')) exit;

/**
 * Enqueue theme styles and scripts for the front-end
 */
function theme_scripts_front() {
    // Load main compiled CSS file (all styles)
    wp_enqueue_style( 'all', THEME . '/dist/s/css/all.css' );

    // Load helper CSS file (utility/helper classes)
	wp_enqueue_style( 'helper', THEME . '/dist/s/css/helper.css' );

    // Load main JavaScript file with jQuery as a dependency
    wp_enqueue_script('main', THEME . '/dist/s/js/main.js', array('jquery'), '1.0', true);
}

// Hook the function into WordPress front-end script loading
add_action ( 'wp_enqueue_scripts', 'theme_scripts_front' );

function theme_gutenberg_scripts() {
    // Load main compiled CSS file (all styles)
    // wp_enqueue_style( 'all', THEME . '/dist/s/css/all.css' );

    // Load helper CSS file (utility/helper classes)
	//wp_enqueue_style( 'helper', THEME . '/dist/s/css/helper.css' );

    // Load main JavaScript file with jQuery as a dependency
    wp_enqueue_script('blocks', THEME . '/dist/s/js/main.js', array('jquery'), '1.0', true);
}

add_action ( 'enqueue_block_assets', 'theme_gutenberg_scripts' );

function theme_admin_scripts() {
    // Load main compiled CSS file (all styles)
    wp_enqueue_style( 'admin_helper', THEME . '/inc/admin/admin.css' );
}

add_action ( 'admin_head', 'theme_admin_scripts' );