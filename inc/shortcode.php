<?php

/**
 * Theme Shortcodes
 */

function basic_shortcode()
{
    return 'hello world';
}

add_shortcode('text', 'basic_shortcode');

function button_shortcode($atts, $content = null)
{
    $values = shortcode_atts(array(
        'url' => '#',
    ), $atts);
    return '<a class="button" href="' . esc_attr($values['url']) . '">' . $content . '</a>';
}

add_shortcode('button', 'button_shortcode');
