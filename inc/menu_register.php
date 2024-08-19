<?php

// Menu Register
// function nsit_menus()
// {
//     register_nav_menus(
//         array(
//             'primary_menu' => __('Primary Menu', 'artse-ai-art-generator'),
//         )
//     );
// }

// add_action('init', 'nsit_menus');

// Menu Register
register_nav_menu('main_menu', __('Main Menu', 'artse-ai-art-generator'));


// Walker Menu Properties
function nsit_nav_description($item_output, $item, $args)
{
    if (!empty($item->description)) {
        // Check if $args is an object and has the link_after property
        if (is_object($args) && isset($args->link_after)) {
            $item_output = str_replace(
                $args->link_after . '</a>',
                $args->link_after . '<span class="walker_nav">' . $item->description . '</span></a>',
                $item_output
            );
        } else {
            // Fallback if link_after is not set or $args is not an object
            $item_output = str_replace(
                '</a>',
                '<span class="walker_nav">' . $item->description . '</span></a>',
                $item_output
            );
        }
    }
    return $item_output;
}

add_filter('walker_nav_menu_start_el', 'nsit_nav_description', 10, 3);