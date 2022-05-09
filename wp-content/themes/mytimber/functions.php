<?php

include 'inc/register-scripts.php';
include 'inc/register-styles.php';

add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'Header menu',
		'footer_menu' => 'Footer menu'
	] );
} );

/**
 * Load Timber Context - Nav Menu
 */

require get_template_directory(). '/inc/timber/menu/menuFunc.php';
?>