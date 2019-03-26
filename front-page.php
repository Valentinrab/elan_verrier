<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elan Verrier - Accueil</title>

    <meta name="viewport" content="width=device-width">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/accueil.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/loader.css">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon-elan-verrier.png" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/rellax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/loader.js"></script>
    <script>document.documentElement.className = 'js';</script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
    window.addEventListener("load", function(){
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#ffffff"
        },
        "button": {
          "background": "#f09682",
          "text": "#ffffff"
        }
      },
      "content": {
        "message": "Nous utilisons des cookies pour nous permettre de mieux comprendre comment le site est utilisé. En continuant à utiliser ce site, vous acceptez cette politique.",
        "dismiss": "J'accepte",
        "link": "En savoir plus",
        "href": "<?php echo get_permalink(107); ?>"
      }
    })});
    </script>

    <?php wp_head(); ?>
  </head>
  <body>

    <?php
      get_header();
      include('loader.php');
    ?>

    <section class="container">

      <main id="content_video">

        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_1.svg" data-rellax-speed="-1" class="tache tache1 rellax" alt="tache">

        <div class="video set_bg">
          <div class="video-img set_bg" style="background-image:url(<?php the_field('image_format_portable') ?>)"></div>
          <div id="video"></div>
        </div>
        <div class="video_title">
          <h1 class="name"><?php the_field('video_titre'); ?></h1>
          <h2 class="bl"><?php the_field('video_sous-titre'); ?></h2>
        </div>


      </main>
      <div class="next_ev">
        <p class="next_ev_title">PROCHAINEMENT<i class="fas fa-sort-down"></i></p>

        <a href="<?php echo get_permalink(44); ?>"><div class="next_ev_container">
          <!-- prochainement debut  -->
          <?php

          // The Query
          $query = new WP_Query( $args );
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
                          'posts_per_page'         => '1',
            );

            $the_query = new WP_Query( $args );

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

            ?>

            <div class="wrap <?php the_field('categorie'); ?>">
              <div class="img-event set_bg" style="background-image:url(<?php the_field('image') ?>)">
                <p class="event-date"><?php echo $debut_jour.'-'.$fin_jour ?></p>
                <div class="event-info">

                  <div class="desc-wrap categorie <?php the_field('categorie'); ?>">
                    <p class="event-categorie"><?php the_field('categorie') ?></p>
                    <h3 class="event-title"><?php the_title() ?></h3>
                  </div>
                </div>

              </div>
            </div>

            <?php
              }
            wp_reset_postdata();
            }
          ?>
<!-- prochainement fin -->
        </div>
      </a>
      </div>

      <section id="content_about" class="mt-150px row">
        <div class="content_texte col-10 offset-1 col-lg-5 offset-lg-0">
          <span class="lettrine lettrine1"><?php the_field('lettrine'); ?></span>
          <h2 data-sr="move 250px" class="content_title"><?php the_field('qui_sommes_nous_titre'); ?></h2>
          <p data-sr="move 250px" class="content_para"><?php the_field('qui_sommes_nous_paragraphe'); ?></p>

          <div class="btn_access">
            <a href="<?php echo get_permalink(109); ?>" class="btn_access">
              <span class="text"><?php the_field('qui_sommes_nous_bouton'); ?></span>
              <span class="line -right"></span>
              <span class="line -top"></span>
              <span class="line -left"></span>
              <span class="line -bottom"></span>
            </a>
          </div>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_2.svg" data-rellax-speed="-0.7" class="tache tache2 rellax" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache-bl2.png" date-rellax-speed="2" class="tache tache-bl bl1 rellax" alt="verre-transparent">

          <svg version="1.1" id="mains-team" class="illustration illustration1" x="0px" y="0px"
               viewBox="0 0 538.7 564.8" style="enable-background:new 0 0 538.7 564.8;" xml:space="preserve">
            <style type="text/css">
              .st0{fill:none;stroke:#1F3D81;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
              .st1{fill:none;stroke:#1F3D81;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;}
              .st2{fill:none;stroke:#1F3D81;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
            </style>
            <title>mains - team</title>
            <path class="st0" d="M348.4,246.1c-4.4-4.1-8.7-8.1-12.3-11.5"/>
            <path class="st0" d="M363.3,314.9c2.5,2.4,5,4.7,7.4,6.9c5.2,4.8,10.2,9.8,15.1,15"/>
            <path class="st0" d="M420.7,332.1c6.5,8.2,11.4,14.5,12.8,16.5c4.8,7,8.5,15.9,1.1,20.8c-4.8,3.1-12.5,2.5-25.5-8.6"/>
            <path class="st0" d="M377,276.1c4.6,6.5,15.9,21,27.3,35.3"/>
            <path class="st0" d="M308.5,207.8c-5.4-5.1-11.6-10.8-17.9-16.5"/>
            <path class="st0" d="M265.5,168.4c-8.5-7.8-14.6-13.2-14.9-13.5"/>
            <path class="st0" d="M250.6,154.9L250.6,154.9c0.3,0.1,5.7,2.2,18,7.3"/>
            <path class="st0" d="M308.3,134.2c8.5,5.2,19.3,11,30.4,16.7"/>
            <path class="st0" d="M291.4,122.3l-0.5-0.3c-22.2-13.9-69-18.2-95.8-18.2c-28.9,0-37.2-13.9-39.4-15.6S68.9,1.5,68.9,1.5"/>
            <path class="st0" d="M354.1,195.9L354.1,195.9c7.6,1.9,15.3,3.4,23.1,4.3l0,0"/>
            <path class="st0" d="M393.6,177c-3-1.3-8.2-3.7-14.9-6.8c-3.5-1.6-7.4-3.5-11.6-5.4"/>
            <path class="st0" d="M296.5,174.1c5.4,2.4,11.4,5.1,18,8c2,0.9,3.9,1.7,5.9,2.5"/>
            <path class="st0" d="M393.5,385.9c2.6,3,4.8,6.3,6.5,9.9c1.5,3.6,2.3,7.4,1.3,11c-2.6,9.8-13,9-22.3,3.7"/>
            <path class="st0" d="M1.5,124.9c0,0,65.2,95.9,79.7,126.7c8.1,17.3,35,59.5,57.6,93.5c6.5,9.8,12.6,18.9,17.9,26.5l3.4,4.9"/>
            <path class="st0" d="M436.9,359.5c0.4,9.3-12.9,8.3-19.5,0.4c-1.8-2-3.1-4.4-3.8-7l0,0c0.3-0.5,0.6-1,0.8-1.6l0,0
              c1.6-2.8,2.8-5.8,3.8-8.8c0.2-0.5,0.3-1.1,0.5-1.6l0,0c1.6-0.9,3.5-1.4,5-0.5C423.9,340.3,436.5,350.2,436.9,359.5z"/>
            <path class="st0" d="M393.8,385.4c3,2.8,5.2,6.4,6.1,10.4c0.5,2,0.4,4-0.3,5.9c-4.8,7.3-11.7,4.8-16.3,1.7l0.6-1
              c0.6-1,1.2-2.1,1.8-3.1c2.5-4.5,5-8.6,7.2-12.5c0.1-0.2,0.2-0.3,0.3-0.5l0.3-0.5"/>
            <path class="st0" d="M388,184.8c-2.7-0.9-5.2-2.2-7.5-3.8c-5.3-3.9-3.4-8.4-1.9-10.6c0-0.1,0.1-0.2,0.2-0.2c0.6-0.6,1.5-0.8,2.2-0.4
              l13.1,6.6"/>
            <line class="st0" x1="372.2" y1="349.7" x2="361.8" y2="334.7"/>
            <path class="st0" d="M289.5,563.3c0,0,13.9-51.7,22.2-63.3c7.5-10.5,44-53,66.6-88.5l0.6-0.9c0.2-0.3,0.4-0.6,0.6-0.9
              c1.1-1.8,2.2-3.5,3.2-5.2c0.2-0.3,0.4-0.6,0.6-1l0,0l0.6-1c0.6-1,1.2-2.1,1.8-3.1c2.5-4.5,5-8.6,7.2-12.5c0.1-0.2,0.2-0.3,0.3-0.5
              l0.3-0.5l0.3-0.5c0.1-0.2,0.2-0.3,0.3-0.5c0.1-0.2,0.2-0.3,0.3-0.4c5.6-9.3,10.3-16.6,14-22.6c0.2-0.3,0.4-0.7,0.6-1s0.4-0.6,0.6-1
              c1.2-2,2.3-3.8,3.3-5.5c0.3-0.5,0.5-0.9,0.8-1.4l0,0c0.3-0.5,0.6-1,0.8-1.6l0,0c1.6-2.8,2.8-5.8,3.8-8.8c0.2-0.5,0.3-1.1,0.5-1.6
              l0,0c0.1-0.5,0.2-0.9,0.3-1.4c0.2-1,0.3-1.9,0.4-2.9c0.1-1.1,0.3-2.2,0.7-3.2c0.1-0.4,0.3-0.8,0.4-1.3c0.1-0.4,0.3-0.8,0.5-1.2
              c2.1-4.7,4.6-9.2,7.5-13.5l0,0c0.1-0.1,0.2-0.2,0.3-0.4l0.1-0.2c1-1.6,2-3.2,2.9-4.7l0.6-1l0.4-0.7c0.2-0.3,0.3-0.5,0.5-0.8
              c0.9-1.6,1.7-3,2.4-4.4c0,0,0,0,0,0s0,0,0,0v-0.1c2.5-5.2,2.4-8.5-4-7.4c-1.2,0.2-2.3,0.4-3.5,0.7l0,0c-8.7,1.9-16.8,6.1-23.2,12.3
              c-0.3,0.3-0.5,0.5-0.8,0.8l-0.8,0.8c-4.3,4.8-7.4,10.5-9.1,16.8c-0.7,2.3-1.2,4.7-1.5,7"/>
            <path class="st0" d="M359,364.4c1.1-1.7,2.4-3.3,3.8-4.8c2.3-2.7,5.4-5.8,8.6-9.1l0.8-0.8l0.8-0.8c4-4,8.3-8,11.9-11.3l0.8-0.8
              l0.8-0.7c4-3.7,7-6.4,7.8-7.1l0.2-0.2"/>
            <path class="st0" d="M365.6,382.7c0,0-1.8-9.6-2.9-23.2c-0.6-6.9-1-14.8-1-22.9c0-0.6,0-1.3,0-1.9s0-1.3,0-1.9
              c0.1-5.5,0.5-11,1.2-16.5l0.2-1.4c0.1-0.4,0.1-0.9,0.2-1.3c0.9-6.8,2.8-13.5,5.5-19.8c2.3-5.1,4.8-10.6,7.5-16.5
              c0.2-0.4,0.3-0.8,0.5-1.2l0.5-1.1c13.1-28.8,28.6-63.1,33.1-73.4c3.9-9.1,15.1-30.1,18.5-43.8l0,0l0,0l0,0c1.4-5.6,1.5-9.9-0.8-11.7
              c-4.6-3.6-8.2-2.9-16.7,7.1l0,0c-4.3,5-9.6,12.3-17,22.4l-0.4,0.6c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.2-0.3,0.4-0.4,0.6l-0.2,0.3
              c-0.2,0.2-0.3,0.4-0.4,0.6l-4.3,5.9c-0.2,0.3-0.5,0.6-0.7,0.9l0,0c-0.2,0.3-0.4,0.6-0.7,0.9c-0.4,0.6-0.9,1.3-1.4,1.9
              c0,0-3.3,4.7-8,11.5l-0.7,1.1l0,0l-0.7,1c-9.1,13.4-22.3,33.2-27.5,43.7c0,0.1-0.1,0.1-0.1,0.2c-0.2,0.3-0.3,0.7-0.5,1l-0.5,1
              c-8.6,16-29.8,45.2-32.3,48.7c2.8-19.4,10.8-40.8,20-60.2l0.5-1.1c0.2-0.3,0.3-0.7,0.5-1.1c3.5-7.2,7.1-14,10.7-20.4
              c2.1-3.8,3.9-9.6,6.2-15.5c0.1-0.2,0.2-0.5,0.3-0.7l0.4-1l0,0c0.1-0.4,0.3-0.7,0.4-1.1c3.1-7.7,7.3-17.8,12.2-29.1
              c0.1-0.3,0.3-0.7,0.5-1l0.4-1c4.1-9.6,8.7-20,13.4-30.5c2.4-5.3,4.1-10.8,5.1-16.6c0.6-3.5,0.6-5.9,0-7.8c-0.8-2.3-2.5-3.9-5.5-5.7
              c-3.3-1-7.6,1.2-12.3,5.4l0,0l0,0c-4.7,4.2-9.9,10.5-14.9,17.7c-3.4,4.9-8.7,13.9-14.1,23.6c-0.2,0.3-0.4,0.6-0.6,1s-0.4,0.7-0.5,1
              c-6.4,11.4-13,23.7-17.3,31.8c-0.2,0.3-0.4,0.7-0.5,1l-0.5,1c-2,3.8-3.4,6.4-3.7,7c-0.6,1.1-3.5,6.9-7.2,14.1l-0.5,1l-0.5,1
              c-7.3,14.3-16.8,33-17.9,35.5c-1.7,3.9-19.6,38-38.5,53.2"/>
            <path class="st0" d="M261.2,287.7c0,0,4.9-32.5,9.4-43.3s8.3-25.4,12.2-32.2c0.8-1.4,3.7-9.3,7.3-19.6c0.1-0.4,0.3-0.8,0.4-1.1
              l0.4-1.1c1.6-4.7,3.4-9.8,5.2-14.9c0.1-0.4,0.2-0.7,0.4-1.1s0.2-0.7,0.4-1.1c2.5-7.3,5-14.6,7.1-21c1.7-5.5,3-11.1,4.1-16.8
              c0.1-0.4,0.2-0.8,0.3-1.2l0.2-1.2c0.5-2.2,1-4.3,1.5-6.3c1.3-4.8,1.7-8.3,0.3-11c-1-1.6-2.4-2.9-4.1-3.6c-4.2-2.1-8.6,1-12.9,6.6
              l0,0c-0.6,0.8-1.1,1.5-1.8,2.4c-0.2,0.3-0.4,0.6-0.6,0.9s-0.4,0.6-0.6,0.9c-3.8,5.7-7.6,12.7-11.3,19.2c-2.5,4.4-6.1,11.4-9.9,19.1
              c-0.2,0.3-0.3,0.7-0.5,1s-0.3,0.7-0.5,1c-0.7,1.4-1.4,2.8-2.1,4.2l-0.5,1l-0.5,1.1c-4.8,9.6-9.4,19.1-12.6,24.8
              c-2.7,4.9-5.1,9.9-7.2,15c-7.3,17.5-24.8,59.9-28.8,70.1c-4.5,11.8-20.3,27.2-22.5,27.8"/>
            <path class="st0" d="M157.8,527.5c5.2-5.9,10.7-33,10.4-48.2c-0.1-4.5-0.8-13.2-1.7-23.9c0-0.4-0.1-0.8-0.1-1.2s-0.1-0.8-0.1-1.3
              c-0.9-9.8-1.9-21.1-2.9-32.1l0,0c0-0.4-0.1-0.8-0.1-1.2s-0.1-0.8-0.1-1.3c-1.4-16.2-2.7-31.4-3.1-40c0-0.2,0-0.4,0-0.5
              c0-0.4,0-0.9,0-1.4s0-1.2,0-1.9c0-1.2,0.1-2.6,0.2-4.1l0,0c0-0.5,0.1-0.9,0.1-1.4s0.1-0.9,0.1-1.4c3-33.9,18.4-118.8,18.4-118.8
              s4.8-14,6.7-24.8c1.3-7.8,3.5-15.4,6.7-22.6c1.9-4.1,6.6-14.7,14.1-27.8c0.7-1.2,1.5-2.5,2.3-3.6l0.1-0.1c6-8.4,11-6.8,14,0.5
              c0.3,0.7,0.6,1.4,0.8,2.2c2.8,8.7-4,26.9-11,42.4c-0.3,12.4-1.3,24.7-3,37c2.2,12.2,5.3,30.6,5.3,30.6"/>
            <path class="st0" d="M216.9,158.1c0,0-12.3,16.1-15,25.7s7.5,6.7,11,2.6c3.1-3.5,11.6-15.4,11.6-23.5c0-2.2-1.2-4.3-3.2-5.4
              C218.4,155.9,216.9,158.1,216.9,158.1z"/>
            <path class="st0" d="M311.4,112.4c-0.4,1.1-0.8,2.2-1.1,3.4c-1.4,5.2-3,10.3-4.9,15.4c-0.1,0.4-0.3,0.7-0.4,1s-0.3,0.7-0.5,1
              c-1.5,3.3-3.3,6-5.4,7.4c-6.9,4.8-9.2,3.6-10.5-0.4c-0.9-2.6-2.2-7.1,2.3-16.9l0.5-1l0.5-1c0.4-0.8,0.9-1.7,1.4-2.6l0,0
              c2.7-4.9,5.8-9.5,9.1-14c0,0,2-3.5,5.7-1.8S313.3,107.8,311.4,112.4z"/>
            <path class="st0" d="M386.1,108.9c-2.6,7.8-8.3,18.7-11.4,22.1c-4.3,4.6-11.6,3.6-13.8-1.5c-1.4-3.1,2.4-12.9,7.4-20.9l0,0
              c3.1-5,6.7-9.2,10-10.7c8.4-3.8,9.2,4.3,9.2,4.3C387.4,104.5,387,106.8,386.1,108.9z"/>
            <path class="st0" d="M433.5,147.4c-1.1,3.6-2.5,7-4.3,10.3l0,0l0,0c-4.9,9.4-12.1,17.4-17.7,13.6c-6.3-4.3-2.1-14,0.2-18.2
              c0.7-1.3,1.2-2,1.2-2s6.8-10.4,11.6-12.7c0,0,4.8-1.7,7.8,2C433.9,142.4,434.3,145,433.5,147.4z"/>
            <path class="st0" d="M441.2,292.7c-0.2,1.8-2.5,6.9-5.4,12.5l0,0c-0.9,1.7-1.9,3.5-2.9,5.2l-0.4,0.7c-1.2,2-2.4,3.9-3.5,5.7
              l-0.1,0.2c-0.1,0.1-0.2,0.3-0.3,0.4l0,0c-2.5,3.8-4.8,6.5-6.2,6.8c-4.4,0.9-7.7-1.3-4-10c2.4-5.8,5.7-11.1,9.8-15.8
              c2.6-2.9,5.6-5.5,8.8-7.6C438,290.1,441.7,288.1,441.2,292.7z"/>
            <path class="st1" d="M195.6,327.1c0,0-2.2,28.3,0.1,29.2"/>
            <path class="st1" d="M201.9,324.1c0,0-1.1,0.4-1.5,4.3"/>
            <path class="st1" d="M228,331.6c0,0,2.8,7.2-9.3,21.3"/>
            <path class="st1" d="M263.4,346.2c0,0-2.6,10.8,0.6,14.7"/>
            <path class="st1" d="M274.8,346.6c0,0,1.4-1.4,1.7,0.3c0.8,2.6,1,5.4,0.7,8.1"/>
            <path class="st1" d="M190.3,206.8c0,0,7.4,0.8,9.6,3.3"/>
            <path class="st1" d="M188.1,214.2c0,0,8.2,2.8,9.3,2.8"/>
            <path class="st1" d="M181.2,243.9c0,0,10.6-0.6,15.1,4.9"/>
            <path class="st1" d="M180.2,247.5c0,0,11.9-1.5,14-0.4"/>
            <path class="st1" d="M179.1,250.7c0,0,8.8,1.3,10.6,3.6"/>
            <path class="st1" d="M177.8,255.7c0,0,12.4,3.5,16.8,0.1"/>
            <path class="st1" d="M276.6,162.9c0,0,4,2.4,4.5,3.2"/>
            <path class="st1" d="M257,207.4c0,0,6.3-0.4,7.8,1.1c1.4,1.7,2.5,3.5,3.5,5.4"/>
            <path class="st1" d="M253.1,212.5c1.6-0.6,3.2-1.1,4.9-1.5c0.8,0,3.8,2.2,3.8,2.2"/>
            <path class="st1" d="M253.8,215c0,0,1.1,3.3,4,1.8"/>
            <path class="st1" d="M254.9,222c0,0,4,4.4,5.7,2.5"/>
            <path class="st1" d="M252.8,231.5c0,0,11,6.3,14.7-1.5"/>
            <path class="st1" d="M344.5,159.2c0,0,4.5,2.8,6,2.9"/>
            <path class="st1" d="M342.6,168.2c0,0,2.9,2.9,6.7,2.1"/>
            <path class="st1" d="M314.3,208.2c0,0,9.3,1.9,10.6,3.6"/>
            <path class="st1" d="M319.3,210.2c0,0,0.7,3.5,1.8,4s2.5,3.3,2.5,3.3"/>
            <path class="st1" d="M320.5,214.2c-1,0.8-2.6,0.4-3.5,0.1l0,0c-0.2-0.1-0.5-0.2-0.7-0.3"/>
            <path class="st1" d="M313,218.1c0,0,3.3,1.5,4.7,1.5"/>
            <path class="st1" d="M319.8,222.5c1.3,0.7,2.7,1.3,4.2,1.7c1.1,0.3,2.2,0.4,3.3,0.2c0.2,0,0.4-0.1,0.6-0.2"/>
            <path class="st1" d="M334.3,223.1c-0.5,1.4-1.2,2.7-2.2,3.8"/>
            <path class="st1" d="M315.9,225.7c0,0,2.6,3.1,4.5,2.9"/>
            <path class="st1" d="M310.5,229.6c0,0,8.4,9.3,20.3,1.6c0.6-0.4,1.2-0.8,1.8-1.3l0.4-0.3"/>
            <path class="st1" d="M396.9,182.5c0,0,3.8,2.8,4.2,3.3"/>
            <path class="st1" d="M362.6,227.1c0,0-0.6-1.1,0.8-1.1s21-0.3,20.3,9.6"/>
            <path class="st1" d="M363,231.7c3.8,0.1,7.6,0.8,11.1,2.2"/>
            <path class="st1" d="M369.8,237.9c0,0,3.6,4.6,6,4.2"/>
            <path class="st1" d="M366.3,239c0,0,2.9,4.3,5.8,1.9"/>
            <path class="st1" d="M367.4,246.1c0,0,2.9,2.6,4.5,2.9s10.4-0.4,10.4-0.4"/>
            <path class="st1" d="M402.2,346.3c0,0,7.5-2.9,10.6,4.3"/>
            <path class="st1" d="M406.9,348.7c0,0,2.4,6.4,4.2,6.1"/>
            <path class="st1" d="M399.5,356.4c0,0,0,5.3,6.3,6"/>
            <path class="st0" d="M289.5,563.3c0,0,13.9-51.7,22.2-63.3c7.5-10.5,44-53,66.6-88.5l0.6-0.9c0.2-0.3,0.4-0.6,0.6-0.9
              c1.1-1.8,2.2-3.5,3.2-5.2c0.2-0.3,0.4-0.6,0.6-1l0,0l0.6-1c0.6-1,1.2-2.1,1.8-3.1c2.5-4.5,5-8.6,7.2-12.5c0.1-0.2,0.2-0.3,0.3-0.5
              l0.3-0.5l0.3-0.5c0.1-0.2,0.2-0.3,0.3-0.5c0.1-0.2,0.2-0.3,0.3-0.4c5.6-9.3,10.3-16.6,14-22.6c0.2-0.3,0.4-0.7,0.6-1s0.4-0.6,0.6-1
              c1.2-2,2.3-3.8,3.3-5.5c0.3-0.5,0.5-0.9,0.8-1.4l0,0c0.3-0.5,0.6-1,0.8-1.6l0,0c1.6-2.8,2.8-5.8,3.8-8.8c0.2-0.5,0.3-1.1,0.5-1.6
              l0,0c0.1-0.5,0.2-0.9,0.3-1.4c0.2-1,0.3-1.9,0.4-2.9c0.1-1.1,0.3-2.2,0.7-3.2c0.1-0.4,0.3-0.8,0.4-1.3c0.1-0.4,0.3-0.8,0.5-1.2
              c2.1-4.7,4.6-9.2,7.5-13.5l0,0c0.1-0.1,0.2-0.2,0.3-0.4l0.1-0.2c1-1.6,2-3.2,2.9-4.7l0.6-1l0.4-0.7c0.2-0.3,0.3-0.5,0.5-0.8
              c0.9-1.6,1.7-3,2.4-4.4c0,0,0,0,0,0s0,0,0,0v-0.1c2.5-5.2,2.4-8.5-4-7.4c-1.2,0.2-2.3,0.4-3.5,0.7l0,0c-8.7,1.9-16.8,6.1-23.2,12.3
              c-0.3,0.3-0.5,0.5-0.8,0.8l-0.8,0.8c-4.3,4.8-7.4,10.5-9.1,16.8c-0.7,2.3-1.2,4.7-1.5,7"/>
            <path class="st0" d="M359,364.4c1.1-1.7,2.4-3.3,3.8-4.8c2.3-2.7,5.4-5.8,8.6-9.1l0.8-0.8l0.8-0.8c4-4,8.3-8,11.9-11.3l0.8-0.8
              l0.8-0.7c4-3.7,7-6.4,7.8-7.1l0.2-0.2"/>
            <path class="st0" d="M365.6,382.7c0,0-1.8-9.6-2.9-23.2c-0.6-6.9-1-14.8-1-22.9c0-0.6,0-1.3,0-1.9s0-1.3,0-1.9
              c0.1-5.5,0.5-11,1.2-16.5l0.2-1.4c0.1-0.4,0.1-0.9,0.2-1.3c0.9-6.8,2.8-13.5,5.5-19.8c2.3-5.1,4.8-10.6,7.5-16.5
              c0.2-0.4,0.3-0.8,0.5-1.2l0.5-1.1c13.1-28.8,28.6-63.1,33.1-73.4c3.9-9.1,15.1-30.1,18.5-43.8l0,0l0,0l0,0c1.4-5.6,1.5-9.9-0.8-11.7
              c-4.6-3.6-8.2-2.9-16.7,7.1l0,0c-4.3,5-9.6,12.3-17,22.4l-0.4,0.6c-0.1,0.1-0.2,0.2-0.3,0.3c-0.1,0.2-0.3,0.4-0.4,0.6l-0.2,0.3
              c-0.2,0.2-0.3,0.4-0.4,0.6l-4.3,5.9c-0.2,0.3-0.5,0.6-0.7,0.9l0,0c-0.2,0.3-0.4,0.6-0.7,0.9c-0.4,0.6-0.9,1.3-1.4,1.9
              c0,0-3.3,4.7-8,11.5l-0.7,1.1l0,0l-0.7,1c-9.1,13.4-22.3,33.2-27.5,43.7c0,0.1-0.1,0.1-0.1,0.2c-0.2,0.3-0.3,0.7-0.5,1l-0.5,1
              c-8.6,16-29.8,45.2-32.3,48.7c2.8-19.4,10.8-40.8,20-60.2l0.5-1.1c0.2-0.3,0.3-0.7,0.5-1.1c3.5-7.2,7.1-14,10.7-20.4
              c2.1-3.8,3.9-9.6,6.2-15.5c0.1-0.2,0.2-0.5,0.3-0.7l0.4-1l0,0c0.1-0.4,0.3-0.7,0.4-1.1c3.1-7.7,7.3-17.8,12.2-29.1
              c0.1-0.3,0.3-0.7,0.5-1l0.4-1c4.1-9.6,8.7-20,13.4-30.5c2.4-5.3,4.1-10.8,5.1-16.6c0.6-3.5,0.6-5.9,0-7.8c-0.8-2.3-2.5-3.9-5.5-5.7
              c-3.3-1-7.6,1.2-12.3,5.4l0,0l0,0c-4.7,4.2-9.9,10.5-14.9,17.7c-3.4,4.9-8.7,13.9-14.1,23.6c-0.2,0.3-0.4,0.6-0.6,1s-0.4,0.7-0.5,1
              c-6.4,11.4-13,23.7-17.3,31.8c-0.2,0.3-0.4,0.7-0.5,1l-0.5,1c-2,3.8-3.4,6.4-3.7,7c-0.6,1.1-3.5,6.9-7.2,14.1l-0.5,1l-0.5,1
              c-7.3,14.3-16.8,33-17.9,35.5c-1.7,3.9-19.6,38-38.5,53.2"/>
            <path class="st0" d="M261.2,287.7c0,0,4.9-32.5,9.4-43.3s8.3-25.4,12.2-32.2c0.8-1.4,3.7-9.3,7.3-19.6c0.1-0.4,0.3-0.8,0.4-1.1
              l0.4-1.1c1.6-4.7,3.4-9.8,5.2-14.9c0.1-0.4,0.2-0.7,0.4-1.1s0.2-0.7,0.4-1.1c2.5-7.3,5-14.6,7.1-21c1.7-5.5,3-11.1,4.1-16.8
              c0.1-0.4,0.2-0.8,0.3-1.2l0.2-1.2c0.5-2.2,1-4.3,1.5-6.3c1.3-4.8,1.7-8.3,0.3-11c-1-1.6-2.4-2.9-4.1-3.6c-4.2-2.1-8.6,1-12.9,6.6
              l0,0c-0.6,0.8-1.1,1.5-1.8,2.4c-0.2,0.3-0.4,0.6-0.6,0.9s-0.4,0.6-0.6,0.9c-3.8,5.7-7.6,12.7-11.3,19.2c-2.5,4.4-6.1,11.4-9.9,19.1
              c-0.2,0.3-0.3,0.7-0.5,1s-0.3,0.7-0.5,1c-0.7,1.4-1.4,2.8-2.1,4.2l-0.5,1l-0.5,1.1c-4.8,9.6-9.4,19.1-12.6,24.8
              c-2.7,4.9-5.1,9.9-7.2,15c-7.3,17.5-24.8,59.9-28.8,70.1c-4.5,11.8-20.3,27.2-22.5,27.8"/>
            <path class="st0" d="M157.8,527.5c5.2-5.9,10.7-33,10.4-48.2c-0.1-4.5-0.8-13.2-1.7-23.9c0-0.4-0.1-0.8-0.1-1.2s-0.1-0.8-0.1-1.3
              c-0.9-9.8-1.9-21.1-2.9-32.1l0,0c0-0.4-0.1-0.8-0.1-1.2s-0.1-0.8-0.1-1.3c-1.4-16.2-2.7-31.4-3.1-40c0-0.2,0-0.4,0-0.5
              c0-0.4,0-0.9,0-1.4s0-1.2,0-1.9c0-1.2,0.1-2.6,0.2-4.1l0,0c0-0.5,0.1-0.9,0.1-1.4s0.1-0.9,0.1-1.4c3-33.9,18.4-118.8,18.4-118.8
              s4.8-14,6.7-24.8c1.3-7.8,3.5-15.4,6.7-22.6c1.9-4.1,6.6-14.7,14.1-27.8c0.7-1.2,1.5-2.5,2.3-3.6l0.1-0.1c6-8.4,11-6.8,14,0.5
              c0.3,0.7,0.6,1.4,0.8,2.2c2.8,8.7-4,26.9-11,42.4c-0.3,12.4-1.3,24.7-3,37c2.2,12.2,5.3,30.6,5.3,30.6"/>
            <path class="st0" d="M216.9,158.1c0,0-12.3,16.1-15,25.7s7.5,6.7,11,2.6c3.1-3.5,11.6-15.4,11.6-23.5c0-2.2-1.2-4.3-3.2-5.4
              C218.4,155.9,216.9,158.1,216.9,158.1z"/>
            <path class="st0" d="M311.4,112.4c-0.4,1.1-0.8,2.2-1.1,3.4c-1.4,5.2-3,10.3-4.9,15.4c-0.1,0.4-0.3,0.7-0.4,1s-0.3,0.7-0.5,1
              c-1.5,3.3-3.3,6-5.4,7.4c-6.9,4.8-9.2,3.6-10.5-0.4c-0.9-2.6-2.2-7.1,2.3-16.9l0.5-1l0.5-1c0.4-0.8,0.9-1.7,1.4-2.6l0,0
              c2.7-4.9,5.8-9.5,9.1-14c0,0,2-3.5,5.7-1.8S313.3,107.8,311.4,112.4z"/>
            <path class="st0" d="M386.1,108.9c-2.6,7.8-8.3,18.7-11.4,22.1c-4.3,4.6-11.6,3.6-13.8-1.5c-1.4-3.1,2.4-12.9,7.4-20.9l0,0
              c3.1-5,6.7-9.2,10-10.7c8.4-3.8,9.2,4.3,9.2,4.3C387.4,104.5,387,106.8,386.1,108.9z"/>
            <path class="st0" d="M433.5,147.4c-1.1,3.6-2.5,7-4.3,10.3l0,0l0,0c-4.9,9.4-12.1,17.4-17.7,13.6c-6.3-4.3-2.1-14,0.2-18.2
              c0.7-1.3,1.2-2,1.2-2s6.8-10.4,11.6-12.7c0,0,4.8-1.7,7.8,2C433.9,142.4,434.3,145,433.5,147.4z"/>
            <path class="st0" d="M441.2,292.7c-0.2,1.8-2.5,6.9-5.4,12.5l0,0c-0.9,1.7-1.9,3.5-2.9,5.2l-0.4,0.7c-1.2,2-2.4,3.9-3.5,5.7
              l-0.1,0.2c-0.1,0.1-0.2,0.3-0.3,0.4l0,0c-2.5,3.8-4.8,6.5-6.2,6.8c-4.4,0.9-7.7-1.3-4-10c2.4-5.8,5.7-11.1,9.8-15.8
              c2.6-2.9,5.6-5.5,8.8-7.6C438,290.1,441.7,288.1,441.2,292.7z"/>
            <path class="st1" d="M195.6,327.1c0,0-2.2,28.3,0.1,29.2"/>
            <path class="st1" d="M201.9,324.1c0,0-1.1,0.4-1.5,4.3"/>
            <path class="st1" d="M228,331.6c0,0,2.8,7.2-9.3,21.3"/>
            <path class="st1" d="M263.4,346.2c0,0-2.6,10.8,0.6,14.7"/>
            <path class="st1" d="M274.8,346.6c0,0,1.4-1.4,1.7,0.3c0.8,2.6,1,5.4,0.7,8.1"/>
            <path class="st1" d="M190.3,206.8c0,0,7.4,0.8,9.6,3.3"/>
            <path class="st1" d="M188.1,214.2c0,0,8.2,2.8,9.3,2.8"/>
            <path class="st1" d="M181.2,243.9c0,0,10.6-0.6,15.1,4.9"/>
            <path class="st1" d="M180.2,247.5c0,0,11.9-1.5,14-0.4"/>
            <path class="st1" d="M179.1,250.7c0,0,8.8,1.3,10.6,3.6"/>
            <path class="st1" d="M177.8,255.7c0,0,12.4,3.5,16.8,0.1"/>
            <path class="st1" d="M276.6,162.9c0,0,4,2.4,4.5,3.2"/>
            <path class="st1" d="M257,207.4c0,0,6.3-0.4,7.8,1.1c1.4,1.7,2.5,3.5,3.5,5.4"/>
            <path class="st1" d="M253.1,212.5c1.6-0.6,3.2-1.1,4.9-1.5c0.8,0,3.8,2.2,3.8,2.2"/>
            <path class="st1" d="M253.8,215c0,0,1.1,3.3,4,1.8"/>
            <path class="st1" d="M254.9,222c0,0,4,4.4,5.7,2.5"/>
            <path class="st1" d="M252.8,231.5c0,0,11,6.3,14.7-1.5"/>
            <path class="st1" d="M344.5,159.2c0,0,4.5,2.8,6,2.9"/>
            <path class="st1" d="M342.6,168.2c0,0,2.9,2.9,6.7,2.1"/>
            <path class="st1" d="M314.3,208.2c0,0,9.3,1.9,10.6,3.6"/>
            <path class="st1" d="M319.3,210.2c0,0,0.7,3.5,1.8,4s2.5,3.3,2.5,3.3"/>
            <path class="st1" d="M320.5,214.2c-1,0.8-2.6,0.4-3.5,0.1l0,0c-0.2-0.1-0.5-0.2-0.7-0.3"/>
            <path class="st1" d="M313,218.1c0,0,3.3,1.5,4.7,1.5"/>
            <path class="st1" d="M319.8,222.5c1.3,0.7,2.7,1.3,4.2,1.7c1.1,0.3,2.2,0.4,3.3,0.2c0.2,0,0.4-0.1,0.6-0.2"/>
            <path class="st1" d="M334.3,223.1c-0.5,1.4-1.2,2.7-2.2,3.8"/>
            <path class="st1" d="M315.9,225.7c0,0,2.6,3.1,4.5,2.9"/>
            <path class="st1" d="M310.5,229.6c0,0,8.4,9.3,20.3,1.6c0.6-0.4,1.2-0.8,1.8-1.3l0.4-0.3"/>
            <path class="st1" d="M396.9,182.5c0,0,3.8,2.8,4.2,3.3"/>
            <path class="st1" d="M362.6,227.1c0,0-0.6-1.1,0.8-1.1s21-0.3,20.3,9.6"/>
            <path class="st1" d="M363,231.7c3.8,0.1,7.6,0.8,11.1,2.2"/>
            <path class="st1" d="M369.8,237.9c0,0,3.6,4.6,6,4.2"/>
            <path class="st1" d="M366.3,239c0,0,2.9,4.3,5.8,1.9"/>
            <path class="st1" d="M367.4,246.1c0,0,2.9,2.6,4.5,2.9s10.4-0.4,10.4-0.4"/>
            <path class="st1" d="M402.2,346.3c0,0,7.5-2.9,10.6,4.3"/>
            <path class="st1" d="M406.9,348.7c0,0,2.4,6.4,4.2,6.1"/>
            <path class="st1" d="M408.8,359.3c0-0.2-0.1-0.4-0.3-0.6l0,0c-1.3-1.4-2.7-2.7-4.2-3.9l-0.1-0.1"/>
            <path class="st1" d="M399.5,356.4c0,0,0,5.3,6.3,6"/>
            <path class="st2" d="M138.8,345.1c-10.9,7.5-39,27-44.6,31.2c-7,5.3-6.1,13.1-4.7,15.8c1.4,2.8,9.4,11.4,32.8-0.3
              c11.9-6.1,23.3-12.8,34.4-20.3"/>
            <path class="st2" d="M163.3,419.6c-7.4,4.6-18.9,12.3-21.5,17.2c-3.9,7.5-6.1,13.1-2.8,18.3s14.4,6.7,21.7,2.5
              c1.5-0.9,3.5-2.1,5.8-3.5"/>
            <path class="st2" d="M100.3,374.2c0,0,9.1-5.6,13.7,1.1s-0.2,14.6-3,16.7s-10.4,5.7-14.8,3.5s-7.4-8.5-5.9-11.1
              S94.5,378.4,100.3,374.2z"/>
            <path class="st2" d="M141.9,441c0,0,9.4-11.5,16.1-5.9s5.2,11.9,3.7,13.5s-10.9,11.1-15.6,9.1s-9.6-4.6-7.4-13.3
              C139.6,443.1,140.6,441.9,141.9,441z"/>
            <path class="st2" d="M380.1,136.7c0,0,90.8-30.8,113.4-44.1"/>
            <path class="st2" d="M537.2,235.6c0,0-57,44.4-67.4,54.8s-46.7,37-46.7,37"/>
          </svg>




        <div class="content_image col-12 col-lg-6 offset-lg-0">
          <div class="image_l set_bg col-10 offset-1 col-lg-8 offset-lg-0 rellax img1" data-rellax-speed="1" style="background-image:url(<?php the_field('qui_sommes_nous_images_1'); ?>);"></div>
          <div class="image_r set_bg col-8 offset-lg-4 rellax" data-rellax-speed="2" style="background-image:url(<?php the_field('qui_sommes_nous_images_2'); ?>);"></div>
        </div>
      </section>

      <section id="content_activites" class="mt-150px row">
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_3.svg" class="tache tache3 rellax" data-rellax-speed="-0.9" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache-bl3.png" date-rellax-speed="2" class="tache tache-bl bl4 rellax" alt="verre-transparent">
        <svg version="1.1" id="main-soufflage" class="illustration illustration2" x="0px"
        	 y="0px" viewBox="0 0 1137.1 418.9" style="enable-background:new 0 0 1137.1 418.9;" xml:space="preserve">
          <style type="text/css">
          	.st0{fill:none;stroke:#1F3D81;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
          </style>
          <title>soufflage - main</title>
          <path class="st0" d="M918.7,127.8c0,0,1.6-10.1,3.2-24.1c2-17.7,4.1-41.6,3.1-59.4c-0.5-8.7-1.7-15.9-4-20.1
          	c-10.7-19.8-33.5-26.7-46.5-13.7c-9.7,9.7-18.6,2.3-22.4-2c-0.6-0.6-1.2-1.3-1.8-1.8c-2.1-1.9-4.6-3.3-7.4-3.9
          	c-4.3-1-9.9-0.6-14.9,4.7c-9.9,10.7-14.5,10.7-20.6,0s-25.9-4.6-31.3,0.8c-6.9,6.6-16.5,9.6-25.9,8.4c-10.7-1.5-25.2,8.4-30.5,22.1
          	c-3.5,9-6.4,16.1-7.9,19.9"/>
          <path class="st0" d="M728.1,52.4c0,0,0,1.8-0.1,5.1c-0.2,10-0.4,33.4,0.2,59c0.7,28.1,2.5,58.9,6.7,77.7c3.6,15.8,6.2,31.8,7.6,48
          	c5.3,63.9,10.7,175.2,10.7,175.2"/>
          <path class="st0" d="M936.2,101.9c0,0,9.2,9.1,9.9,15.2s-4.6,27.4-14.5,37.3c-9.9,9.9-51.1,58.7-69.4,71.6"/>
          <path class="st0" d="M872.2,217.7c0,0-6.1,48.8-0.8,80s22.9,75.5,22.9,75.5"/>
          <path class="st0" d="M846.5,30c4.4-7.2,5.7-15.9,3.6-24.1"/>
          <path class="st0" d="M798.7,8.6c0,0,4.6,7.6,4.6,11.7"/>
          <line class="st0" x1="747.4" y1="20.8" x2="749" y2="27.4"/>
          <path class="st0" d="M904.4,11.2c0,0,7.1,7.1-1.5,20.8"/>
          <path class="st0" d="M881.1,22.9c0,0,0-13.2,13.2-18.3"/>
          <path class="st0" d="M326.8,80.5l-6.2-29.2c0,0-3-7.6-12.7-13.7s-40.2-21.9-44.7-21.9s-23.4-9.7-30,11.2c-5.1,16-7.1,44.8-7.8,59.4
          	c-0.2,4.5-0.3,7.6-0.3,8.7c0,4.6-1.5,50.3,12.7,50.3c14.2,0,19.8-4.6,19.8-24.4S255,91.5,255,91.5s0.5-2.7,1.4-6.7
          	c1.7-7.6,4.7-19.8,7.7-26.8"/>
          <path class="st0" d="M227.6,46.2c0,0-8.1-13.7-18.8-13.7s-26.4,0-26.4,17.8c0,8.3,0.6,23.9,1.1,38.2c0.7,16.3,1.4,30.9,1.4,30.9
          	s3.1,18.3,10.7,31.5l0.1,0.3c7.7,13.4,23.3,51,33.9,47c10.6-4,16.3-8.1,12.2-30.5c-2-11-3-16.6-3.5-19.5l-0.6-2.9"/>
          <path class="st0" d="M195.1,33l-19.3-4.6c0,0-11.7-1-19.3,7.1s-14.2,20.3-14.2,39.1c0,4.9,0.1,10.5,0.2,16
          	c0.3,15.4,0.8,30.3,0.8,30.3c1.3,11.5,5.5,22.5,12.2,32c0.2,0.3,0.5,0.6,0.7,1c10.9,15.6,20.4,35.6,33.4,37.6
          	c13.2,2,17.8-0.5,13.7-13.7c-2.8-9.1-6.6-20.5-8.7-26.6c-0.9-2.7-1.5-4.4-1.5-4.4"/>
          <path class="st0" d="M142.5,96c0,0-4.3,29.5,0.8,39.1c2.5,4.7,7,11.8,9.2,19c2.3,7.5,1.9,15.2-6.1,20.1c-8.3,5.1-19.7-5.2-29.4-17.6
          	c-8.7-11.3-16-24.3-17.9-29.1c-2.3-5.8-1.5-21.3-0.1-34.6c1.1-9.9,2.5-18.7,3.1-21.3c1.5-6.1,19.3-31,27.4-34.6s21.9,3,21.9,3"/>
          <path class="st0" d="M276.9,150.7c0,0,0.6-2,1.4-5.2c2.5-9.9,7.3-31.6,4.2-45.4c-0.5-2.6-4.7-8.9-8.9-16.2c-4.8-8.3-9.7-18.1-9.4-26
          	c0.8-24.4,15.8-26.7,37.6,3.8c5.9,8.1,10.3,14.5,13.7,20c9.3,15,10.7,23.1,10.7,41.7c0,6.3-0.1,12.7-0.2,18.7
          	c-0.4,18.2-1.3,33.1-1.3,33.1s-4.6,15.8-17.8,22.4s-78.3,36.1-78.3,36.1"/>
          <path class="st0" d="M120.4,162.1c0,0-15.8,54.4-10.7,70.1s50.3,159.6,61,168.7"/>
          <path class="st0" d="M270.8,214.9c0,0-14.2,24.4-5.1,59.4s33.5,84.4,33.5,84.4"/>
          <path class="st0" d="M924.9,44.3c118.6-8,210.7-14.3,210.7-14.3"/>
          <path class="st0" d="M273.6,83.9l-17.1,0.9"/>
          <path class="st0" d="M1.5,98.1c0,0,40.7-2.2,97.5-5.1"/>
          <path class="st0" d="M728,57.4l-16.2,1.1c-133.3,8.8-255.6,16.6-292.6,18.3c-23,1-60.4,2.8-103.7,5"/>
          <path class="st0" d="M1027.3,96.2c0,0-38,2.8-90.5,6.4l-15,1.1"/>
          <path class="st0" d="M278.3,145.5l-40,2.8"/>
          <path class="st0" d="M156.1,153.9l-3.7,0.3"/>
          <path class="st0" d="M40.7,162c0,0,29.7-2.1,76.3-5.3"/>
          <path class="st0" d="M195.7,151.2l-1.2,0.1"/>
          <path class="st0" d="M326,142.2c143-9.8,296.2-20,346.1-22.6c15.6-0.8,34.8-1.9,56.2-3.2"/>
        </svg>



        <div class="content_image col-12 col-lg-6">
          <div class="image_l set_bg col-10 offset-1 col-lg-12 offset-lg-0 rellax img3" data-rellax-speed="1" style="background-image:url(<?php the_field('activites_images'); ?>);"></div>
        </div>
        <div class="content_texte col-10 offset-1 col-lg-5 offset-lg-0">
          <span class="lettrine lettrine2"><?php the_field('lettrine2'); ?></span>
          <h2 class="content_title"><?php the_field('activites_titre'); ?></h2>
          <p class="content_para"><?php the_field('activites_paragraphe'); ?></p>
          <div class="btn_access">
            <a href="<?php echo get_permalink(105); ?>" class="btn_access">
              <span class="text"><?php the_field('activites_bouton'); ?></span>
              <span class="line -right"></span>
              <span class="line -top"></span>
              <span class="line -left"></span>
              <span class="line -bottom"></span>
            </a>
          </div>
        </div>
      </section>

      <section id="content_actu" class="mt-150px">


        <h2 id="actu_title"><span class="lettrine lettrine3"><?php the_field('lettrine3'); ?></span>Les actualités</h2>
        <section id="content_actu_article" class="row">
          <?php
          $count = 0;
  				// The Query
  				$args = array ('post_type' => 'Post',
                        'posts_per_page' => '3',
		                     'order' => 'DESC');

  				$the_query = new WP_Query( $args );

  					// The Loop
  					if ( $the_query->have_posts() ) {
  				while ( $the_query->have_posts() ) {
  							$the_query -> the_post();
                $count ++;
                if ($count == 1) {?>
                <article class="actu_principal col-10 offset-1 col-lg-6 offset-lg-0">
                  <div class="actu_principal_image set_bg" style="background-image:url(<?php the_field('article_image'); ?>)"></div>
                  <div class="actu_principal_info col-12 col-md-10 col-lg-10 col-xl-10">
                    <div class="categorie col-1 <?php the_field('categorie'); ?>">
                      <p class="categorie_title"><?php the_field('categorie'); ?></p>
                    </div>
                    <!-- <span class="categorie">EXPOSITION</span> -->
                    <div class="actu_content_info col-9 offset-1">
                      <div class="actu_date col-12">
                        <p class="p-actu"><?php the_field('article_auteur'); ?></p>
                        <p class="p-actu"><?php the_time('d/m/Y') ?></p>
                      </div>
                      <h1 class="col-12"><?php the_title(); ?></h1>
                      <div class="float-right"><a class="btn_lls" href="<?php the_permalink(); ?>">Lire la suite</a></div>
                    </div>
                  </div>
                </article>

                <div class="content_actu_secondary col-12 col-lg-6">
                <?php
              }else{ ?>
                <article class="actu_secondary">
                  <div class="actu_secondary_image set_bg col-sm-6" style="background-image:url(<?php the_field('article_image'); ?>)"></div>
                  <div class="actu_secondary_info col-sm-8">
                    <div class="categorie col-sm-1 <?php the_field('categorie'); ?>"><p class="categorie_title"><?php the_field('categorie'); ?></p></div>
                    <div class="actu_content_info col-sm-9 offset-md-1">
                      <div class="actu_date col-sm-12">
                        <p class="p-actu"><?php the_field('article_auteur'); ?></p>
                        <p class="p-actu"><?php the_time('d/m/Y') ?></p>
                      </div>
                      <h1 class="col-sm-12"><?php the_title(); ?></h1>
                      <div class="float-right"><a class="btn_lls" href="<?php the_permalink(); ?>">Lire la suite</a></div>
                    </div>
                  </div>
                </article>
  							<?php
  						}
  						wp_reset_postdata();
  					}
          }
  				?>

              </div>
        </section>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_4.svg" class="tache tache4 rellax" data-rellax-speed="-2" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache-bl1.png" date-rellax-speed="2" class="tache tache-bl bl2 rellax" alt="verre-transparent">

          <svg version="1.1" id="main-interview" class="illustration illustration3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
          	 y="0px" viewBox="0 0 237.7 893.8" style="enable-background:new 0 0 237.7 893.8;" xml:space="preserve">
            <style type="text/css">
            	.st0{fill:none;stroke:#203C83;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
            </style>
            <title>main - interview</title>
            <path class="st0" d="M124.5,707.6c0,0,35.9-14.3,35-96.7s-24-77.8,0.9-138.6c3.3-8.1,5.8-13.4,9-17.8c3-4,5.5-8.4,7.4-13.1
            	c1.7-4.5,3-9.1,4-13.7c2.3-13.8,13.4-29.9,10.6-40.5s-14.7-16.6-25.8-10.1s-21.2,36.9-28.6,50.2s-24,53-26.3,57.6
            	s-10.6,23-15.2,26.7"/>
            <path class="st0" d="M183.4,653.5l0.2,18.9c0,0-14,11.3-35.2,8.1c0,0-1.4,29.9-4.1,47.9s-7.8,164-7.8,164"/>
            <path class="st0" d="M118,389.8c0,0-5.5-6-12.9,2.3s-61.3,90.7-65.9,93.5s-18.4,9.7-20.3,24c-1.9,14.3,5.1,136.8,11.5,168.1
            	c8.8,44.7-19.8,149.7-29,207.3"/>
            <path class="st0" d="M191.3,402.2c0,0,19.3,9,23.2,10.4s14.1,7.9-0.4,14.5c-12.1,5.5-18.4,4.5-26.8,3.4"/>
            <path class="st0" d="M186.8,462c9.2,6.7,26.9,19.6,34.2,26.2c9.9,8.9,10.8,14,10.8,21.6c0,7.6-6.8,18-15,24
            	c-5.6,4.4-10.7,9.2-15.5,14.5c-7,7.5-12.7,14.3-14.5,14.9c-0.5,0.2-1.1,0.4-1.8,0.7c-4,1.5-11,3.5-13.1-8.6
            	c-2.3-13.3,1.5-26.2,14-40.3l0,0c0.8-0.9,1.7-1.9,2.6-2.8c14.5-15.2,14.5-13.5,14.5-13.5"/>
            <path class="st0" d="M186.5,561.9c-0.3-1-0.8-2-1.4-2.8c-2.4-3.5-6.9-8.5-8-9.1c-1.5-0.9,4.6-8,5.4-9c0.9-1.2,1.9-2.2,3-3.2l0,0
            	c1.5-1.3,3.3-2.4,4.9-1.7c5,2,10.2,10.9,11,12.3l0.1,0.2"/>
            <path class="st0" d="M223.4,528.8c0,0-3.6,22.5-2.4,35.8s2.8,20-11.6,32.1s-44.4,37.8-49.6,31.6"/>
            <path class="st0" d="M159.8,605.7c0,0,23.3-24.7,36.1-34.7"/>
            <path class="st0" d="M180.7,618.4c0,0-1.4-6.8-5.9-9.9s-7-1.7-8.2-0.6s-7,6-7,6"/>
            <path class="st0" d="M159.4,619.2c0,0,4.6,4.4,6.3,8"/>
            <path class="st0" d="M211.6,595.5c0,0,0.9,14.8,0.1,22s-5.1,15.9-18.3,26.9s-35.1,20.1-37.8,12"/>
            <path class="st0" d="M158.4,641.6c0,0,6.7-3,22.4-21.2"/>
            <path class="st0" d="M174.4,655.6c2-1.2,3.8-3.7,3.2-6.1c-1.1-4.4-4.2-10.4-7.9-8.6c-5.2,2.5-10.9,7.4-9.1,10.5l1.8,3.1
            	c0,0,2.1,4,2.5,4.5C165.9,660.1,171,657.7,174.4,655.6z"/>
            <path class="st0" d="M156.7,394.9c-0.7,1.4-3.3,4.5,1.4,6s14.2,4.6,15.7,5c2.1,0.5,4,0.9,6.9-5.9s6.4-15.2-1.9-19.2
            	c-6.6-2.9-11.6-4.7-15.2-0.2S158.5,391.5,156.7,394.9z"/>
            <path class="st0" d="M236.2,283.8V172.4c0-2.2-0.7-4.4-2.1-6.2l-24.1-31c-2.3-1.8-5.4-2.5-8.3-1.9L74.2,144.5c0,0-4.5,0.4-4.3,13.8
            	c0.2,14.5,0,102.7,0,102.7"/>
            <path class="st0" d="M205.8,248.5c1.4-4.5,0-115,0-115"/>
            <path class="st0" d="M116,141.4C101.3,129.8,94.8,91.6,96.2,50c0.1-4.6,0.8-9.1,2.1-13.5C107.2,7.1,136,1.5,151.5,1.5
            	c15.8,0,51.6,7.6,54.7,46.3s-0.1,76.7-17.3,87.3"/>
            <path class="st0" d="M96,55.2c0,0,32.9-14,57.7-13s47.5,13.5,52.2,15.9"/>
            <path class="st0" d="M96.4,70.7c0,0,30-11.6,58.4-10.4s46.8,10.4,52.3,13.2"/>
            <path class="st0" d="M188.8,288.9c0,0.6,0,1.3,0,2c0.1,18.5-0.3,51.9-0.8,89.6"/>
            <path class="st0" d="M117.3,470.2v-0.7c0.2-9.7,1.8-110.4,3.1-163c0.1-4.1,0.2-8,0.3-11.5"/>
            <line class="st0" x1="185.5" y1="537.8" x2="185.5" y2="537.7"/>
            <path class="st0" d="M184.7,580.5c0,0,0.1-6.1,0.3-16.6"/>
            <path class="st0" d="M187.6,406.6L187.6,406.6c-0.1,7.9-0.2,15.8-0.4,23.8c-0.2,10.6-0.3,21.2-0.5,31.6c-0.3,18.8-0.6,36.8-0.9,52.9
            	l0,0"/>
            <path class="st0" d="M236.2,283.8c0,0.5-0.4,0.9-0.9,0.9l-46.5,4.1c0-6.4-0.1-10.8-0.3-12.5c-28.3-22.4-66-4.8-67-1.4
            	c-0.2,0.7-0.5,8.2-0.8,20l-19,1.7c-1.7,0.2-3.4-0.5-4.5-1.9L70.1,263c-0.3-0.4-0.2-1.1,0.2-1.4c0.1-0.1,0.3-0.2,0.4-0.2l132.5-12.2
            	c1.7-0.1,3.4,0.5,4.5,1.8l28.2,32.2C236.1,283.4,236.2,283.6,236.2,283.8z"/>
          </svg>

        <div class="btn_access hey">
          <a href="<?php echo get_permalink(47); ?>" class="btn_access">
            <span class="text">VOIR TOUS LES ARTICLES</span>
            <span class="line -right"></span>
            <span class="line -top"></span>
            <span class="line -left"></span>
            <span class="line -bottom"></span>
          </a>
        </div>
      </section>

      <section id="content_realisation" class="mt-200px">
        <span class="lettrine lettrine4"><?php the_field('lettrine4'); ?></span>
        <h2 id="actu_title">Réalisations</h2>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache-bl4.png" date-rellax-speed="2" class="tache tache-bl bl3 rellax" alt="verre-transparent">
        <svg version="1.1" id="main-vase" class="illustration illustration4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        	 viewBox="0 0 412.6 647.7" style="enable-background:new 0 0 412.6 647.7;" xml:space="preserve">
          <style type="text/css">
          	.st0{fill:none;stroke:#203C83;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
          </style>
          <title>main - vase</title>
          <path class="st0" d="M123,524.4c0,0,32.2-28.9,102.6-17.1c8.5,1.4,19.2-3.1,28.7-8.7c11.1-6.6,21-14.9,29.5-24.5
          	c5-5.6,12-10.8,18.2-13c5.3-1.9,11.1,0.8,13,6.1c0.4,1.1,0.6,2.3,0.6,3.4c0.3,14.8-14.5,29.7-16.1,32.5c-2,3.3-23.6,21.7-31.3,29.2
          	l-22.5,22.2"/>
          <path class="st0" d="M84.4,646.2c0,0,41.4-60.6,88.3-53.7s87.8-3,112.4-11.8s78.9-21.8,89.8-45.4s39.8-81.3,36-99.6
          	c-3-14.3-20.1-11.4-26.8,2.4c-2.3,4.8-26.2,57.5-30.1,63.5s-33.4,17.1-33.4,17.1"/>
          <path class="st0" d="M348.2,461.2c0,0,8.7-19.6,20.5-46.2c7.8-17.5,25.7-15.8,25.2-3.6c0,0.5,0,1-0.1,1.5
          	c-4.4,16.1-5.3,18.4-5.3,18.4"/>
          <path class="st0" d="M26.2,550c0,0,43.7-47.3,61.1-55.7c29.1-14.1,82.6-19,82.6-19"/>
          <path class="st0" d="M163.4,192.4c0,0,33.6-16.5,49-18.2s43.5-9.7,45,6.3c1.2,12.9-39.9,21.7-49.5,26.8s-34.8,39.3-34.8,39.3"/>
          <path class="st0" d="M1.5,269.9c0,0,83.8-40.5,88.3-45.6s24.5-20.5,42.2-25.1s37.6-22.8,37.6-22.8s24.9-19.1,26.6-20.2"/>
          <path class="st0" d="M25.4,371.4c0,0,75.8-63.3,99.2-66.7s55.3-4.6,55.3-4.6"/>
          <path class="st0" d="M323.3,156.9c0,0,3.1-3.7,7.6-0.6c4.4,3,6.8,5.7,6.6,9.9S332,179,328.2,178s-6.8-0.4-6.5-6.8
          	S323.3,156.9,323.3,156.9z"/>
          <path class="st0" d="M321.4,191.1c0,0,8.2-12.5,16-3s-6.6,28.3-9.9,29.6s-13.9,5.1-15-0.4s-0.6-12.9,7-20.5
          	C321,195.1,321.4,191.1,321.4,191.1z"/>
          <path class="st0" d="M321.2,230.6c0,0,2.4-7,8.3-6.7s10.5,7.7,7.7,14.4s-15.1,19.4-21.9,15.8S310.4,241.3,321.2,230.6z"/>
          <path class="st0" d="M327.9,262.5c0,0,3.4-7.4,12.4-1.4s-4.4,26.6-8.1,17.1S327.9,262.5,327.9,262.5z"/>
          <path class="st0" d="M199.3,6.3c31.5-5.3,94-8.7,131.1,3.8c27.9,9.5,4.4,13.1-8.9,15.4c-4.4,0.8-8.8,1.2-13.2,1.4
          	c-19.1,0.7-88.9,2.3-114.7-5.3C172.5,15.2,185.6,8.5,199.3,6.3z"/>
          <path class="st0" d="M319.9,196.3C323.6,135.5,344,18.2,344,18.2"/>
          <path class="st0" d="M324.8,252.2c11.2,47.5,35.4,107,32.1,161.1c-4.2,69.5-44.8,118.9-52.1,124.2s-59.3,16.7-59.3,16.7"/>
          <path class="st0" d="M320.7,231.2c-0.6-3.8-1-7.5-1.2-11.1"/>
          <path class="st0" d="M181.6,15.8c0,0,16.4,145.1,15.9,161.6"/>
          <path class="st0" d="M183,504.8c-12.1-22.4-24.5-54.9-25.7-93c-2.2-69.6,41-147.2,43.2-197.7"/>
          <path class="st0" d="M236.8,179.2c0,0-1.2-5.1,2.4-6.6c3.3-1.4,16.1-4,18.5,2.3c2.1,5.4-3.3,10.6-9.1,12.4
          	C243.1,188.9,239,191.7,236.8,179.2z"/>
          <path class="st0" d="M299.8,464.6c3.4-4.5,10-5.7,14.4-2.1c0.3,0.3,0.6,0.5,0.9,0.9c4,4.3-5.4,23.2-12.1,23.2s-12.9-6-9.8-12
          	C295.2,471.1,297.4,467.8,299.8,464.6z"/>
          <path class="st0" d="M332.6,156.4c0,0,1.9-2.2,5.4,3.7s-1.4,12.9-2.6,14.1c-0.9,0.9,0-2.8,0.4-3.8s2.4-3.4,1.1-7.3
          	C336.1,160.6,334.6,158.3,332.6,156.4z"/>
          <path class="st0" d="M337.1,258.4c0,0,0.9-2.3,5.2,2s2,11.7,1.4,13c-0.5,1-0.7-2.4-0.6-3.4s1.1-3.5-0.9-6.6
          	C340.8,261.3,339.1,259.7,337.1,258.4z"/>
          <path class="st0" d="M326.6,214.9c0,0,3.9-3.8,2.1-7.6s-6.4-5.7-10.2-2.4s-9.3,6.9-7.6,11.6s9,4,11.3,2.1S326.6,214.9,326.6,214.9z"
          	/>
          <path class="st0" d="M314.7,243.9c1.2-1.6,4.3-5.1,8.5-2.4c2.5,1.6,3.1,5,1.5,7.4c-0.2,0.4-0.5,0.7-0.9,1c-3.1,2.8-8.4,6.8-11.5,3.5
          	S313.3,245.9,314.7,243.9z"/>
        </svg>




        <section id="content_realisation_article">
          <?php
            $count = 0;
						$posts = get_field('realisations_featured');

						if( $posts ): ?>

						    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post);
                    $count ++;
										if ($count == 1) {?>
                      <div class="realisation_img col-10 offset-1 col-lg-4 offset-lg-0" style="background-image:url(<?php the_field('realisation_image')?>)"></div>
                      <div class="content_realisation_img col-lg-4">

                    <?php }else if($count == 2){ ?>
                      <div class="realisation_img col-sm-12" style="background-image:url(<?php the_field('realisation_image')?>)"></div>

                    <?php }else if($count == 3){ ?>
                      <div class="realisation_img col-sm-12" style="background-image:url(<?php the_field('realisation_image')?>)"></div>
                    </div>

                    <?php }else if($count == 4){ ?>
                    <div class="realisation_img col-10 offset-1 col-lg-4 offset-lg-0" style="background-image:url(<?php the_field('realisation_image')?>)"></div>

                  <?php } ?>
						    <?php endforeach; ?>

						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>

        </section>
        <div class="btn_access">
          <a href="<?php echo get_permalink(42); ?>" class="btn_access btn_access_actu">
            <span class="text">VOIR TOUTES LES REALISATIONS</span>
            <span class="line -right"></span>
            <span class="line -top"></span>
            <span class="line -left"></span>
            <span class="line -bottom"></span>
          </a>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_1.svg" data-rellax-speed="-2" class="tache tache5 rellax" alt="tache">
      </section>

      <section id="content_faq" class="mt-150px">
          <svg version="1.1" id="main-question" class="illustration illustration7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
          	 y="0px" viewBox="0 0 247 675" style="enable-background:new 0 0 247 675;" xml:space="preserve">
          <style type="text/css">
          	.st0{fill:none;stroke:#203C83;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
          	.st1{fill:none;stroke:#203C83;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;}
          </style>
          <title>main - question</title>
          <path class="st0" d="M153.2,268.8c0,0,8.6-28.9,8.6-81.6s5.9-66,5.9-103.6s-0.8-79.4,22.6-81.9s24.2,19.2,24.2,47.6
          	s2.5,75.2,3.3,93.6s0,66.8-0.8,82.7c-0.8,32.6,15,110.3,17.5,126.2"/>
          <path class="st0" d="M216.9,673.5c0,0-12.5-112-8.4-124.5s25.9-58.5,26.7-86.1s2.5-53.5,8.4-77.7s-3.3-25.9-18.4-43.5
          	s-59-60.5-66.5-68s-25.6-14.3-49.8-21s-48.4-14.4-51.7,5.6s15.1,34,32.7,41.6s37.3,16.4,38.1,18.9s28.7,59.6,32.1,67.2
          	s31.8,40.1,42.6,50.1"/>
          <path class="st1" d="M166.3,385c0,0,16.3,7.5,22.3,6"/>
          <path class="st1" d="M168.2,391.3c0,0,14.7,11.3,20,11.9"/>
          <path class="st1" d="M164.1,415.1c0,0,23.2,36,29.5,40.7"/>
          <path class="st0" d="M157.5,394.3c1.2-1.9,2.5-3.7,3.8-5.6"/>
          <path class="st0" d="M144,418.6c1.4-3,2.9-6,4.5-9.1"/>
          <path class="st0" d="M129.3,492.8c0,0-2.2-14.3,2.7-37.4"/>
          <path class="st1" d="M186,76.4c0,0,4.7-3.4,11.3,0.6"/>
          <path class="st1" d="M180.1,86.1c0,0,13.5-3.4,23.5,0.3"/>
          <path class="st1" d="M179.8,158.5c0,0,4.4-1.9,7.8-1.3"/>
          <path class="st1" d="M174.8,174.8c0,0,4.7-2.5,12.5,0.3s18.5,1.9,18.5,1.9"/>
          <path class="st1" d="M193.2,185.1c0,0,4.7-0.6,6.3-1.9"/>
          <path class="st1" d="M183.2,295.7c0,0,4.7-14.4,13.2-21.6"/>
          <path class="st1" d="M191.7,303.2c0,0,8.5-14.7,9.4-16"/>
          <path class="st1" d="M194.8,307c0,0,12.2-10,17.2-10"/>
          <path class="st0" d="M155,255.9c0,0-9.4-21.6-14.7-30.4s-16.3-17.2-20.4-19.7s-27.3-4.1-33.5-0.6s-11.9,20.1-11.9,25.7
          	c0.2,5,0.7,10,1.6,15"/>
          <path class="st1" d="M97.7,214.9c0,0,6.3,0.9,9.7-1.9"/>
          <path class="st0" d="M90.4,301.2c0,0,15,53.5,19,71.9s9,38.6,28.4,38.9s21.3-22.4,18-32.8"/>
          <path class="st0" d="M57.8,668c0,0-10-117.4-19.6-144.1s-28-61.8-28.4-73.5s-1.7-48-7.1-69.8s10.4-56.8,10.4-56.8
          	s10.9-16.7,28.4,0.4s46,64.8,51.4,70.2s21.7,21,28,29.1s13.2,13.8,0.9,25.7S78.6,426,74.5,422.6s-22.3-21.6-31-35.1
          	s-31.7-43.9-33.5-52.6"/>
          <path class="st1" d="M25.3,337.1c0,0,4.4-4.4,6.3-5.3"/>
          <path class="st1" d="M35.3,335.5c0,0-4.7,4.4-5.6,6.6"/>
          <path class="st1" d="M61.6,380.6c0,0-3.1,3.1-3.8,5"/>
          <path class="st1" d="M62.2,383.4c0,0-3.1,3.8-3.1,6.6"/>
          <path class="st1" d="M8.1,350.2c0,0,15.4,8.5,18.8,14.1"/>
          <path class="st1" d="M9.6,361.5c0,0,19.7,6.9,21.6,8.8"/>
          <path class="st1" d="M9.3,372.5c0.9-1.6,19.1-0.9,22.9,4.7"/>
          <path class="st0" d="M56.6,267.2c0,0-11.6,0-19.7,4.7s-7.8,23.5-5.6,31s11.6,22.3,11.6,22.3"/>
          <path class="st1" d="M55.7,291.3c0,0-7.5-0.9-11.3,5.3"/>
          <path class="st1" d="M57.6,297.6c0,0-4.4,3.8-7.5,4.7"/>
          <path class="st1" d="M102.4,377.8c0,0-4.7,2.5-6.6,4.4"/>
          <path class="st1" d="M104.2,382.2c-2.7,0.5-5.3,1.8-7.2,3.8"/>
          <path class="st0" d="M140.9,412.6c0,0,5.6,11.6,6.6,16.3s3.1,19.7-5.6,23.8s-13.8,2.2-17.5-5"/>
          <path class="st1" d="M137.8,292.3c0,0,4.7-18.5,12.9-23.5"/>
          <path class="st1" d="M153.1,297.6c0,0,6.3-13.2,7.8-19.7"/>
          <path class="st1" d="M160.6,297c0,0,6.9-8.1,8.5-11.9"/>
          <path class="st1" d="M155.3,307c0,0,17.5-0.6,23.8-12.2"/>
          <path class="st1" d="M129.6,345.5c0,0-5.6-2.8-8.5-3.1"/>
          <path class="st1" d="M126.8,327c0,0-6.6,1.9-7.2,3.5"/>
          <path class="st0" d="M96.7,250c0,0,8.1,1.9,6.3,12.5c-1.2,6.5-5.3,18.2-20.7,13.2s-23.2-12.9-18.5-24.1S88.3,247.8,96.7,250z"/>
          <path class="st0" d="M113.1,420.1c0,0-7.3-6.9-10.4-2.1s-6.7,12.5-5,15s14,14,19.8,12.5s11.7-6.1,9.2-11.1S113.1,420.1,113.1,420.1z
          	"/>
          <path class="st0" d="M149.7,376.8c-1.8-5.2-6.9-8.5-12.5-8c-9.9,0.6-14.9,3.9-15.9,7.3s0.5,21.1,5.3,26.3s10.5,5.8,16.5,4.2
          	s8.1-5.8,7.9-17.1S149.7,376.8,149.7,376.8z"/>
          <path class="st0" d="M124.1,424.3c0,0,9.1-7.2,13.3-2.4s9.7,16.8,7,24.6s-16.5,8.1-19.4-0.5"/>
          <path class="st1" d="M86.2,425.1c0,0,3.5-7.9,7.1-10.6"/>
        </svg>



        <div class="accordion col-10 offset-1 col-md-8 offset-md-2" id="accordionExample">
          <?php
            $count = 0;
            if( have_rows('foire_aux_questions') ):

                while ( have_rows('foire_aux_questions') ) : the_row();
                $count ++;
                ?>

                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0 card-flex collapsed" data-toggle="collapse" data-target="#collapse_<?php echo $count ?>" aria-expanded="false" aria-controls="collapseOne">
                      <button class="btn btn-link " type="button" >
                        <?php the_sub_field('faq_questions'); ?>
                        <div class="plus">
                          <div class="horizontal"></div>
                          <div class="vertical"></div>
                        </div>
                      </button>

                    </h5>
                  </div>
                  <div id="collapse_<?php echo $count ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <p><?php the_sub_field('faq_reponse'); ?></p>
                    </div>
                  </div>
                </div>
          <?php
              endwhile;
              endif;
          ?>

      </section>

    </section>



    <?php get_footer(); ?>



  </body>

  <script src="<?php bloginfo('template_directory'); ?>/js/menu.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/easings.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/menu3.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js'></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/devenirmembre.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.youtubebackground.js"></script>
  <script>
    $(document).ready(function() {

          $('#video').YTPlayer({
          fitToBackground: true,
          videoId: '<?php the_field('video_presentation')?>'
      });
      $('#video').YTPlayer({
          fitToBackground: true,
          videoId: '<?php the_field('video_presentation')?>',
          playerVars: {
            modestbranding: 0,
            autoplay: 1,
            controls: 0,
            showinfo: 0,
            branding: 0,
            rel: 0,
            autohide: 0,
            start: 59,
            disablekb: 0
          }
      });

    })

  </script>
  <script>
    // Accepts any class name
    var rellax = new Rellax('.rellax');
  </script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>
  <script>
  var mq = window.matchMedia( "(min-width:768px)" );
  if (mq.matches) {
    new Vivus('mains-team', {duration: 200});
    new Vivus('main-soufflage', {duration: 200});
    new Vivus('main-interview', {duration: 200});
    new Vivus('main-vase', {duration: 200});
    new Vivus('main-question', {duration: 200});
  }
  </script>
</html>
