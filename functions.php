<?php

function divichild_theme_enqueue_scripts()
{
    $_theme = wp_get_theme();
    wp_enqueue_style('divichild-style', get_template_directory_uri() . '/style.css', '', $_theme->get('Version'));
    wp_enqueue_style('divichild-style', get_stylesheet_directory_uri() . '/style.css', '', $_theme->get('Version'));
}

add_action('wp_enqueue_scripts', 'divichild_theme_enqueue_scripts', 999);

function divichild_theme_setup()
{
    // code for setup the theme
}

add_action('after_setup_theme', 'divichild_theme_setup');
