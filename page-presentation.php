<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Elan Verrier - Accueil</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/quisommesnous.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />
  <script src="<?php bloginfo('template_directory'); ?>/js/rellax.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

  <script>document.documentElement.className = 'js';</script>





</head>

<body>

  <?php
    get_header();
  ?>

  <section class="container mt-150px">
    <h1 class="main-title">Qui sommes-nous ?</h1>

        <?php

        if( have_rows('contenu') ):

             // loop through the rows of data
            while ( have_rows('contenu') ) : the_row();

                if( get_row_layout() == 'texte_image' ): ?>

                  <section class="texte_image row">
                    <div class="content_texte col-8 offset-2 col-lg-5 offset-lg-0">
                      <p class="content_para"><?php the_sub_field('texte'); ?></p>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_2.svg" data-rellax-speed="-0.7" class="tache tache2 rellax" alt="tache">
                    <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/mains.png" class="illustration illustration1" alt="illustration">
                    <div class="content_image col-12 col-lg-6 offset-lg-0">
                      <div class="image_l set_bg col-8 offset-2 col-lg-12 offset-lg-0 rellax" data-rellax-speed="0.7"  style="background-image:url(<?php the_sub_field('image'); ?>);"></div>
                    </div>
                  </section>

                <?php
                elseif( get_row_layout() == 'image_texte' ): ?>

                <section class="image_texte row">
                  <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_3.svg" class="tache tache3 rellax" data-rellax-speed="-0.9" alt="tache">
                  <div class="content_image col-12 col-lg-6">
                    <div class="image_l set_bg col-8 offset-2 col-lg-12 offset-lg-0 rellax" data-rellax-speed="0.7"  style="background-image:url(<?php the_sub_field('image'); ?>);"></div>
                  </div>
                  <div class="content_texte col-8 offset-2 col-lg-5 offset-lg-0">
                    <p class="content_para"><?php the_sub_field('texte'); ?></p>
                  </div>
                </section>

                <?php
                elseif( get_row_layout() == 'texte_centre' ): ?>

                <section class="texte_centre row">
                  <div class="content_texte col-8 offset-2">
                    <p class="content_para"><?php the_sub_field('texte'); ?></p>
                  </div>
                </section>


              <?php endif;

            endwhile;

        endif;

        ?>

  </section>



  <?php
    get_footer();
  ?>

</body>

<script src="<?php bloginfo('template_directory'); ?>/js/menu.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/easings.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/menu3.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js'></script>
<script  src="<?php bloginfo('template_directory'); ?>/js/devenirmembre.js"></script>
<script>
  // Accepts any class name
  var rellax = new Rellax('.rellax');
</script>
</html>
