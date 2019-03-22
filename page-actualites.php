<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Elan Verrier - Actualités</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/actualites.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/rellax.min.js"></script>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

  <script>document.documentElement.className = 'js';</script>

</head>

<body>

  <?php
    get_header();
  ?>

  <section class="container">
    <main class="container-main">
      <div class="title-container">
        <h1 class="main-title">Actualités</h1>

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
                ?>
                <article class="actu_reveal <?php the_field('categorie'); ?> col-12 col-md-6 col-lg-4">
                  <div class="actu_principal_image set_bg" style="background-image:url(<?php the_field('article_image'); ?>)"></div>
                  <div class="actu_principal_info col-11">
                    <div class="categorie col-1 <?php the_field('categorie'); ?>">
                      <p class="categorie_title"><?php the_field('categorie'); ?></p>
                    </div>

                    <div class="actu_content_info col-9 offset-1">
                      <div class="actu_date col-12">
                        <p><?php the_field('article_auteur'); ?></p>
                        <p><?php the_time('d/m/Y') ?></p>
                      </div>
                      <h1 class="col-12"><?php the_title(); ?></h1>
                      <p class="actu_content_info_para"><?php echo limit_words(the_field('article_chapeau'));?></p>
                      <div class="float-right"><a class="btn_lls" href="<?php the_permalink(); ?>">Lire la suite</a></div>
                    </div>
                  </div>
                </article>

  							<?php
  						}
  						wp_reset_postdata();
  					}
  				?>


        </section>


      </section>

    </main>
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
  //script du tri

  // init Isotope
  var $grid = $('#content_actu_article').isotope({});
  // filter items on button click
  $('.tri-categorie').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
  });
  //add class active
  $('.tri-categorie button').click(function(){
    console.log("heeeeeyyyyy");
      //removes class from all items to "clear" the class from your menu
      $('.tri-categorie button').removeClass("active");

      //adds the class to whichever item you clicked
      $(this).addClass("active");

});

</script>

</html>
