// This file contains the JavaScript functionality for the image carousel, handling the display of images, navigation, and any animations.

document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.querySelector('.image-carousel');
    const images = carousel.querySelectorAll('img');
    const nextButton = carousel.querySelector('.carousel-next');
    const prevButton = carousel.querySelector('.carousel-prev');
    let currentIndex = 0;

    function showImage(index) {
        images.forEach((img, i) => {
            img.style.display = (i === index) ? 'block' : 'none';
        });
    }

    function nextImage() {
        currentIndex = (currentIndex + 1) % images.length;
        showImage(currentIndex);
    }

    function prevImage() {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(currentIndex);
    }

    nextButton.addEventListener('click', nextImage);
    prevButton.addEventListener('click', prevImage);

    showImage(currentIndex);
});