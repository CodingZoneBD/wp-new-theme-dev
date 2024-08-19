<?php

/*
* Enqueue CSS
*/
function theme_option_custom_css()
{
    wp_enqueue_style('theme_option_custom_css', get_template_directory_uri() . '/assets/css/theme_option_custom.css', array(), '1.0.0', 'all');
}
add_action('admin_enqueue_scripts', 'theme_option_custom_css');

function nsit_add_theme_pages()
{
    add_menu_page(
        'Theme Option fot Admin',
        'Theme Option',
        'manage_options',
        'nsit_theme_option',
        'nsit_theme_create_page',
        get_stylesheet_directory_uri() . '/assets/img/mini-logo.png',
        101
    );

    add_submenu_page('nsit_theme_option', 'Theme Option', 'General', 'manage_options', 'nsit_theme_option', 'nsit_theme_create_page',);

    add_submenu_page('nsit_theme_option', 'Theme Custom CSS', 'Custom CSS', 'manage_options', 'nsit_custom_css', 'nsit_theme_custom_css_page',);

    add_submenu_page('nsit_theme_option', 'Theme Custom JavaScript', 'Custom JS', 'manage_options', 'nsit_custom_js', 'nsit_theme_custom_js_page',);
}

add_action('admin_menu', 'nsit_add_theme_pages');


function nsit_theme_create_page()
{
    // Generating Theme option
    require_once(get_template_directory() . '/inc/theme-option/general.php');
}

function nsit_theme_custom_css_page()
{
    // Generating Theme option
    require_once(get_template_directory() . '/inc/theme-option/custom_css.php');
}

function nsit_theme_custom_js_page()
{
    // Generating Theme option
    require_once(get_template_directory() . '/inc/theme-option/custom_js.php');
}
