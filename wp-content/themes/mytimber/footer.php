<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mytimber
 */


$context = \Timber\Timber::context();
\Timber\Timber::render('footer/index.twig', $context);

wp_footer(); ?>

</div>
</body>
</html>
