<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - Contact</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/contact.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon-elan-verrier.png" type="image/png">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
  <script>document.documentElement.className = 'js';</script>

</head>

<body>

  <?php
    get_header();
  ?>

  <section class="global">
    <div>
      <img id="tache1-agenda" src="<?php bloginfo('template_directory'); ?>/images/tache_5.svg" alt="tache5">

    </div>
    <section class="container">
      <main class="container-main">
        <div class="title-container">
          <h1 class="main-title">Nous contacter</h1>
        </div>
        <div class="row" id="row-glob">
          <div class="col-12 col-lg-6" id="col-right">
            <div class="offset-1 col-10 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
              <h2 class="title-agenda"><?php the_field('nom_responsable'); ?></h2>
              <p class="p-atelier"><?php the_field('contact_fonction'); ?></p>
              <p class="p-atelier"><?php the_field('contact_mail'); ?></p>
              <h2 class="title-agenda title-agenda-2"><?php the_field('contact_titre_adresse'); ?></h2>
              <p class="p-atelier"><?php the_field('contact_adresse'); ?></p>
            </div>
          </div>
          <div class="col-12 col-lg-6" id="col-left" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/maps.jpg)">

          </div>

        </div>
      </main>
    </section>
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

</html>
