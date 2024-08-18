jQuery(document).ready(function () {
    jQuery(".slider").bxSlider({
        mode: 'fade',
        captions: true,
    });
    jQuery(".owl-carousel").owlCarousel();
    jQuery("#owl-slider").owlCarousel({
        autoplay: true,
        items: 1,
    });
});