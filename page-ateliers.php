<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - Ateliers</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lib/eoko/eokojs.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ateliers.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon-elan-verrier.png" type="image/png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://unpkg.com/scrollreveal"></script>
  <script>document.documentElement.className = 'js';</script>


  <?php
  class Slide
  {
      public $image_content;
      public $title_content;
      public $text_content;

  }
  $tab_of_slides = [];

  if( have_rows('ateliers') ):
      $counter=0;
      while( have_rows('ateliers') ): the_row();
          $txt = '';
          $txt = get_sub_field('ateliers_description');

          $title = '';
          $title = get_sub_field('ateliers_titre_atelier');

          $img = '';
          $img = get_sub_field('ateliers_image');

          $slide = new Slide();
          $slide->image_content = $img;
          $slide->title_content = $title;
          $slide->text_content = $txt;


          array_push($tab_of_slides, $slide);

      endwhile;

  endif;

  // Convert options to javascript array of object
  echo "<script> const options = " . json_encode($tab_of_slides) . '; </script>';

  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/lib/eoko/eoko.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/lib/eoko/arrows.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
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

  <section class="global col-10 offset-1">
    <div>
      <img id="tache1-agenda" src="<?php bloginfo('template_directory'); ?>/images/tache_5.svg" alt="tache5">
    </div>


        <div class="title-container">
          <h1 class="main-title"><span class="lettrine lettrine1">A</span>Les ateliers</h1>
        </div>
        <div id="slider_container"></div>



  </section>

  <?php
    get_footer();
  ?>
<script>
  const my_slider = new Eoko("slider_container", options );
</script>


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
