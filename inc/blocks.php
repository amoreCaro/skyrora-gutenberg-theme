<?php 

if (!defined('ABSPATH')) exit;

function theme_acf_blocks() {

    if (function_exists('acf_register_block')) {

        acf_register_block(array(
            'name'            => 'banner',
            'title'           => 'Block - Banner',
            'category'        => 'awenn',
            'render_template' => PATH . '/inc/blocks/banner/preview.php',
            'mode'            => 'preview',
            'icon'            => 'admin-links', 
            'keywords'        => array('breadcrumbs'),
        ));

    }
}

add_action('acf/init', 'theme_acf_blocks');