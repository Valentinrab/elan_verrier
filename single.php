<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - Article</title>

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/article.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/loader.css">
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon-elan-verrier.png" type="image/png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/loader.js"></script>

  <script>document.documentElement.className = 'js';</script>
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
    include('loader.php');
  ?>


  <section class="global">
    <section class="container mt-200px">
      <main class="container-main">
        <a class="btn_lls" href="<?php echo get_permalink(47); ?>">RETOUR</a>
        <article class="article-verrier">

          <div class="row" id="row-glob">
            <div class="col-12 col-lg-4 set_bg" id="col-left" style="background-image: url(<?php the_field('article_image'); ?>);"></div>
            <div class="col-12 col-lg-8 mt-xl-0 mt-lg-0 mt-5" id="col-right">
              <div class="offset-md-1 col-md-10">
                <div class="info-article">
                  <p class="writer-article">Par : <?php the_field('article_auteur'); ?></p>
                  <p class="date-article">Le : <?php the_time('d/m/Y') ?></p>
                  <?xml version="1.0" encoding="utf-8"?>
                <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                <svg version="1.1" id="main-ecrit" class="illustration illustration3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                	 viewBox="0 0 656.1 660.6" style="enable-background:new 0 0 656.1 660.6;" xml:space="preserve">
                <style type="text/css">
                	.st0{fill:none;stroke:#203C81;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
                </style>
                <title>main - écrit</title>
                <path class="st0" d="M294.4,229.1c0,0,72.5-70.3,92.3-87.1c22,12.4,224.1,126,267.3,170.6C640,325.8,353.7,594.5,327.4,658.2
                	c-46.9-33.7-174.3-141.3-186.8-153"/>
                <path class="st0" d="M391.8,168.3c0,0,28.6,8.1,18.3,17.6s-16.1,19.8-10.3,22.7S424,202,424,202"/>
                <path class="st0" d="M558.8,285.5c2.2,0.7,42.5,34.4,46.1,39.5"/>
                <path class="st0" d="M361.8,232c0,0,36.6,36.6,46.1,37.4s19,14.6,24.2,23.4s24.9,7.3,27.8,13.2s17.6,24.9,17.6,24.9l16.1,6.6"/>
                <path class="st0" d="M388.9,324.3c0,0,16.8,11.7,19.8,12.5s15.4,9.5,15.4,13.2s4.4,7.3,10.3,10.3c4.5,2.1,9.1,3.8,13.9,5.1l0.7,3.7
                	l8.8,10.3l8.1,7.3l2.9,10.3"/>
                <path class="st0" d="M357.4,334.6c0,0,32.2,24.9,32.6,29.3s-0.4,7.7,4.4,8.1s5.9-4.8,8.8,5.1s2.6,11,7,12.5s17.2,7.3,18.3,9.5
                	s23.8,28.9,28.6,28.2"/>
                <path class="st0" d="M437.6,463.1c0,0-0.4-5.9-5.9-6.2s-9.9-7.4-14.7-15.4s-14.3-11-26.4-19.8S366.2,393.2,361,391s-9.1-1.5-8.4-4
                	s-2.2-3.3-2.2-3.3"/>
                <path class="st0" d="M204,296.1c0,0,38.8,16.8,40.3,17.6s43.6-4.4,68.5,0.4c8.1-8.8,21.2-26.4,38.1-32.2s27.5,5.5,25.7,10
                	S346.8,351,344.2,355s-16.1,21.6-35.5,26.4s-39.9,13.5-98.5,69.6s-64.4,56-131.8,75.8"/>
                <path class="st0" d="M194.5,197.9c42.3,5.1,84.6,23.4,89.3,25.8c8.1,4,38.4,14.3,38.8,44.7s-1.9,36.6-1.9,36.6"/>
                <path class="st0" d="M1.5,422.1c0,0,76.9-154.1,115.7-204c8.1-10.4,19.6-16.3,32.9-19.3"/>
                <path class="st0" d="M344.2,355.1c0,0,9.9,7,5.1,13.5s-10.3,10.3-25.3,6.6"/>
                <path class="st0" d="M304.7,400.8c0,0-4.4,43.9-18.4,45.6s-15.6-16.5-15.1-31.3s0.5-17.3,0.5-17.3"/>
                <path class="st0" d="M240.1,423.6c0,0-1,25.4,5.8,31.3c2.2,1.9,9.6,4.9,13.7,2.5s6.3-14,6.6-19.2s3-38.2,3-38.2"/>
                <path class="st0" d="M216.5,445.9c0,0-1.9,9.6,3.6,16.5c2.6,3.2,13.2,4.4,15.4-3.3s3.3-34.3,3.3-34.3"/>
                <path class="st0" d="M360.1,325c0,0-14-2.2-15.4-8.5s5.5-25.5,11.5-32.1s9.9-8.5,12.9-8s11,3,10.2,7.4s-6.9,18.4-10.4,24.2
                	S360.1,325,360.1,325z"/>
                <path class="st0" d="M348.1,358c0,0,11.8,12.1,11,18.5s-8.9,11-22.4,0.8"/>
                <path class="st0" d="M280.8,456.4c4.1,0.2,8-2.1,9.8-5.9c2.6-5.6,8-20.5,9.4-24.2c0.1-0.2,0-0.5-0.3-0.6c-0.1,0-0.2,0-0.3,0
                	c-2.5,0.8-9.8,4.1-11.8,17.9c-1.9,13-5.9,13-7.3,12.5s-5.4-0.3-6.3-15.9"/>
                <path class="st0" d="M244.4,453.8c0,0-0.3,12.6,9.9,12.9s11-18.1,11.4-22.4s0-4.5,0-4.5s-4.4-3.3-6,1.6s-0.7,13.5-2.5,20.2
                	c-1.4,5.2-2.7,5.1-2.7,5.1"/>
                <path class="st0" d="M219.9,461.9c0,0-2.1,12.3,7,11.9s10-19.7,10.4-24.2s-6.1-1.8-6.5,3.1s-1.9,20.2-4.2,21"/>
                <path class="st0" d="M238,311.1c0,0-161.8-206.9-169.9-216.8s-22.7-27.9-24.9-30c-1.9-1.9-3.3-4.3-4-6.8c-0.8-3.3-0.5-7.6,3.4-12.3"
                	/>
                <path class="st0" d="M60.6,34.2c3-0.5,6-0.3,8.9,0.7l0,0c2,0.6,3.9,1.7,5.5,3.1c0,0,6.6,5.1,8.1,8.8s6.6,12.8,16.5,26
                	s178,234.3,180.2,238"/>
                <path class="st0" d="M39.2,57.5c0,0,7.9,4.5,22.5-5.4c7.3-4.9,13.7-15.3,7.8-17.2"/>
                <path class="st0" d="M291.1,388c0,0,31.9,30.4,41.7,33.3c-1.1-13.9-11-43.2-12.1-43.9"/>
                <line class="st0" x1="332.5" y1="421.4" x2="336.4" y2="426.5"/>
                <path class="st0" d="M63.6,38.7C61,50.4,47.3,50.8,47.3,50.8S25.3,24.2,22,16S27.7,3.2,33.2,1.7s9.3,4.2,9.3,4.2L63.6,38.7z"/>
                <path class="st0" d="M107.3,83.6c0,0,0.9,8.1-8.2,15c-9.2,6.9-22.5,6-22.5,6"/>
                <path class="st0" d="M134.6,119.1c0,0,0.2,9.3-6.8,15c-6.9,5.7-16.8,7.5-22.9,6.4"/>
                <path class="st0" d="M137.8,183.1c-4.9,0.2-9.7,1.7-13.8,4.3"/>
                <path class="st0" d="M74.5,104.3c0,0-13-3.3-10.4,3.3s65.2,88.8,67.7,89.7s6.2,10.6,14.6-1.1c0.3-0.4,0.5-0.7,0.7-1.1"/>
                <line class="st0" x1="64.3" y1="103.9" x2="69.8" y2="97.1"/>
                <path class="st0" d="M262.6,287.4c0,0,3-8.8-2.2-44.5"/>
                <path class="st0" d="M261.6,285.2c0,0,8,6.9,33-11"/>
                <path class="st0" d="M326.1,358.5c0,0-6-6.3-10.2-8.5"/>
                <path class="st0" d="M305.2,346.2c0,0,3.8,21.7,8.8,27.2"/>
                </svg>

                </div>
                <h1 class="main-title"><span class="lettrine lettrine1"><?php the_field('lettrine'); ?></span><?php the_title(); ?></h1>
                <h3 class="intro-article"><?php the_field('article_chapeau'); ?></h3>
              </div>
            </div>
          </div>

          <?php

          if( have_rows('contenu_article') ):

               // loop through the rows of data
              while ( have_rows('contenu_article') ) : the_row();

                  if( get_row_layout() == 'texte_image' ): ?>
                  <div class="texte_image row p-block">

                    <div class="col-10 offset-1 offset-lg-0 offset-xl-0 col-lg-6" id="col-right2">
                      <h2 class="title-article"><?php the_sub_field('sous_titre'); ?></h2>
                      <p class="p-article"><?php the_sub_field('texte'); ?></p>
                    </div>
                    <div class="col-10 col-lg-4 offset-1 offset-lg-2 offset-xl-2 mt-xl-0 mt-lg-0 mt-5 set_bg" id="col-left2" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>

                  </div>

                  <?php
                  elseif( get_row_layout() == 'image_texte' ): ?>
                  <div class="image_texte row p-block">


                    <div class="col-10 col-lg-4 offset-1 offset-lg-0 offset-xl-0 mt-xl-0 mt-lg-0 mt-5 set_bg " id="col-left2" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>
                    <div class="col-10 col-lg-6 offset-1 offset-lg-2 offset-xl-2" id="col-right2">
                      <h2 class="title-article"><?php the_sub_field('sous_titre'); ?></h2>
                      <p class="p-article"><?php the_sub_field('texte'); ?></p>

                    </div>

                  </div>

                  <?php
                  elseif( get_row_layout() == 'texte_centre' ): ?>

                  <div class="texte_centre row p-block">
                    <div class="col-10 offset-1">
                      <h2 class="title-article"><?php the_sub_field('sous_titre'); ?></h2>
                      <p class="p-article"><?php the_sub_field('texte'); ?></p>
                    </div>
                  </div>


                <?php endif;

              endwhile;

          endif;

          ?>



        </article>
      </main>
    </section>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vivus/0.4.4/vivus.min.js"></script>

  <script>
  var mq = window.matchMedia( "(min-width:768px)" );
  if (mq.matches) {
    new Vivus('main-ecrit', {duration: 300});
  }
  </script>
</html>
