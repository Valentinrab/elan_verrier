<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Elan Verrier - Actualités</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/actualites.css">

</head>

<body>

  <?php
    get_header();
  ?>

  <section class="container">
    <main class="container-main">
      <div class="title-container">
        <h1 class="main-title">Actualités</h1>
        <div class="filter-container">
          <div class="when-container">
            <button href="#" class="btn_access">CATÉGORIE</button>
          </div>
          <div class="what-container">
            <button href="#" class="btn_access">DATE</button>
          </div>
        </div>
      </div>
      <section id="content_actu" class="mt-150px">

        <section id="content_actu_article" class="row">
          <?php

  				// The Query
  				$args = array ('post_type' => 'Post');

  				$the_query = new WP_Query( $args );

  					// The Loop
  					if ( $the_query->have_posts() ) {
  				while ( $the_query->have_posts() ) {
  							$the_query -> the_post(); ?>
                <article class="actu_principal col-12 col-md-6 col-lg-4">
                  <div class="actu_principal_image set_bg" style="background-image:url(<?php the_field('article_image'); ?>)"></div>
                  <div class="actu_principal_info col-11">
                    <div class="categorie rencontre col-1"><p>RENCONTRE</p></div>
                    <!-- <span class="categorie">EXPOSITION</span> -->
                    <div class="actu_content_info col-9 offset-1">
                      <div class="actu_date col-12">
                        <p><?php the_field('article_auteur'); ?></p>
                        <p><?php the_time('d/m/Y') ?></p>
                      </div>
                      <h1 class="col-12"><?php the_title(); ?></h1>
                      <p class="actu_content_info_para"><?php the_field('article_chapeau'); ?></p>
                      <div class="float-right"><a href="<?php the_permalink(); ?>" class="btn_access">LIRE LA SUITE</a></div>
                    </div>
                  </div>
                </article>

  							<?php
  						}
  						wp_reset_postdata();
  					}
  				?>


        </section>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/accueil_3.svg" class="tache tache3" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/taches_6_cut.png" class="tache tache6" alt="tache">

      </section>

    </main>
  </section>


  <?php
    get_footer();
  ?>


</body>

</html>
