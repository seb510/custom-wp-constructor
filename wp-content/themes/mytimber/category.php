<?php
get_header();
?>


<main class="main">
    <?php
    // single.php, see connected twig example
    $context = Timber::context();
    $context['post'] = new Timber\Post(); // It's a new Timber\Post object, but an existing post from WordPress.
    Timber::render('pages/category.twig', $context);
    ?>
</main>


<?php
get_footer();
?>
