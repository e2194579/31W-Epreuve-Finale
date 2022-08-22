<?php get_header(); ?>
<section class="site__main">
    <!-- <h1>front-page.php</h1> -->
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <?php $lien = "<a class='bouton' href='" . get_permalink() . "'>" . substr(get_the_title(), 0, 8) . "</a>" ?>



            <h2><?= get_field('titre'); ?></h2>

            <p><?= get_field('sous_titre'); ?></p>
            <p><?= get_field('description'); ?></p>
            
            
            



        <?php endwhile; ?>
    <?php endif; ?>
</section>
<?php get_footer(); ?>