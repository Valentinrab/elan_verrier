<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - L'agenda</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/agenda.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/agenda.js"></script>
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
            <div class="wrap 1">
              <img src="<?php bloginfo('template_directory'); ?>/images/agenda-img.jpg" class="img-event" alt="img-event">
              <div class="event-group">
                <p class="event-date">17</p>
                <p class="event-hour">14h45</p>
              </div>
              <div class="desc-wrap">
                <h3 class="event-title">Évenement</h3>
                <p>Bienvenue à trop bien trop bien trop bien trop bien bidule pour faire plein de trucs trop bien.</p>
              </div>
            </div>
            <div class="wrap 2">
              <img src="<?php bloginfo('template_directory'); ?>/images/agenda-img.jpg" class="img-event" alt="img-event">
              <div class="event-group">
                <p class="event-date">17</p>
                <p class="event-hour">14h45</p>
              </div>
              <div class="desc-wrap">
                <h3 class="event-title">Évenement</h3>
                <p>Bienvenue à l'évenement bidule pour faire plein de trucs trop bien.</p>
              </div>
            </div>
            <div class="wrap 3">
              <img src="<?php bloginfo('template_directory'); ?>/images/agenda-img.jpg" class="img-event" alt="img-event">
              <div class="event-group">
                <p class="event-date">17</p>
                <p class="event-hour">14h45</p>
              </div>
              <div class="desc-wrap">
                <h3 class="event-title">Évenement</h3>
                <p>Bienvenue à l'évenement bidule pour faire plein de trucs trop bien.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="wrap-line 2">
          <h2 class="date-title">FÉVRIER</h2>
          <div class="wrap-group 2">
            <div class="wrap 4">
              <img src="<?php bloginfo('template_directory'); ?>/images/agenda-img.jpg" class="img-event" alt="img-event">
              <div class="event-group">
                <p class="event-date">17</p>
                <p class="event-hour">14h45</p>
              </div>
              <div class="desc-wrap">
                <h3 class="event-title">Évenement</h3>
                <p>Bienvenue à l'évenement bidule pour faire plein de trucs trop bien.</p>
              </div>

            </div>
            <div class="wrap 5">
              <img src="<?php bloginfo('template_directory'); ?>/images/agenda-img.jpg" class="img-event" alt="img-event">
              <div class="event-group">
                <p class="event-date">17</p>
                <p class="event-hour">14h45</p>
              </div>
              <div class="desc-wrap">
                <h3 class="event-title">Évenement</h3>
                <p>Bienvenue à l'évenement bidule pour faire plein de trucs trop bien.</p>
              </div>
            </div>
            <div class="wrap 6">
              <img src="<?php bloginfo('template_directory'); ?>/images/agenda-img.jpg" class="img-event" alt="img-event">
              <div class="event-group">
                <p class="event-date">17</p>
                <p class="event-hour">14h45</p>
              </div>
              <div class="desc-wrap">
                <h3 class="event-title">Évenement</h3>
                <p>Bienvenue à l'évenement bidule pour faire plein de trucs trop bien.</p>
              </div>
            </div>
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

</html>
