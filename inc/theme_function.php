<?php
// Theme Register Function

function nsit_customizar_register($wp_customize)
{
    // Header Section
    $wp_customize->add_section('nsit_header_area', array(
        'title' => __('Header Area', 'artseaiartgenerator'),
        'description' => __('You can change the header section', 'artseaiartgenerator'),
    ));

    $wp_customize->add_setting('nsit_logo', array(
        'default' => get_bloginfo('template_directory') . '/assets/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nsit_logo', array(
        'label' => __('Logo Upload', 'artseaiartgenerator'),
        'description' => __('You can change your logo', 'artseaiartgenerator'),
        'section' => 'nsit_header_area',
        'settings' => 'nsit_logo',
    )));


    // Footer Section
    $wp_customize->add_section('nsit_footer_option', array(
        'title' => __('Footer Area', 'artseaiartgenerator'),
        'description' => __('You can change the footer settings', 'artseaiartgenerator'),
    ));

    $wp_customize->add_setting('nsit_copyright_section', array(
        'default' => '&copy; Copyright 2024. All Rights Reserved.',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nsit_copyright_section', array(
        'label' => __('Copyright text', 'artseaiartgenerator'),
        'description' => __('You can change the footer copyright', 'artseaiartgenerator'),
        'settings' => 'nsit_copyright_section',
        'section' => 'nsit_footer_option',
    )));


    // Menu Function
    $wp_customize->add_section('nsit_menu_option', array(
        'title' => __('Menu Position Option', 'artseaiartgenerator'),
        'description' => __('You can change the menu position option do it', 'artseaiartgenerator'),
    ));

    $wp_customize->add_setting('nsit_menu_position', array(
        'default' => 'right_menu',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nsit_menu_position', array(
        'label' => __('Menu Position', 'artseaiartgenerator'),
        'description' => __('You can change the menu position', 'artseaiartgenerator'),
        'section' => 'nsit_menu_option',
        'settings' => 'nsit_menu_position',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => __('Left Menu', 'artseaiartgenerator'),
            'right_menu' => __('Right Menu', 'artseaiartgenerator'),
            'center_menu' => __('Center Menu', 'artseaiartgenerator'),
        )
    )));

    // Theme Color
    $wp_customize->add_section('nsit_theme_color', array(
        'title' => __('Theme Color', 'artseaiartgenerator'),
        'description' => __('You can change the theme color', 'artseaiartgenerator'),
    ));

    $wp_customize->add_setting('nsit_bg_color', array(
        'default' => '#ffffff',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nsit_bg_color', array(
        'label' => __('Background Color', 'artseaiartgenerator'),
        'description' => __('You can change the background color', 'artseaiartgenerator'),
        'section' => 'nsit_theme_color',
        'settings' => 'nsit_bg_color',
    )));

    $wp_customize->add_setting('nsit_primary_color', array(
        'default' => '#ea1a70',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nsit_primary_color', array(
        'label' => __('Primary Color', 'artseaiartgenerator'),
        'description' => __('You can change the link color', 'artseaiartgenerator'),
        'section' => 'nsit_theme_color',
        'settings' => 'nsit_primary_color',
    )));
}

add_action('customize_register', 'nsit_customizar_register');


function nsit_theme_color_cus()
{
?>
    <style>
        body {
            background: <?php echo get_theme_mod('nsit_bg_color'); ?>
        }
        :root {
            --primary: <?php echo get_theme_mod('nsit_primary_color'); ?>
        }
    </style>
<?php
}
add_action('wp_head', 'nsit_theme_color_cus');
