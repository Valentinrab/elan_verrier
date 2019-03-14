<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elan Verrier - Accueil</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src = "<?php bloginfo('template_directory'); ?>/js/masonry-docs/masonry.pkgd.js"></script>
    <script src = "<?php bloginfo('template_directory'); ?>/js/masonry.js"></script>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/realisations.css">

  </head>
  <body>

    <?php
      get_header();
    ?>

    <section class="container">

    <div class="container-fluid">
      <div class="title-container">
        <h1 class="main-title">Réalisations</h1>
        <div class="filter-container">
          <div class="when-container">
            <button href="#" class="btn_access">DATE</button>
          </div>
        </div>
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
              <img src="<?php the_field('realisation_image'); ?>" />
              <div class="caption">
                <h2><?php the_title(); ?></h2>
                <p><?php the_field('realisation_createur'); ?></p>
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

        <!-- <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea5.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea8.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea1.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea2.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea7.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea5.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea3.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea1.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea7.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea8.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea7.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea6.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea2.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea5.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-12 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea4.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div>
        <div class="grid-item col-11 col-md-6 col-lg-4 col-xl-4">
          <div>
            <img src="<?php bloginfo('template_directory'); ?>/images/crea2.jpg" />
            <div class="caption">
  						<h2>Nom de l'élève</h2>
  						<div class="caption_social">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="Linkedin"></a>
              </div>
            </div>
					</div>
        </div> -->
      </div>
    </div>

  </section>

  <?php
    get_footer();
  ?>

   </footer>
  </body>
</html>
