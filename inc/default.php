<?php

/**
 * My theme functions
 */


// Theme title
add_theme_support('title-tag');

// Thumbnil Image Area
add_theme_support('post-thumbnails', array('page', 'post'));

add_image_size('post-thumbnails', 970, 350, true);


// Except to 40 Words
// Customize the "Read More" link
function nsit_excerpt_more($more)
{
    return '<br> <br> <a class="read-more" href="' . get_permalink() . '">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'nsit_excerpt_more');

// Set the excerpt length to 20 words
function nsit_excerpt_length($length)
{
    return 20;
}

add_filter('excerpt_length', 'nsit_excerpt_length', 999);


// Pagination Function
function nsit_pagination(){
    global $wp_query, $wp_rewrite;
    $pages ='';
    $max = $wp_query->max_num_pages;
    if(!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if ($max > 1) echo '</pre>
      <div class="wp_pagenav">';
        if ($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' .$current . '<span>of</span>' . $max . '</p>';
        echo $pages . paginate_links($args);
        if ($max > 1 ) echo '</div><pre>';
}