<?php

/**
 * This function is used to add custom post type
 */

function custom_service()
{
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services', 'artseaiartgenerator'),
            'singular_name' => __('Service', 'artseaiartgenerator'),
            'add_new' => __('Add New Service', 'artseaiartgenerator'),
            'add_new_item' => __('Add New Service', 'artseaiartgenerator'),
            'edit_item' => __('Edit Service', 'artseaiartgenerator'),
            'new_item' => __('New Service', 'artseaiartgenerator'),
            'view_item' => __('View Service', 'artseaiartgenerator'),
            'search_items' => __('Search Service', 'artseaiartgenerator'),
            'not_found' => __('No Service found', 'artseaiartgenerator'),
            'not_found_in_trash' => __('No Service found in Trash', 'artseaiartgenerator'),
            'parent_item_colon' => __('Parent Service', 'artseaiartgenerator'),
        ),
        'menu_icon' => 'dashicons-networking',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchical' => true,
        'show_ui' => true,
        'capitalize_type' => 'post',
        'rewrite' => array(
            'slug' => 'service',
        ),
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ),
    ));
}


add_action('init', 'custom_service');

function custom_slider()
{
    register_post_type('slider', array(
        'labels' => array(
            'name' => __('Sliders', 'artseaiartgenerator'),
            'singular_name' => __('Slider', 'artseaiartgenerator'),
            'add_new' => __('Add New Slider', 'artseaiartgenerator'),
            'add_new_item' => __('Add New Slider', 'artseaiartgenerator'),
            'edit_item' => __('Edit Slider', 'artseaiartgenerator'),
            'new_item' => __('New Slider', 'artseaiartgenerator'),
            'view_item' => __('View Slider', 'artseaiartgenerator'),
            'search_items' => __('Search Slider', 'artseaiartgenerator'),
            'not_found' => __('No Slider found', 'artseaiartgenerator'),
            'not_found_in_trash' => __('No Slider found in Trash', 'artseaiartgenerator'),
            'parent_item_colon' => __('Parent Slider', 'artseaiartgenerator'),
        ),
        'menu_icon' => 'dashicons-slides',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 6,
        'has_archive' => true,
        'hierarchical' => true,
        'show_ui' => true,
        'capitalize_type' => 'post',
        'rewrite' => array(
            'slug' => 'slider',
        ),
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
        ),
    ));
}


add_action('init', 'custom_slider');
