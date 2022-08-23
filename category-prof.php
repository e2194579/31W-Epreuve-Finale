<?php get_header(); ?>
<section class="site__main">
    <h1>categorie-prof.php</h1>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            
            <p><?= wp_trim_words(get_the_content(), 40, " ... ") ?></p>

            <p>Liste de Professeur:</p>
            <p>---------------------></p>

        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>