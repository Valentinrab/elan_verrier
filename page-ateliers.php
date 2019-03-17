<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - Ateliers</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lib/eoko/eokojs.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ateliers.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
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


        <div class="title-container">
          <h1 class="main-title">Les ateliers</h1>
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

</html>
