<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elan Verrier - Accueil</title>
    <meta name="viewport" content="width=device-width">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/realisations.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon-elan-verrier.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
        <h1 class="main-title"><span class="lettrine lettrine1">R</span>Réalisations</h1>
      </div>

      <div class="intro-realisation col-12">
        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/main-decoupe.svg" class="illustration illustration3" alt="illustration">

        <p><?php the_field('introduction_realisation'); ?></p>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_1.svg" data-rellax-speed="-1" class="tache tache1 rellax" alt="tache">
      </div>

      <div class="grid">
        <div class="grid-sizer col-12 col-md-6 col-lg-4 col-xl-4"></div>
        <?php
          // The Query
          $args = array ('post_type' => 'realisation');

          $the_query = new WP_Query( $args );
          $count = 0;
          // The Loop
          if ( $the_query->have_posts() ) {
          while ( $the_query->have_posts() ) {
          $the_query -> the_post();
          $count ++;
          ?>
          <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4" data-toggle="modal" data-target="#myModal_<?php echo $count ?>">

              <img src="<?php the_field('realisation_image'); ?>" class="img-fluid"/>

          </div>

          <!-- Modal -->
          <div class="modal fade" id="myModal_<?php echo $count ?>" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title"><?php the_title() ?></h3>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body set_bg">
                  <img src="<?php the_field('realisation_image'); ?>" alt="">
                </div>
                <div class="modal-footer">
                  <?php
                    if( have_rows('creator_information') ):
                        while ( have_rows('creator_information') ) : the_row();
                        ?>
                        <div class="content_creator_information">
                          <p class="modal-creator"><?php the_sub_field('creator_name'); ?></p>
                          <div>
                            <a href="<?php the_sub_field('link_linkedin'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="instagram"></a>
                            <a href="<?php the_sub_field('link_instagram'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
                          </div>

                        </div>

                  <?php
                      endwhile;
                      endif;
                  ?>
                  <p class="prev">AVANT</p>
                  <p class="next">APRES</p>
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
