<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elan Verrier - Accueil</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/accueil.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="<?php bloginfo('template_directory'); ?>/js/faq.js"></script> -->

  </head>
  <body>

    <header>
      <div class="content_menu">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="logo élan verrier" id="logo">
        <div class="content_menu_right">
          <a href="#" class="btn_menu">DEVENIR MEMBRE</a>
          <div id="menu_burger">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
          </div>
        </div>

          <!-- <nav id="nav_menu"> -->
          <!-- <a href="#">Les ateliers</a>
          <a href="#" >Réalisations</a>
          <a href="#" >Les membres</a>
          <a href="#" >Agenda</a>
          <a href="#" >Actualités</a> -->
          <!-- </nav> -->

      </div>
    </header>

    <section class="container">

      <main id="content_video">
        <!-- <img src="<?php bloginfo('template_directory'); ?>/images/accueil.jpg" class="video" alt="image de présentation d'Elan Verrier"> -->
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/accueil_1.svg" class="tache tache1" alt="tache">
        <div class="video set_bg" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/accueil.jpg')">
          <div class="next_ev">
            <p>PROCHAINEMENT</p>
          </div>
        </div>
        <div class="video_title">
          <h1 class="name">ÉLAN VERRIER</h1>
          <h2 class="bl">Insuffler un esprit entrepreneurial</h2>
        </div>


      </main>

      <section id="content_about" class="mt-150px row">
        <div class="content_texte col-8 offset-2 col-lg-5 offset-lg-0">
          <h2 class="content_title">Qui sommes-nous ?</h2>
          <p class="content_para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a href="#" class="btn_access">MIEUX NOUS CONNAITRE</a>

        </div>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/accueil_2.svg" class="tache tache2" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/mains.png" class="illustration illustration1" alt="illustration">
        <div class="content_image col-12 col-lg-6 offset-lg-0">
          <div class="image_l set_bg col-8 offset-2 col-lg-8 offset-lg-0" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea4.jpg');"></div>
          <div class="image_r set_bg col-8 offset-lg-4" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea5.jpg');"></div>
        </div>
      </section>

      <section id="content_activites" class="mt-150px row">
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/accueil_3.svg" class="tache tache3" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/soufflage.png" class="illustration illustration2" alt="illustration">
        <div class="content_image col-12 col-lg-6">
          <div class="image_l set_bg col-8 offset-2 col-lg-12 offset-lg-0" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea7.jpg');"></div>
        </div>
        <div class="content_texte col-8 offset-2 col-lg-5 offset-lg-0">
          <h2 class="content_title">Les activités</h2>
          <p class="content_para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a href="#" class="btn_access">DÉCOUVRIR LES ATELIERS</a>
        </div>
      </section>

      <section id="content_actu" class="mt-150px">
        <h2 id="actu_title">Les actualités</h2>
        <section id="content_actu_article" class="row">
          <article class="actu_principal col-8 offset-2 col-lg-6 offset-lg-0">
            <div class="actu_principal_image set_bg" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea5.jpg')"></div>
            <div class="actu_principal_info col-12 col-md-10 col-lg-10 col-xl-10">
              <div class="categorie rencontre col-1"><p>RENCONTRE</p></div>
              <!-- <span class="categorie">EXPOSITION</span> -->
              <div class="actu_content_info col-9 offset-1">
                <div class="actu_date col-12">
                  <p>Valentin Rabier</p>
                  <p>02/08/2018</p>
                </div>
                <h1 class="col-12">Titre de mon joli article Titre de mon joli article Titre de mon joli article</h1>
                <div class="float-right"><a href="#" class="btn_access">LIRE LA SUITE</a></div>
              </div>
            </div>
          </article>


          <div class="content_actu_secondary col-12 col-lg-6">
            <article class="actu_secondary">
              <div class="actu_secondary_image set_bg col-sm-6" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea5.jpg')"></div>
              <div class="actu_secondary_info col-sm-8">
                <div class="categorie atelier col-sm-1"><p>ATELIER</p></div>
                <div class="actu_content_info col-sm-9 offset-md-1">
                  <div class="actu_date col-sm-12">
                    <p>Valentin Rabier</p>
                    <p>02/08/2018</p>
                  </div>
                  <h1 class="col-sm-12">Titre de mon joli article Titre de mon joli article</h1>
                  <div class="float-right"><a href="#" class="btn_access">LIRE LA SUITE</a></div>
                </div>
              </div>
            </article>
            <article class="actu_secondary">
              <div class="actu_secondary_image set_bg col-sm-6" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea5.jpg')"></div>
              <div class="actu_secondary_info col-sm-8">
                <div class="categorie expo col-sm-1"><p>EXPOSITION</p></div>
                <div class="actu_content_info col-sm-9 offset-md-1">
                  <div class="actu_date col-sm-12">
                    <p>Valentin Rabier</p>
                    <p>02/08/2018</p>
                  </div>
                  <h1 class="col-sm-12">Titre de mon joli article</h1>
                  <div class="float-right"><a href="#" class="btn_access">LIRE LA SUITE</a></div>
                </div>
              </div>
            </article>

          </div>
        </section>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/accueil_4.svg" class="tache tache4" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/feu.png" class="illustration illustration3" alt="illustration">
        <a href="#" class="btn_access btn_access_actu">VOIR TOUT LES ARTICLES</a>
      </section>

      <section id="content_realisation" class="mt-150px">
        <h2 id="actu_title">Réalisations</h2>

        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/vase.png" class="illustration illustration4" alt="illustration">
        <section id="content_realisation_article">
          <div class="realisation_img col-8 offset-2 col-lg-4 offset-lg-0" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea5.jpg')"></div>
          <div class="content_realisation_img col-lg-4">
            <div class="realisation_img col-sm-12" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea1.jpg')"></div>
            <div class="realisation_img col-sm-12" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea3.jpg')"></div>
          </div>
          <div class="realisation_img col-8 offset-2 col-lg-4 offset-lg-0" style="background-image:url('<?php bloginfo('template_directory'); ?>/images/crea5.jpg')"></div>
        </section>
        <a href="#" class="btn_access">VOIR TOUTES LES REALISATIONS</a>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/accueil_5.svg" class="tache tache5" alt="tache">
      </section>

      <section id="content_faq" class="mt-150px">
        <div class="accordion col-8 offset-2" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0 card-flex">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Collapsible Group Item #2
                  <div class="plus">
                    <div class="horizontal"></div>
                    <div class="vertical"></div>
                  </div>
                </button>

              </h5>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0 card-flex">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Collapsible Group Item #2
                  <div class="plus">
                    <div class="horizontal"></div>
                    <div class="vertical"></div>
                  </div>
                </button>

              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0 card-flex">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Collapsible Group Item #3
                  <div class="plus">
                    <div class="horizontal"></div>
                    <div class="vertical"></div>
                  </div>
                </button>

              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
              </div>
            </div>
          </div>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/taches_6_cut.png" class="tache tache6" alt="tache">
      </section>

    </section>



    <footer class="content_all mt-150px">
      <section class="ft">

        <section class="container-top">
            <p class="ft-ctn-sn">Facebook</p>
            <p class="ft-ctn-sn">Instagram</p>
            <p class="ft-ctn-sn">Twitter</p>
        </section>

        <section class="container-bottom">
            <a href="" class="ft-ctn-mention">MENTIONS LÉGALES</a>
            <a href="" class="ft-ctn-mention">NOUS CONTACTER</a>
        </section>

      </section>

    </footer>

  </body>
</html>
