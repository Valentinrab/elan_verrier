<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - L'agenda</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/agenda.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        <h1 class="main-title">L'agenda</h1>

      </div>
      <div class="container-wrap">
        <div class="wrap-line 1">


            <?php

              // The Query
              $today = date('Ymd');
              $args = array ('post_type' => 'evenement',
                            'meta_query' => array(
                                array(
                                      'key'		=> 'date_fin',
                                      'compare'	=> '>',
                                      'value'		=> $today,
                                  )
                            ),
                            'order' => 'ASC',
                            'meta_key'			=> 'date_debut',
	                          'orderby'			=> 'meta_value',
              );

              $the_query = new WP_Query( $args );
              $count = 0;
              $countMois = '02';
              // The Loop
              if ( $the_query->have_posts() ) {
              while ( $the_query->have_posts() ) {
              $the_query -> the_post();


              //infos de la date de début de l'évenement
              $dateDebut = get_field('date_debut', false, false);
              $dateDebut = new DateTime($dateDebut);
              $debut_jour = $dateDebut->format('d');
              $debut_mois = $dateDebut->format('m');

              //infos de la date de fin de l'évenement
              $dateFin = get_field('date_fin', false, false);
              $dateFin = new DateTime($dateFin);
              $fin_jour = $dateFin->format('d');
              $fin_mois = $dateFin->format('m');

              //convertion des mois en français
              $tabMois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
              $debut_mois_fr = $tabMois[$debut_mois - 1];
              $fin_mois_fr = $tabMois[$fin_mois - 1];

              $count ++;

              if ($countMois < $debut_mois) {
                $countMois = $debut_mois;
                if ($count != 1) {
                  echo "</div>";
                }

              ?>
                <h2 class="date-title"><?php echo $debut_mois_fr ?></h2>
                <div class="wrap-group 1">
              <?php
              }
              ?>

              <div class="wrap event-reveal <?php the_field('categorie'); ?>" data-toggle="modal" data-target="#myModal_<?php echo $count ?>">
                <div class="img-event set-bg" style="background-image:url(<?php the_field('image') ?>)">
                  <p class="event-date"><?php echo $debut_jour ?></p>
                  <div class="event-info">

                    <div class="desc-wrap categorie <?php the_field('categorie'); ?>">
                      <p class="event-categorie"><?php the_field('categorie') ?></p>
                      <h3 class="event-title"><?php the_title() ?></h3>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="myModal_<?php echo $count ?>" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header hello categorie <?php the_field('categorie') ?>">
                      <h3 class="modal-categorie"><?php the_field('categorie') ?></h3>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="img-event-modal set-bg" style="background-image:url(<?php the_field('image') ?>)"></div>

                      <h2><?php the_title() ?></h2>
                      <div class="info-event-modal">

                        <div class="pratical-event-modal col-4">
                          <div class="date-event-modal">
                            <p class="date-day"><?php echo $debut_jour. ' ' .$debut_mois_fr. ' - ' .$fin_jour. ' ' .$fin_mois_fr ?></p>
                          </div>
                          <p class="hours-event-modal"><?php the_field('horaires') ?></p>
                        </div>
                        <p class="desc-event-modal col-7 offset-1"><?php the_field('description') ?></p>
                      </div>

                    </div>

                  </div>

                </div>
              </div>

              <?php
              	}
              wp_reset_postdata();
              }
            ?>

<!--
          </div> -->
        <!-- </div> -->

      </div>
    </main>
  </section>
  </section>

  <?php
    get_footer();
  ?>

</body>
<script>
  //script du tri

  // init Isotope
  var $grid = $('.wrap-group').isotope({});
  // filter items on button click
  $('.tri-categorie').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
  });

</script>
<script src="<?php bloginfo('template_directory'); ?>/js/menu.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/easings.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/menu3.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js'></script>

<script  src="<?php bloginfo('template_directory'); ?>/js/devenirmembre.js"></script>
</html>
