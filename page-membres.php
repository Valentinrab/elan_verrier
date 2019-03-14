<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Elan Verrier - Membres</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/membres.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
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
          <div id="form-left" class="col">
            <p><?php the_field('paragraphe_membre'); ?></p>
          </div>
          <div id="form-right" class="col">
            <button href="#" class="btn_access">TÉLÉCHARGER LE FORMULAIRE</button>
          </div>
        </div>
      </div>
    </main>
  </section>

  <?php
    get_footer();
  ?>

</body>

</html>
