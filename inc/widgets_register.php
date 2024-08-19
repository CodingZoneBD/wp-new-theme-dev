<?php
// Sidebar Register Function
function nsit_widgets_register()
{
    register_sidebar(array(
        'name' => __('Main Widget Area', 'artse-ai-art-generator'),
        'id' => 'sidebar-1',
        'description' => __('Appears in the sidebar', 'artse-ai-art-generator'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 1', 'artse-ai-art-generator'),
        'id' => 'footer-1',
        'description' => __('Appears in the sidebar', 'artse-ai-art-generator'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 2', 'artse-ai-art-generator'),
        'id' => 'footer-2',
        'description' => __('Appears in the sidebar', 'artse-ai-art-generator'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Footer 3', 'artse-ai-art-generator'),
        'id' => 'footer-3',
        'description' => __('Appears in the sidebar', 'artse-ai-art-generator'),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    register_sidebar(array(
        'name' => __('Home Page widget', 'artse-ai-art-generator'),
        'id' => 'home-1',
        'description' => __('Appears in the sidebar', 'artse-ai-art-generator'),
        'before_widget' => '<div class="child_home">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'nsit_widgets_register');
