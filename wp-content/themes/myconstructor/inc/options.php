<?php
function my_theme_setup()
{
    load_theme_textdomain(THEME_NAME, LANGUAGES_PATH);
}

add_action('after_setup_theme', 'my_theme_setup');
