<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - Ateliers</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ateliers.css">
  <link rel="stylesheet" href="bs-<?php bloginfo('template_directory'); ?>/css/bootstrap-grid.css">
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
          <h1 class="main-title">Les ateliers</h1>
        </div>
        <div class="row" id="row-glob">
          <div class="col-12 col-lg-6" id="col-left" style="background-image: url(<?php bloginfo('template_directory'); ?>/images/atelier1.jpg);">

          </div>
          <div class="col-12 col-lg-6" id="col-right">
            <div class="offset-1 col-10 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
              <h2 class="title-atelier">Verre à chaud</h2>
              <p class="p-atelier">Équipé de deux fours de fusion à 1200° C, d'arches de recuisson (fours où l'on dépose les pièces après le soufflage) et d'équipements de réalisation à chaud. Ce plateau technique voit les maîtres verriers transmettre leur
                savoir-faire
                du CAP au DMA avec passion.
                Il n'est pas rare d'apercevoir des artistes assister les souffleurs de verre à la modélisation de leurs idées, dans une collaboration et un échange avec les étudiants.</p>
            </div>
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
