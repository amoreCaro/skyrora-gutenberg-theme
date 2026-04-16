<?php

if (!defined('ABSPATH')) exit;

function theme_scripts_front() {
    wp_enqueue_style( 'all', THEME . '/dist/s/css/all.css' );
	wp_enqueue_style( 'helper', THEME . '/dist/s/css/helper.css' );

    wp_enqueue_script('main', THEME . '/dist/s/js/main.js', array('jquery'), '1.0', true);

}
add_action ( 'wp_enqueue_scripts', 'theme_scripts_front' );