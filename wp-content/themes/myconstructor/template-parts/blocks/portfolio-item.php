<?php
/**
 * Portfolio Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'portfolio-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'portfolio';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

$logo = get_field( 'logo' ) ?: 296;
$title = get_field( 'title' )  ?: "Title";
$description = get_field( 'description' ) ?: 'Information';
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> my-portfolio-item">
    <div class="portfolio-logo">
		<?php echo wp_get_attachment_image( $logo, 'full' ); ?>
    </div>
    <blockquote class="portfolio-blockquote">
        <h3 class="portfolio-title"><?php echo $title; ?></h3>
        <div class="portfolio-description"><?php echo $description; ?></div>
    </blockquote>
</div>
