<?php
/**
 * Theme functions for HAZ LO TUYO Theme.
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue parent and child styles.
 */
function hlt_enqueue_theme_styles(): void
{
    $theme = wp_get_theme();

    wp_enqueue_style(
        'twentytwentyfive-style',
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme('twentytwentyfive')->get('Version')
    );

    wp_enqueue_style(
        'hlt-child-style',
        get_stylesheet_uri(),
        array('twentytwentyfive-style'),
        $theme->get('Version')
    );

    wp_enqueue_style(
        'hlt-custom-style',
        get_stylesheet_directory_uri() . '/assets/hlt.css',
        array('hlt-child-style'),
        $theme->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'hlt_enqueue_theme_styles');
