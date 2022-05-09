<?php
function register_styles()
{
    wp_enqueue_style('styles-slug', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), true);
}

add_action('wp_enqueue_scripts', 'register_styles');