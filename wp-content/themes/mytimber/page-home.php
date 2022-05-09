<?php
/* Template Name: Home Page
*
 */
get_header();

$context = Timber::context();
$context['homePage'] = new Timber\Post();
$context['homePageFeed'] = new Timber\PostQuery([
	'post_type' => 'post',
	'posts_per_page' => 3,
]);

Timber::render('pages/home.twig', $context);

?>


<?php
get_footer();
