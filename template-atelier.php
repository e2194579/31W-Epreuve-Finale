<?php
/**
 * Template name: Atelier
 */
?>
<?php get_header() ?>  

<main class="site__main">

   <?php //the_post_thumbnail("annonce"); ?>
   <!-- <mark>Événement à venir</mark> -->
       <?php if (have_posts()): the_post(); ?>
      <article class="annonce__article">
         <h1><?= get_the_title() ?></h1>
         <?php the_content(); ?>
         <?php

         $animateur = get_field("animateur");
         $date = get_field("date");
         $duree = get_field("duree");
         $heure = get_field("heure");
         $lieu = get_field("lieu");
         $prix = get_field("prix");
         $type = get_field("type");
         $hs = get_field("heureseance");
         $type = get_field("type");
         $niveau = get_field("niveau");
         



         echo "<p class='annonce__animateur'>Animateur: " . $animateur . "</p>";

       /*   echo "<p>Type de formation: </p>";
         echo " <input type='radio' id='css' name='a' value='css'> <label for='css'>CSS</label>";
         echo " <input type='radio' id='php' name='a' value='php'> <label for='php'>PHP</label>";
         echo " <input type='radio' id='js' name='a' value='js'> <label for='js'>JS</label>"; */
         echo "<p class='annonce__hs'>Type de formation: " . $type . "</p>";

         echo "<p class='annonce__date'>La date: " . $date . "</p>";
         echo "<p class='annonce__duree'>La durée: " . $duree . "</p>";
         echo "<p class='annonce__heure'>Le heure: " . $heure . "</p>";

      /*    echo "<p>Nombre d'heure par séance: </p>";
         echo " <input type='radio' id='1' name='a' value='1'> <label for='1'>1h</label>";
         echo " <input type='radio' id='2' name='a' value='2'> <label for='2'>2h</label>";
         echo " <input type='radio' id='3' name='a' value='3'> <label for='3'>3h</label>"; */
         echo "<p class='annonce__hs'>Nombre d'heure par séance: " . $hs . "</p>";


      /*   echo "<p>Niveau de difficulté: </p>";
         echo " <input type='radio' id='debutant' name='a' value='debutant'> <label for='debutant'>Débutant</label>";
         echo " <input type='radio' id='intermediaire' name='a' value='intermediaire'> <label for='intermediaire'>Intermédiaire</label>";
         echo " <input type='radio' id='expert' name='a' value='expert'> <label for='expert'>Expert</label>"; */
         echo "<p class='annonce__hs'>Nombre d'heure par séance: " . $niveau . "</p>"; 

         echo "<p class='annonce__lieu'>Le lieu: " . $lieu . "</p>";
         echo "<p class='annonce__prix'>Prix: " . $prix . "</p>";

         $image = get_field('image');
         if( !empty( $image ) ): ?>
             <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
         <?php endif; ?>
         
      
         
      </article>
      <?php endif ?>
  
</main>
<?php get_footer() ?>