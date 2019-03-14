<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - Ateliers</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ateliers.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

  <?php
    get_header();
  ?>

  <section class="global">
    <div>
      <img id="tache1-agenda" src="<?php bloginfo('template_directory'); ?>/images/tache_5.svg" alt="tache5">
      <img id="tache2-agenda" src="<?php bloginfo('template_directory'); ?>/images/tache_6.svg" alt="tache6">
    </div>
    <section class="container">
      <main class="container-main">
        <div class="title-container">
          <h1 class="main-title">Les ateliers</h1>
        </div>
        <?php

        // check if the repeater field has rows of data
        if( have_rows('ateliers') ):

         	// loop through the rows of data
            while ( have_rows('ateliers') ) : the_row(); ?>
            <div class="row" id="row-glob">
              <div class="col-12 col-lg-6" id="col-left" style="background-image: url(<?php the_sub_field('ateliers_image'); ?>);">

              </div>
              <div class="col-12 col-lg-6" id="col-right">
                <div class="offset-1 col-10 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                  <h2 class="title-atelier"><?php the_sub_field('ateliers_titre_atelier'); ?></h2>
                  <p class="p-atelier"><?php the_sub_field('ateliers_description'); ?></p>
                </div>
              </div>
            </div>

                <!-- // code html avec pour les zones administrables -->

<?php
    endwhile;
    endif;

?>


      </main>
    </section>
  </section>

  <?php
    get_footer();
  ?>

</body>

</html>
