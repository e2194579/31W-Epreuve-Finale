<?php get_header(); ?> 
<h1>index.php</h1>
<?php
if (have_posts()):
    while(have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?= wp_trim_words(get_the_content(), 100) ?></p>
        <?php endwhile; ?>
        <?php endif; ?>    
        <?php get_footer(); ?>