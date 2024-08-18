<?php
// Sidebar Register Function
function nsit_widgets_register()
{
    register_sidebar(array(
        'name' => __('Main Widget Area', 'artseaiartgenerator'),
        'id' => 'sidebar-1',
        'description' => __('Appears in the sidebar', 'artseaiartgenerator'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 1', 'artseaiartgenerator'),
        'id' => 'footer-1',
        'description' => __('Appears in the sidebar', 'artseaiartgenerator'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', 'artseaiartgenerator'),
        'id' => 'footer-2',
        'description' => __('Appears in the sidebar', 'artseaiartgenerator'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 3', 'artseaiartgenerator'),
        'id' => 'footer-3',
        'description' => __('Appears in the sidebar', 'artseaiartgenerator'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Home Page widget', 'artseaiartgenerator'),
        'id' => 'home-1',
        'description' => __('Appears in the sidebar', 'artseaiartgenerator'),
        'before_widget' => '<div class="child_home">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'nsit_widgets_register');
