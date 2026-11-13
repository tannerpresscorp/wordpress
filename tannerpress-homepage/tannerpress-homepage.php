<?php
/**
 * Plugin Name: Tannerpress Homepage
 * Description: Responsive homepage refinements for the Tannerpress block theme.
 * Version: 1.0.0
 * Requires at least: 6.4
 * Requires PHP: 7.4
 * License: Apache-2.0
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
add_action( 'wp_enqueue_scripts', function () {
    if ( ! is_front_page() ) {
        return;
    }
    wp_enqueue_style(
        'tannerpress-homepage',
        plugin_dir_url( __FILE__ ) . 'homepage.css',
        array(),
        '1.0.0'
    );
}, 20 );
