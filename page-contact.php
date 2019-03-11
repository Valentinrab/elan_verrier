<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - Contact</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/contact.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>

  <?php
    get_header();
  ?>

  <section class="global">
    <div>
      <img id="tache1-agenda" src="<?php bloginfo('template_directory'); ?>/images/tache_5.svg" alt="tache5">
      <img id="tache2-agenda" src="<?php bloginfo('template_directory'); ?>/images/tache_6.svg" alt="tache6">
    </div>
    <section class="container">
      <main class="container-main">
        <div class="title-container">
          <h1 class="main-title">Nous contacter</h1>
        </div>
        <div class="row" id="row-glob">
          <div class="col-12 col-lg-6" id="col-right">
            <div class="offset-1 col-10 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
              <h2 class="title-agenda">Jérome Bloux</h2>
              <p class="p-atelier">Enseignant et Président de l’association jeromebloux@adresse.com</p>
              <h2 class="title-agenda title-agenda-2">Adresse de l’établissement</h2>
              <p class="p-atelier">Enseignant et Président de l’association jeromebloux@adresse.com</p>
            </div>
          </div>
          <div class="col-12 col-lg-6" id="col-left">
            <iframe src="https://snazzymaps.com/embed/139372" width="100%" height="100%" style="border:none;"></iframe>
          </div>

        </div>
      </main>
    </section>
  </section>

  <?php
    get_footer();
  ?>

</body>

</html>
