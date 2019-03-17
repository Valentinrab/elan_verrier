<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Elan Verrier - Actualités</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/actualites.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

  <!-- <script src="<?php bloginfo('template_directory'); ?>/js/setCategoryClass.js"></script> -->

</head>

<body>

  <?php
    get_header();
  ?>

  <section class="container">
    <main class="container-main">
      <div class="title-container">
        <h1 class="main-title">Actualités</h1>
        <!-- <div class="filter-container">
          <div class="when-container">
            <button href="#" class="btn_access">CATÉGORIE</button>
          </div>
          <div class="what-container">
            <button href="#" class="btn_access">DATE</button>
          </div>
        </div> -->
        <div class="tri-categorie">
          <button data-filter="*">Tous</button>
          <button data-filter=".rencontre">Rencontre</button>
          <button data-filter=".vente">Vente</button>
          <button data-filter=".exposition">Exposition</button>
          <button data-filter=".conference">Conférence</button>
          <button data-filter=".autre">Autre</button>
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
  							$the_query -> the_post();
                //
                // $term = get_sub_field('categorie');
                // if( $term ) {
                //   foreach($term as $t) {
                //     $t = get_category($t);
                //     echo $t->name;
                //   }
                // }
                // $categorieId = the_field('categorie');
                // $categorieName = '';
                // $categorieName = "Autre";
                // switch ($categorieId) {
                //   case 2:
                //       $categorieName = "rencontre";
                //       break;
                //   case 3:
                //       $categorieName = "exposition";
                //       break;
                //   case 4:
                //       $categorieName = "vente";
                //       break;
                //   case 5:
                //       $categorieName = "conférence";
                //       break;
                // }
                // echo $categorieName;
                // $categorie =  the_category();
                // echo $categorie.children();

                ?>
                <article class="actu_principal <?php the_field('categorie'); ?> col-12 col-md-6 col-lg-4">
                  <div class="actu_principal_image set_bg" style="background-image:url(<?php the_field('article_image'); ?>)"></div>
                  <div class="actu_principal_info col-11">
                    <div class="categorie col-1 <?php the_field('categorie'); ?>"><p><?php the_field('categorie'); ?></p></div>

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
<script>
  //script du tri

  // init Isotope
  var $grid = $('#content_actu_article').isotope({});
  // filter items on button click
  $('.tri-categorie').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
  });

</script>
</html>
