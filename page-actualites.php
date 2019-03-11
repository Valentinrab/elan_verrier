<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Elan Verrier - Actualités</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="bs-<?php bloginfo('template_directory'); ?>/css/bootstrap-grid.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/actualites.css">

</head>

<body>

  <?php
    get_header();
  ?>

  <section class="container">
    <main class="container-main">
      <div class="title-container">
        <h1 class="main-title">Actualités</h1>
        <div class="filter-container">
          <div class="when-container">
            <button href="#" class="btn_access">CATÉGORIE</button>
          </div>
          <div class="what-container">
            <button href="#" class="btn_access">DATE</button>
          </div>
        </div>
      </div>
      <section id="content_actu" class="mt-150px">
        <h2 id="actu_title">Les actualités</h2>
        <section id="content_actu_article" class="row">
          <article class="actu_principal col-12 col-md-6 col-lg-4">
            <div class="actu_principal_image set_bg" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea5.jpg')"></div>
            <div class="actu_principal_info col-11">
              <div class="categorie rencontre col-1"><p>RENCONTRE</p></div>
              <!-- <span class="categorie">EXPOSITION</span> -->
              <div class="actu_content_info col-9 offset-1">
                <div class="actu_date col-12">
                  <p>Valentin Rabier</p>
                  <p>02/08/19</p>
                </div>
                <h1 class="col-12">Ceci est le titre de mon article</h1>
                <p class="actu_content_info_para">Ceci est le début de mon article que je coupe pour pas qu'on voit tout le contenu directement !</p>
                <div class="float-right"><a href="#" class="btn_access">LIRE LA SUITE</a></div>
              </div>
            </div>
          </article>
          <article class="actu_principal col-12 col-md-6 col-lg-4">
            <div class="actu_principal_image set_bg" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea5.jpg')"></div>
            <div class="actu_principal_info col-11">
              <div class="categorie expo col-1"><p>EXPOSITION</p></div>
              <!-- <span class="categorie">EXPOSITION</span> -->
              <div class="actu_content_info col-9 offset-1">
                <div class="actu_date col-12">
                  <p>Valentin Rabier</p>
                  <p>02/08/19</p>
                </div>
                <h1 class="col-12">Ceci est le titre de mon article</h1>
                <p class="actu_content_info_para">Ceci est le début de mon article que je coupe pour pas qu'on voit tout le contenu directement !</p>
                <div class="float-right"><a href="#" class="btn_access">LIRE LA SUITE</a></div>
              </div>
            </div>
          </article>
          <article class="actu_principal col-12 col-md-6 col-lg-4">
            <div class="actu_principal_image set_bg" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea5.jpg')"></div>
            <div class="actu_principal_info col-11">
              <div class="categorie expo col-1"><p>EXPOSITION</p></div>
              <!-- <span class="categorie">EXPOSITION</span> -->
              <div class="actu_content_info col-9 offset-1">
                <div class="actu_date col-12">
                  <p>Valentin Rabier</p>
                  <p>02/08/19</p>
                </div>
                <h1 class="col-12">Ceci est le titre de mon article</h1>
                <p class="actu_content_info_para">Ceci est le début de mon article que je coupe pour pas qu'on voit tout le contenu directement !</p>
                <div class="float-right"><a href="#" class="btn_access">LIRE LA SUITE</a></div>
              </div>
            </div>
          </article>
          <article class="actu_principal col-12 col-md-6 col-lg-4">
            <div class="actu_principal_image set_bg" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea5.jpg')"></div>
            <div class="actu_principal_info col-11">
              <div class="categorie rencontre col-1"><p>RENCONTRE</p></div>
              <!-- <span class="categorie">EXPOSITION</span> -->
              <div class="actu_content_info col-9 offset-1">
                <div class="actu_date col-12">
                  <p>Valentin Rabier</p>
                  <p>02/08/19</p>
                </div>
                <h1 class="col-12">Ceci est le titre de mon article</h1>
                <p class="actu_content_info_para">Ceci est le début de mon article que je coupe pour pas qu'on voit tout le contenu directement !</p>
                <div class="float-right"><a href="#" class="btn_access">LIRE LA SUITE</a></div>
              </div>
            </div>
          </article>
          <article class="actu_principal col-12 col-md-6 col-lg-4">
            <div class="actu_principal_image set_bg" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea5.jpg')"></div>
            <div class="actu_principal_info col-11">
              <div class="categorie atelier col-1"><p>ATELIER</p></div>
              <!-- <span class="categorie">EXPOSITION</span> -->
              <div class="actu_content_info col-9 offset-1">
                <div class="actu_date col-12">
                  <p>Valentin Rabier</p>
                  <p>02/08/19</p>
                </div>
                <h1 class="col-12">Ceci est le titre de mon article</h1>
                <p class="actu_content_info_para">Ceci est le début de mon article que je coupe pour pas qu'on voit tout le contenu directement !</p>
                <div class="float-right"><a href="#" class="btn_access">LIRE LA SUITE</a></div>
              </div>
            </div>
          </article>

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

</html>
