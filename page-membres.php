<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Elan Verrier - Membres</title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/membres.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon-elan-verrier.png" type="image/png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
  <script>document.documentElement.className = 'js';</script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#ffffff",
      "text": "#000000"
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
  ?>





  <section class="container">
    <main class="container-main">
      <h1 class="main-title"><span class="lettrine lettrine1">M</span>Les membres</h1>
      <div class="container-wrap">

        <?php

          // check if the repeater field has rows of data
          if( have_rows('membres') ):

           	// loop through the rows of data
              while ( have_rows('membres') ) : the_row(); ?>
              <div class="wrap 1">
                <img src="<?php bloginfo('template_directory'); ?>/images/taches/membres_1.svg" class="tachemembre tache1" alt="tache">
                <div class="image-membre" style="background-image:url('<?php the_sub_field('membre_image'); ?>');"></div>
                <div class="desc-wrap">
                  <h3 class="name-bold"><?php the_sub_field('membre_nom'); ?></h3>
                  <p><?php the_sub_field('membre_fonction'); ?></p>
                </div>
              </div>

                  <!-- // code html avec pour les zones administrables -->

        <?php
            endwhile;
            endif;

        ?>


      </div>
      <div class="container-form col-12">
        <h2 class="form-title"><?php the_field('titre_paragraphe_membre'); ?></h2>
        <div id="form-desc" class="row">
          <div id="form-left" class="col-8">
            <p><?php the_field('paragraphe_membre'); ?></p>
          </div>
          <div class="btn_access col-4">
            <a href="<?php the_field('formulaire'); ?>" target="_blank">
              <span class="text"><?php the_field('btn_text'); ?></span>
              <span class="line -right"></span>
              <span class="line -top"></span>
              <span class="line -left"></span>
              <span class="line -bottom"></span>
            </a>
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
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js'></script>

<script  src="<?php bloginfo('template_directory'); ?>/js/devenirmembre.js"></script>


</html>
