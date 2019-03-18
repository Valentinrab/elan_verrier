<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - L'agenda</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/agenda.css"
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
>
  <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css"> -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- <script src="<?php bloginfo('template_directory'); ?>/js/agenda.js"></script> -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>



</head>

<body>

  <?php
    get_header();
  ?>

  <section class="container">
    <main class="container-main">
      <div class="title-container">
        <h1 class="main-title">L'agenda</h1>
        <div class="filter-container">
          <div class="when-container">
            <button href="#" class="btn_access">CATÉGORIE</button>
          </div>
          <div class="what-container">
            <button href="#" class="btn_access">CE MOIS-CI</button>
          </div>
        </div>
      </div>
      <div class="container-wrap">
        <div class="wrap-line 1">
          <h2 class="date-title">JANVIER</h2>
          <div class="wrap-group 1">
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
              );

              $the_query = new WP_Query( $args );
              $count = 0;
              // The Loop
              if ( $the_query->have_posts() ) {
              while ( $the_query->have_posts() ) {
              $the_query -> the_post();

              $date = get_field('date_debut', false, false);
              $date = new DateTime($date);

              $count ++;

              ?>

              <p>Event start month: <?php echo $date->format('m'); ?></p>

              <div class="wrap event-reveal" data-toggle="modal" data-target="#myModal_<?php echo $count ?>">
                <div class="img-event set-bg" style="background-image:url(<?php the_field('image') ?>)">
                  <div class="event-info">
                    <p class="event-date"><?php the_field('date_debut') ?></p>
                    <div class="desc-wrap">
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
                    <div class="modal-header">
                      <h3><?php the_field('categorie') ?></h3>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                      <div class="img-event-modal set-bg" style="background-image:url(<?php the_field('image') ?>)"></div>

                      <h2><?php the_title() ?></h2>
                      <div class="info-event-modal">

                        <div class="pratical-event-modal col-4">
                          <div class="date-event-modal">
                            <p class="date-day">17 - 21</p>
                            <p class="date-month">JANVIER</p>
                          </div>
                          <p class="hours-event-modal">Lundi : 14h00 - 18h00<br>Mardi : 14h00 - 18h00</p>
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


          </div>
        </div>

      </div>
      <img src="<?php bloginfo('template_directory'); ?>/images/taches/accueil_3.svg" class="tache tache3" alt="tache">
      <img src="<?php bloginfo('template_directory'); ?>/images/taches/taches_6_cut.png" class="tache tache6" alt="tache">
    </main>
  </section>
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
