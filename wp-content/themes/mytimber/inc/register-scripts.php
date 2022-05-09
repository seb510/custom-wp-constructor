<?php
function register_scripts()
{
    wp_enqueue_script('scripts-slug', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array(), true, true);
}

add_action('wp_enqueue_scripts', 'register_scripts');