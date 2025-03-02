<?php
/**
 * Image Carousel Shortcode Plugin
 *
 * This file serves as a fallback template for the plugin, ensuring compatibility with WordPress.
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Include the shortcode functionality
require_once plugin_dir_path( __FILE__ ) . 'inc/shortcode.php';
?>