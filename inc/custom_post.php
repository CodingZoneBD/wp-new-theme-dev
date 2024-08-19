<?php
/*
Plugin Name: Artse Custom Post Types
Description: Registers custom post types for Sliders and Services.
Version: 1.0
Author: Your Name
*/

function custom_slider() {
    register_post_type(
        'slider',
        array(
            'labels' => array(
                'name' => __('Sliders', 'artse-ai-art-generator'),
                'singular_name' => __('Slider', 'artse-ai-art-generator'),
                'add_new' => __('Add New Slider', 'artse-ai-art-generator'),
                'add_new_item' => __('Add New Slider', 'artse-ai-art-generator'),
                'edit_item' => __('Edit Slider', 'artse-ai-art-generator'),
                'new_item' => __('New Slider', 'artse-ai-art-generator'),
                'view_item' => __('View Slider', 'artse-ai-art-generator'),
                'not_found' => __('Sorry, we couldn\'t find the Slider you are looking for.', 'artse-ai-art-generator'),
            ),
            'menu_icon' => 'dashicons-format-gallery',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slug' => 'slider'),
            'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        )
    );
    add_theme_support('post-thumbnails');
}
add_action('init', 'custom_slider');

function custom_service() {
    register_post_type(
        'service',
        array(
            'labels' => array(
                'name' => __('Services', 'artse-ai-art-generator'),
                'singular_name' => __('Service', 'artse-ai-art-generator'),
                'add_new' => __('Add New Service', 'artse-ai-art-generator'),
                'add_new_item' => __('Add New Service', 'artse-ai-art-generator'),
                'edit_item' => __('Edit Service', 'artse-ai-art-generator'),
                'new_item' => __('New Service', 'artse-ai-art-generator'),
                'view_item' => __('View Service', 'artse-ai-art-generator'),
                'not_found' => __('Sorry, we couldn\'t find the service you are looking for.', 'artse-ai-art-generator'),
            ),
            'menu_icon' => 'dashicons-networking',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'hierarchical' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slug' => 'service'),
            'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
        )
    );
    add_theme_support('post-thumbnails');
}
add_action('init', 'custom_service');

function query_post_type($query) {
    if (is_category()) {
        $post_type = get_query_var('post_type');
        if ($post_type) {
            $post_type = $post_type;
        } else {
            $post_type = array('post', 'service');
            $query->set('post_type', $post_type);
            return $query;
        }
    }
}
add_filter('pre_get_posts', 'query_post_type');
