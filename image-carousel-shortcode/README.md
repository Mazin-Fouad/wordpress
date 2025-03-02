# Image Carousel Shortcode

This WordPress plugin allows users to create an image carousel using a shortcode. The carousel retrieves image paths based on the provided image IDs from the WordPress media library.

## Features

- Easy to use shortcode for embedding image carousels in posts or pages.
- Responsive design that adapts to different screen sizes.
- Smooth transitions and navigation between images.

## Installation

1. Download the plugin files.
2. Upload the `image-carousel-shortcode` folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.

## Usage

To use the image carousel, simply add the following shortcode to your post or page:

```
[image_carousel ids="1,2,3,4"]
```

Replace `1,2,3,4` with the actual image IDs from your WordPress media library.

## Customization

You can customize the appearance of the carousel by modifying the CSS in the `assets/css/carousel.css` file.

## JavaScript Functionality

The JavaScript functionality for the carousel is located in `assets/js/carousel.js`. This file handles the display of images, navigation, and animations.

## Uninstallation

To uninstall the plugin, simply deactivate it from the 'Plugins' menu in WordPress. The `uninstall.php` file will handle the cleanup process.

## Support

For support, please open an issue on the plugin's repository or contact the developer directly.