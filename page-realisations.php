<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elan Verrier - Accueil</title>
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/realisations.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js.map"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js.map"></script>

    <script src = "<?php bloginfo('template_directory'); ?>/js/masonry-docs/masonry.pkgd.js"></script>
    <script src = "<?php bloginfo('template_directory'); ?>/js/masonry.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
    <script>document.documentElement.className = 'js';</script>


  </head>
  <body>

    <?php
      get_header();
    ?>

    <section class="container">

    <div class="container-fluid">
      <div class="title-container">
        <h1 class="main-title">Réalisations</h1>
      </div>

      <div class="intro-realisation col-12">
        <p><?php the_field('introduction_realisation'); ?></p>
      </div>

      <div class="grid">
        <div class="grid-sizer col-12 col-md-6 col-lg-4 col-xl-4"></div>
        <?php
          // The Query
          $args = array ('post_type' => 'realisation');

          $the_query = new WP_Query( $args );

          // The Loop
          if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
          $the_query -> the_post(); ?>

          <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">

            <div>
              <a href="<?php the_field('realisation_image'); ?>" data-toggle="lightbox">
                <img src="<?php the_field('realisation_image'); ?>" class="img-fluid"/>
              </a>
              <div class="caption">
                <h2><?php the_title(); ?></h2>
                <p class="createur"><?php the_field('realisation_createur'); ?></p>
                <div class="caption_social">
                  <a href="<?php the_field('realisation_lien_instagram'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                  <a href="<?php the_field('realisations_lien_linkedin'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
                </div>
              </div>
            </div>
          </div>

          <?php
          	}
          wp_reset_postdata();
          }
          ?>

      </div>
    </div>

  </section>

  <?php
    get_footer();
  ?>

   </footer>

   <script>

   $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                 event.preventDefault();
                 $(this).ekkoLightbox();
             });

   </script>
  </body>

  <script src="<?php bloginfo('template_directory'); ?>/js/menu.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/easings.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/menu3.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js'></script>

  <script  src="<?php bloginfo('template_directory'); ?>/js/devenirmembre.js"></script>

</html>
