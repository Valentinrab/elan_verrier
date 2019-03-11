<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Elan Verrier - Membres</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/membres.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
</head>

<body>

  <?php
    get_header();
  ?>

  <section class="container">
    <main class="container-main">
      <h1 class="main-title">Les membres</h1>
      <div class="container-wrap">
        <div class="wrap 1">
          <img src="<?php bloginfo('template_directory'); ?>/images/taches/membres_1.svg" class="tache tache1" alt="tache">
          <div class="image-membre" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/head1.jpg');"></div>
          <div class="desc-wrap">
            <h3 class="name-bold">Jêrome Bloux</h3>
            <p>Président</p>
          </div>
        </div>
        <div class="wrap 2">
          <img src="<?php bloginfo('template_directory'); ?>/images/taches/membres_2.svg" class="tache tache2" alt="tache">
          <div class="image-membre" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/head2.jpg');"></div>
          <div class="desc-wrap">
            <h3 class="name-bold">Amélie Brun</h3>
            <p>Vice présidente</p>
          </div>
        </div>
        <div class="wrap 3">
          <img src="<?php bloginfo('template_directory'); ?>/images/taches/membres_3.svg" class="tache tache3" alt="tache">
          <div class="image-membre" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/head3.jpg');"></div>
          <div class="desc-wrap">
            <h3 class="name-bold">Louise Semendjan</h3>
            <p>Trésorière</p>
          </div>
        </div>
        <div class="wrap 4">
          <img src="<?php bloginfo('template_directory'); ?>/images/taches/membres_1.svg" class="tache tache1" alt="tache">
          <div class="image-membre" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/head4.jpg');"></div>
          <div class="desc-wrap">
            <h3 class="name-bold">Julie Bagre</h3>
            <p>Présidente-adjointe</p>
          </div>
        </div>
        <div class="wrap 5">
          <img src="<?php bloginfo('template_directory'); ?>/images/taches/membres_2.svg" class="tache tache2" alt="tache">
          <div class="image-membre" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/head5.jpg');"></div>
          <div class="desc-wrap">
            <h3 class="name-bold">Maxime Bonnet</h3>
            <p>Vice président adjoint</p>
          </div>
        </div>
        <div class="wrap 6">
          <img src="<?php bloginfo('template_directory'); ?>/images/taches/membres_3.svg" class="tache tache3" alt="tache">
          <div class="image-membre" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/head6.jpg');"></div>
          <div class="desc-wrap">
            <h3 class="name-bold">Valentin Rabier</h3>
            <p>Trésorier Adjoint</p>
          </div>
        </div>
      </div>
      <div class="container-form col-12">
        <h2 class="form-title">Nous rejoindre</h2>
        <div id="form-desc" class="row">
          <div id="form-left" class="col">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Duis</p>
          </div>
          <div id="form-right" class="col">
            <button href="#" class="btn_access">TÉLÉCHARGER LE FORMULAIRE</button>
          </div>
        </div>
      </div>
    </main>
  </section>

  <?php
    get_footer();
  ?>

</body>

</html>
