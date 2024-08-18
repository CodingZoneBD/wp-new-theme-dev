<?php

/**
 * Theme Functions
 */
 
// All default theme functions
include_once('inc/default.php');

// Theme css and jQuery files calling
include_once('inc/enqueue.php');

//Theme Functions
include_once('inc/theme_function.php');

//Addin Cutom post
include_once('inc/custom_post.php');


// Menu  Register Function
include_once('inc/menu_register.php');

// WP Widgets Register Function
include_once('inc/widgets_register.php');

// WP Shortcode Register Function
include_once('inc/shortcode.php');
