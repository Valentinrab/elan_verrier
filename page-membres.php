<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Elan Verrier - Membres</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/membres.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
</head>

<body>

  <?php
    get_header();
  ?>





  <section class="container">
    <main class="container-main">
      <h1 class="main-title">Les membres</h1>
      <div class="container-wrap">

        <?php

          // check if the repeater field has rows of data
          if( have_rows('membres') ):

           	// loop through the rows of data
              while ( have_rows('membres') ) : the_row(); ?>
              <div class="wrap 1">
                <img src="<?php bloginfo('template_directory'); ?>/images/taches/membres_1.svg" class="tache tache1" alt="tache">
                <div class="image-membre" style="background-image:url('<?php the_sub_field('membre_image'); ?>');"></div>
                <div class="desc-wrap">
                  <h3 class="name-bold"><?php the_sub_field('membre_nom'); ?></h3>
                  <p><?php the_sub_field('membre_fonction'); ?></p>
                </div>
              </div>

                  <!-- // code html avec pour les zones administrables -->

        <?php
            endwhile;
            endif;

        ?>


      </div>
      <div class="container-form col-12">
        <h2 class="form-title"><?php the_field('titre_paragraphe_membre'); ?></h2>
        <div id="form-desc" class="row">
          <div id="form-left" class="col-8">
            <p><?php the_field('paragraphe_membre'); ?></p>
          </div>
          <div class="btn_access col-4">
            <a>
              <span class="text">télécharger le document</span>
              <span class="line -right"></span>
              <span class="line -top"></span>
              <span class="line -left"></span>
              <span class="line -bottom"></span>
            </a>
          </div>
        </div>
        <div class="col-12">
          <div class="btn_member">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo" />
                </filter>
              </defs>
            </svg>

            <span class="button--bubble__container">
              <a href="#campaign" class="button button--bubble">
                Devenir membre
              </a>
              <span class="button--bubble__effect-container">
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>

                <span class="button effect-button"></span>

                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
              </span>
            </span>
          </div>
        </div>
      </div>

    </main>
  </section>

  <?php
    get_footer();
  ?>


</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js'></script>

<script  src="<?php bloginfo('template_directory'); ?>/js/devenirmembre.js"></script>

</html>
