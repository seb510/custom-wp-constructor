<?php
/* Template Name: Home Page
*
 */
get_header();

$context = Timber::context();
$context['homePage'] = new Timber\Post();

Timber::render('pages/home.twig', $context);

?>


<?php
get_footer();
