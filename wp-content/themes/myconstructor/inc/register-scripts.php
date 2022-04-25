<?php
function register_scripts()
{
    wp_enqueue_script('scripts-slug', JS_PATH . '/scripts.js', array(), true, true);
}

add_action('wp_enqueue_scripts', 'register_scripts');