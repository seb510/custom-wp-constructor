<?php
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonial-' . $block['id'];
if( !empty($block['anchor']) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if( !empty($block['className']) ) {
	$className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
	$className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('testimonial') ?: 'Your testimonial here...';
$author = get_field('author') ?: 'Author name';
$role = get_field('role') ?: 'Author role';
$image = get_field('image') ?: 51;
$background_color = get_field('background_color');
$text_color = get_field('text_color');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> my-testimonial">
	<blockquote class="testimonial-blockquote">
		<span class="testimonial-text"><?php echo $text; ?></span>
		<span class="testimonial-author"><?php echo $author; ?></span>
		<span class="testimonial-role"><?php echo $role; ?></span>
	</blockquote>
	<div class="testimonial-image">
		<?php echo wp_get_attachment_image( $image, 'full' ); ?>
	</div>
	<style>
        #<?php echo $id; ?> {
            background: <?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
        }
        .my-testimonial {
            display: grid;
            grid-template-columns: 1fr minmax(200px, 250px);
            width: 100%;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        @media (max-width: 992px) {
            .my-testimonial {
                grid-template-columns: 1fr;
                grid-template-rows: minmax(100px, 125px) 1fr;
                grid-auto-flow: dense;
            }
            .testimonial-image {
                grid-row: 1;
            }
            .testimonial-blockquote {
                grid-row: 2;
            }
        }
        .testimonial-blockquote {
            padding: 15px;
            display: flex;
            flex-direction: column;
            width: 100%;
            justify-content: flex-start;
        }
        .testimonial-image {
            height: 100%;
            width: 100%;
            overflow: hidden;
        }
        .my-testimonial img {
            max-width: 100%;
            vertical-align: top;
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

	</style>
</div>