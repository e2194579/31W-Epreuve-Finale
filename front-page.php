<?php get_header(); ?>
<section class="site__main">
    <!-- <h1>front-page.php</h1> -->
 <h2>Atelier</h2>
            <?php wp_nav_menu(array(
                        'menu' => 'Sidebar3',
                        'container' => 'nav',
                        'container_class' => 'menu__sidebar menu__atelier',
                        'menu_class' => 'menu__sidebar__ul',
                        
            )) ?>
              
</section>
<?php get_footer(); ?>