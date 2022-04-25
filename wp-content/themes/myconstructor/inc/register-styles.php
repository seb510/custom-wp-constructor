<?php
function register_styles()
{
    wp_enqueue_style('styles-slug', CSS_PATH . '/style.css', array(), true);
}

add_action('wp_enqueue_scripts', 'register_styles');