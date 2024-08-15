<?php

/**
 * Theme Functions
 */

// Theme title

add_theme_support('title-tag');


// Theme css and jQuery files calling
function nsit_css_js_files_call()
{
    // Style
    wp_enqueue_style('nsit-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.3', 'all');
    wp_register_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    // jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array(), '5.3.3', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '5.3.3', true);
}


add_action(
    'wp_enqueue_scripts',
    'nsit_css_js_files_call',
);

// Theme Function
function nsit_customactizar_register($wp_customize)
{
    $wp_customize->add_section('nsit_header_section', array(
        'title' => __('Header Section', 'artseaiartgenerator'),
        'description' => __('You can change the header section', 'artseaiartgenerator'),
    ));

    $wp_customize->add_setting('nsit_logo', array(
        'default' => get_bloginfo( 'template_directory','/assets/img/logo.png'),
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nsit_logo', array(
        'label' => __('Logo', 'artseaiartgenerator'),
        'section' => 'nsit_header_section',
        'settings' => 'nsit_logo',
    )));
}

add_action('customize_register', 'nsit_customactizar_register');