<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - Ateliers</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lib/eoko/eokojs.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ateliers.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/loader.css">

  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon-elan-verrier.png" type="image/png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/loader.js"></script>
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
</head>
  <?php wp_head(); ?>
<body>

  <?php
    get_header();
    include('loader.php');
  ?>

  <section class="global col-10 offset-1">
    <div>
      <img id="tache1-agenda" src="<?php bloginfo('template_directory'); ?>/images/tache_5.svg" alt="tache5">
      <svg version="1.1" id="taille-machine" class="illustration illustration1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
      	 y="0px" viewBox="0 0 569 488.9" style="enable-background:new 0 0 569 488.9;" xml:space="preserve">
        <style type="text/css">
        	.st0{fill:none;stroke:#1F3D81;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;}
        </style>
        <title>taille-machine</title>
        <path class="st0" d="M407.1,234.9c0,0,92-1.8,104,1.4c12,3.2,16.5,9.5,16.2,19.7c-0.4,10.2-14,17.6-34.4,17.2"/>
        <path class="st0" d="M492.1,266.8c0,0-5.3,14-0.7,21.1s-2.5,10.9-3.5,13s-1.4,8.1-6.3,10.9s-7,11.2-5.6,14.4s-1.8,11.9-6.7,14.8
        	s-4.9,16.9-22.5,21.8c-21.8,5.9-44.5,8-67.1,6.3c-24.2-2.1-47.4,3.5-76.9,27s-104,74.1-131,91.3"/>
        <path class="st0" d="M137.4,348.6c0,0,73.4-20,116.6-44.3s47.1-16.5,79.4-43.5s52.3-40,76.6-38.3s30.5-9.1,30.5-9.1s10.5-8.8,13,4.2
        	s-7.4,16.5-7.4,16.5"/>
        <path class="st0" d="M247,192.7c0,0,42.1-7.7,49.2-7.7s20.4-6,25.3-9.1s14.4,2.1,2.8,18.6s-20.7,16.5-38.6,22.5s-20.4,7.7-24.9,7.7"
        	/>
        <path class="st0" d="M1.5,255.6c0,0,56.5-1.8,83.9-7.7s78.3-11.2,97.6-25.3s43.2-41.1,97.6-49.5s43.3-6.4,43.3-6.4"/>
        <path class="st0" d="M214,267.5c0,0,44.6,2.8,58.6-37.9"/>
        <path class="st0" d="M65.8,362.3c0,0,135.2-59.5,161.5-54.1l13.7,2.8"/>
        <path class="st0" d="M313,180l27.4-29.8c0,0,59,24.9,65,24.6s1.8-4.6,13.4,0.4s87.1,35.8,87.1,35.8s12.3,4.6,6,13
        	c-6.3,8.4-9.2,10.2-9.2,10.2"/>
        <path class="st0" d="M254.4,258c0,0,3.5,15.8,7.7,18.6s24.6,11.6,24.6,11.6"/>
        <path class="st0" d="M552.4,138.3c-7.6,11.1-18.3,21.7-33.3,31.1c-10.3,6.1-21.7,10.1-33.6,11.7c-8.2,1.2-16.6,0.5-24.5-2
        	c-13.6-4.2-26.6-10.4-38.5-18.2c0,0-43.6-31.1-40-82.8c2.2-32,14.9-56.7,34.9-73.7"/>
        <path class="st0" d="M560.8,109.4"/>
        <path class="st0" d="M534.4,77.9"/>
        <path class="st0" d="M518.9,79.4"/>
        <path class="st0" d="M483,83.5"/>
        <path class="st0" d="M472.6,83.3"/>
        <path class="st0" d="M444.3,78.1"/>
        <path class="st0" d="M476.8,199.5c0,0,14.4-0.4,40.9-14.4c27.2-14.4,41.3-35.8,49.8-56.1"/>
        <path class="st0" d="M402.5,174.3c-2.3-1.6-51.5-36.6-47.1-98.1c2.2-30.5,12.2-55.6,28.3-74.7"/>
        <path class="st0" d="M554.5,111.5c-5.3,18.7-17.2,37-40.4,51.9c-9.1,5.6-19.3,9.2-29.8,10.7c-7.3,1.1-14.7,0.4-21.8-1.8
        	c-12.1-3.9-23.7-9.5-34.2-16.6c0,0-38.7-28.4-35.5-75.6c2-30,13.9-53,32.5-68.6"/>
        <path class="st0" d="M528,80c0.6,16.6-4.2,35-26.7,48.5c-5.5,3.2-11.7,5.2-18,6c-4.4,0.6-8.9,0.3-13.1-1c-7.3-2.1-14.3-5.3-20.7-9.4
        	c0,0-23.4-16.1-21.5-42.8c0.3-3.8,0.9-7.6,1.8-11.3"/>
        <path class="st0" d="M518.9,79.4"/>
        <path class="st0" d="M483,83.5"/>
        <path class="st0" d="M472.6,83.3"/>
        <path class="st0" d="M512.6,81.6c0.3,11-3.2,23-18.3,31.9c-3.8,2.1-8,3.5-12.4,4c-3,0.4-6.1,0.1-9-0.7c-5-1.5-9.8-3.6-14.2-6.3
        	c0,0-16.1-10.8-14.8-28.7c0.1-1.3,0.2-2.5,0.4-3.7"/>
        <path class="st0" d="M483,83.5"/>
        <path class="st0" d="M472.6,83.3"/>
        <path class="st0" d="M483,83.5c-0.4,2.4-2.3,4.2-4.7,4.5c-0.5,0.1-0.9,0-1.4-0.1c-0.8-0.2-1.5-0.6-2.2-1c-1.2-0.9-2-2.2-2.3-3.6"/>
        <path class="st0" d="M443.5,211.1c2.9,2.1,3.9,5.9,2.5,9.1c-2.3,6-7.3,7.3-10.3,4.1s-3.1-5.1-3.1-5.1"/>
        <path class="st0" d="M303,184.2c0,0,4.7,10.7,16,1.2s2.5-9.6,2.5-9.6"/>
      </svg>



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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>

  <script>
  var mq = window.matchMedia( "(min-width:768px)" );
  if (mq.matches) {
    new Vivus('taille-machine', {duration: 300});
  }
  </script>
</html>
