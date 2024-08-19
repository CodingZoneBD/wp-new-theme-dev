<?php
// Theme Register Function

function nsit_customizar_register($wp_customize)
{
    // Header Section
    $wp_customize->add_section('nsit_header_area', array(
        'title' => __('Header Area', 'artse-ai-art-generator'),
        'description' => __('You can change the header section', 'artse-ai-art-generator'),
    ));

    $wp_customize->add_setting('nsit_logo', array(
        'default' => esc_url(get_template_directory_uri()) . '/assets/assets/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nsit_logo', array(
        'label' => __('Logo Upload', 'artse-ai-art-generator'),
        'description' => __('You can change your logo', 'artse-ai-art-generator'),
        'section' => 'nsit_header_area',
        'settings' => 'nsit_logo',
    )));


    // Footer Section
    $wp_customize->add_section('nsit_footer_option', array(
        'title' => __('Footer Area', 'artse-ai-art-generator'),
        'description' => __('You can change the footer settings', 'artse-ai-art-generator'),
    ));

    $wp_customize->add_setting('nsit_copyright_section', array(
        'default' => '&copy; Copyright 2024. All Rights Reserved.',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nsit_copyright_section', array(
        'label' => __('Copyright text', 'artse-ai-art-generator'),
        'description' => __('You can change the footer copyright', 'artse-ai-art-generator'),
        'settings' => 'nsit_copyright_section',
        'section' => 'nsit_footer_option',
    )));


    // Menu Function
    $wp_customize->add_section('nsit_menu_option', array(
        'title' => __('Menu Position Option', 'artse-ai-art-generator'),
        'description' => __('You can change the menu position option do it', 'artse-ai-art-generator'),
    ));

    $wp_customize->add_setting('nsit_menu_position', array(
        'default' => 'right_menu',
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'nsit_menu_position', array(
        'label' => __('Menu Position', 'artse-ai-art-generator'),
        'description' => __('You can change the menu position', 'artse-ai-art-generator'),
        'section' => 'nsit_menu_option',
        'settings' => 'nsit_menu_position',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => __('Left Menu', 'artse-ai-art-generator'),
            'right_menu' => __('Right Menu', 'artse-ai-art-generator'),
            'center_menu' => __('Center Menu', 'artse-ai-art-generator'),
        )
    )));

    // Theme Color
    $wp_customize->add_section('nsit_theme_color', array(
        'title' => __('Theme Color', 'artse-ai-art-generator'),
        'description' => __('You can change the theme color', 'artse-ai-art-generator'),
    ));

    $wp_customize->add_setting('nsit_bg_color', array(
        'default' => '#ffffff',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nsit_bg_color', array(
        'label' => __('Background Color', 'artse-ai-art-generator'),
        'description' => __('You can change the background color', 'artse-ai-art-generator'),
        'section' => 'nsit_theme_color',
        'settings' => 'nsit_bg_color',
    )));

    $wp_customize->add_setting('nsit_primary_color', array(
        'default' => '#ea1a70',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'nsit_primary_color', array(
        'label' => __('Primary Color', 'artse-ai-art-generator'),
        'description' => __('You can change the link color', 'artse-ai-art-generator'),
        'section' => 'nsit_theme_color',
        'settings' => 'nsit_primary_color',
    )));

    // Theme custom login page
    $wp_customize->add_section('custom_login', array(
        'title' => __('Custom Login', 'artse-ai-art-generator'),
        'description' => 'If need you can change your theme custom login info.',
    ));

    $wp_customize->add_setting('custom_login_logo', array(
        'default' => get_template_directory_uri() . '/assets/img/logo.png',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_login_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you interested to change or update your logo you can do it.',
        'setting' => 'custom_login_logo',
        'section' => 'custom_login',
    )));

    $wp_customize->add_setting('custom_login_bg', array(
        'default' => get_template_directory_uri() . '/assets/img/login.jpg',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_login_bg', array(
        'label' => 'Background Upload',
        'description' => 'If you interested to change or update your background image you can do it.',
        'setting' => 'custom_login_bg',
        'section' => 'custom_login',
    )));
    $wp_customize->add_setting('custom_primary_color', array(
        'default' => '#ea1a70',
    ));
    $wp_customize->add_control(new WP_Customize_color_control($wp_customize, 'custom_primary_color', array(
        'label' => 'Primary Color',
        'section' => 'custom_login',
        'settings' => 'custom_primary_color',
    )));
}

add_action('customize_register', 'nsit_customizar_register');


function nsit_theme_color_cus()
{
?>
    <style>
        body {
            background: <?php echo esc_attr(get_theme_mod('nsit_bg_color')); ?>;
        }

        :root {
            --primary: <?php echo esc_attr(get_theme_mod('nsit_primary_color')); ?>;
        }
    </style>
<?php
}
add_action('wp_head', 'nsit_theme_color_cus');



// Theme Custom Login page Style
function custom_color_login()
{
?>
    <style>
        #login h1 a,
        .login h1 a {
            background-image: url(<?php print get_theme_mod("custom_login_logo"); ?>) !important;
        }

        body.login {
            background: url(<?php print get_theme_mod("custom_login_bg"); ?>) !important;
        }

        #login form p.submit input {
            background: <?php print get_theme_mod("custom_primary_color"); ?> !important;
        }

        .login #login_error,
        .login .message,
        .login .success {
            border-left: 4px solid <?php print get_theme_mod("custom_primary_color"); ?> !important;
        }

        input#user_login,
        input#user_pass {
            border-left: 4px solid <?php print get_theme_mod("custom_primary_color"); ?> !important;
        }
    </style>
<?php
}
add_action('login_enqueue_scripts', 'custom_color_login');
