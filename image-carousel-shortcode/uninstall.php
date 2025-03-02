<?php
// If uninstall not called from WordPress, exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Clean up options or settings stored in the database
delete_option('image_carousel_settings');
delete_option('image_carousel_version');
?>