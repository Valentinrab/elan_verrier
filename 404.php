<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Elan Verrier - 404</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/page404.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon-elan-verrier.png" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
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
</head>

<body>

  <?php
    get_header();
  ?>

  <section class="container">
    <main class="container-main">

      <div class="row">

        <div class="animation-logo col-12 col-lg-4 offset-lg-4 col-sm-6 offset-sm-3">

          <img class="typo" src="<?php bloginfo('template_directory'); ?>/images/logo-anime/proposition-final-typo.svg" alt="">
          <div id="scene">
            <img class="tache-1" src="<?php bloginfo('template_directory'); ?>/images/logo-anime/proposition-final-tache-1.svg" alt="tache" data-depth="0.6">
            <img class="tache-2" src="<?php bloginfo('template_directory'); ?>/images/logo-anime/proposition-final-tache-2.svg" alt="tache" data-depth="0.3">
            <img class="tache-3" src="<?php bloginfo('template_directory'); ?>/images/logo-anime/proposition-final-tache-3.svg" alt="tache" data-depth="0.2">
          </div>

        </div>

        <div class="erreur_404 col-12 col-lg-4 offset-lg-4 col-sm-6 offset-sm-3">
          <p class="subtitle">Erreur</p>
          <p class="subtitle-number">404</p>
          <span class="lettrine lettrine1">4</span>
          <span class="lettrine lettrine2">0</span>
          <span class="lettrine lettrine3">4</span>
        </div>
        <div class="contenu_404 col-12 col-lg-8 offset-lg-2 col-sm-10 offset-sm-1">
          <h1>Ne vous seriez pas vous perdu sur Élan Verrier ?</h1>
          <p><span class="span_bolder">Pas de panique !</span> On va vous accompagner jusqu'à une page bien plus intéressante.</p>

          <div class="btn_member_404">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo" />
                </filter>
              </defs>
            </svg>

            <span class="button--bubble__container">
              <a href="<?php echo get_permalink(38); ?>" class="button button--bubble">
                Retourner à l'accueil
              </a>
              <span class="button--bubble__effect-container">
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>

                <span class="button effect-button"></span>

                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
              </span>
            </span>

          </div>
        </div>

      </div>
    </main>
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
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js'></script>

<script src="<?php bloginfo('template_directory'); ?>/js/devenirmembre.js"></script>


<script>
  $(document).ready(function() {
    let scene = document.getElementById('scene');
    let parallaxInstance = new Parallax(scene);
  })
</script>

</html>
