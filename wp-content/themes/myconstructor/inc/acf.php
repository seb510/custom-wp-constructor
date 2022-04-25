<?php
/**
 * Register ACF Option Page
 */
function register_acf_options_pages()
{
    if (!function_exists('acf_add_options_page'))
        return;

    $option_page = acf_add_options_page(array(
        'page_title' => __('Theme General Settings', THEME_NAME),
        'menu_title' => __('Theme Settings', THEME_NAME),
        'menu_slug' => 'theme-general-settings',
    ));
}

add_action('acf/init', 'register_acf_options_pages');

/** Custom block for gutenberg **/

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

	// Check function exists.
	if( function_exists('acf_register_block_type') ) {

		// register a testimonial block.
		acf_register_block_type(array(
			'name'              => 'testimonial',
			'title'             => __('Testimonial'),
			'description'       => __('A custom testimonial block.'),
			'render_template'   => 'template-parts/blocks/testimonials/testimonial.php',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'testimonial', 'quote' ),
		));

		acf_register_block_type(array(
			'name'              => 'portfolio-item',
			'title'             => __('Portfolio Item'),
			'description'       => __('A custom portfolio items.'),
			'render_template'   => 'template-parts/blocks/portfolio/portfolio-item.php',
			'category'          => 'layout',
			'icon'              => 'excerpt-view',
			'keywords'          => array( 'portfolio'),
		));

	}
}