<?php

function nsit_css_js_files_call()
{
    // Style
    wp_enqueue_style('nsit-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.3', 'all');
    wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4', 'all');
    wp_register_style('owl-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '2.3.4', 'all');
    wp_register_style('bxslider', get_template_directory_uri() . '/assets/css/bxslider.css', array(), '4.2.17', 'all');
    wp_register_style('slicknav', get_template_directory_uri().'/assets/css/slicknav.css', array(), '1.0.1', 'all');
    wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all');
    wp_register_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), '1.0.1', 'all');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('owl-carousel');
    wp_enqueue_style('owl-theme-default');
    wp_enqueue_style('bxslider');
    wp_enqueue_style('slicknav');
    wp_enqueue_style('custom');
    wp_enqueue_style('responsive');

    // jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array(), '5.3.3', true);
    wp_enqueue_script('bxslider', get_template_directory_uri() . '/assets/js/bxslider.min.js', array(), '5.3.3', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '2.3.4', 'true');
    wp_enqueue_script('slicknav', get_template_directory_uri().'/assets/js/slicknav.js', array(), '1.0.1', 'true' );
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}


add_action(
    'wp_enqueue_scripts',
    'nsit_css_js_files_call',
);

// Google Fonts Enqueue
function nsit_add_google_fonts()
{
    wp_enqueue_style('ali_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;700&display=swap', false);
}

add_action(
    'wp_enqueue_scripts',
    'nsit_add_google_fonts',
);

// Desicon Not Showing fixing
function deshicon_load_issue()
{
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'deshicon_load_issue');
