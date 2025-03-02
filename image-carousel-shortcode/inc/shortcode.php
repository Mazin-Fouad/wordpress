<?php
function image_carousel_shortcode($atts) {
    $atts = shortcode_atts(array(
        'ids' => '',
    ), $atts, 'image_carousel');

    if (empty($atts['ids'])) {
        return '<p>No images provided.</p>';
    }

    $ids = explode(',', $atts['ids']);
    $images = array();

    foreach ($ids as $id) {
        $image = wp_get_attachment_image_src($id, 'full');
        if ($image) {
            $images[] = $image[0];
        }
    }

    if (empty($images)) {
        return '<p>No valid images found.</p>';
    }

    ob_start();
    ?>
    <div class="image-carousel">
        <?php foreach ($images as $image): ?>
            <div class="carousel-item">
                <img src="<?php echo esc_url($image); ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
}

function register_image_carousel_shortcode() {
    add_shortcode('image_carousel', 'image_carousel_shortcode');
}
add_action('init', 'register_image_carousel_shortcode');
?>