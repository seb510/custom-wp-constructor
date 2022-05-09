<?php

function navMenu($context) {
	$context['header_menu'] = new Timber\Menu('Header menu');
	$context['footer_menu'] = new Timber\Menu('Footer menu');

	return $context;
}

add_filter('timber/context', 'navMenu');