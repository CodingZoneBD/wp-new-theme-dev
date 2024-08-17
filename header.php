<?php
/*
* This template for displaying the header
*/
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header_area" class="bg-body-tertiary <?php echo get_theme_mod('nsit_menu_position'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-3 d-flex align-items-center justify-content-center">
                    <a href="<?= home_url(); ?>">
                        <img src="<?php echo get_theme_mod('nsit_logo') ?>" alt="<?php echo get_bloginfo('name'); ?>">
                    </a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
                </div>
            </div>
        </div>
    </header>