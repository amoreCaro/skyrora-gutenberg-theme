<?php

if (!defined('ABSPATH')) exit;

/**
 * Register custom Gutenberg blocks using ACF.
 *
 * Checks whether ACF Pro is active and the block registration
 * function exists, then registers custom theme blocks.
 *
 */
function theme_acf_blocks() {

    // Check if ACF block registration is available
    if (function_exists('acf_register_block')) {

        /**
         * Banner block
         * Displays a banner section block.
         */
        acf_register_block(array(
            'name'            => 'banner',
            'title'           => 'Block - Banner',
            'category'        => 'awenn',
            'render_template' => PATH . '/inc/blocks/banner/preview.php',
            'mode'            => 'preview',
            'icon'            => 'admin-links',
            'keywords'        => array('banner'),
        ));

        /**
         * Dedicated block
         * Displays a products section block.
         */
        acf_register_block(array(
            'name'            => 'products',
            'title'           => 'Block - Dedicated',
            'category'        => 'awenn',
            'render_template' => PATH . '/inc/blocks/dedicated/preview.php',
            'mode'            => 'preview',
            'icon'            => 'admin-links',
            'keywords'        => array('products', 'shop'),
        ));
    }
}

// Register blocks when ACF is initialized
add_action('acf/init', 'theme_acf_blocks');