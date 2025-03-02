<?php
/**
 * Plugin Name: Image Carousel Shortcode
 * Description: A simple plugin to create an image carousel using a shortcode.
 * Version: 1.0
 * Author: Your Name
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin directory
define('ICS_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Include necessary files
require_once ICS_PLUGIN_DIR . 'inc/shortcode.php';

// Enqueue styles and scripts
function ics_enqueue_assets() {
    wp_enqueue_style('carousel-css', plugins_url('assets/css/carousel.css', __FILE__));
    wp_enqueue_script('carousel-js', plugins_url('assets/js/carousel.js', __FILE__), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'ics_enqueue_assets');
?>