<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - Contact</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/contact.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/loader.css">

  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon-elan-verrier.png" type="image/png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
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
<?php wp_head(); ?>
</head>

<body>

  <?php
    get_header();
  ?>

  <section class="global">
    <div>
      <img id="tache1-agenda" src="<?php bloginfo('template_directory'); ?>/images/tache_5.svg" alt="tache5">

    </div>
    <section class="container">
      <main class="container-main">
        <div class="title-container">
          <h1 class="main-title"><span class="lettrine lettrine1">C</span>Nous contacter</h1>
        </div>
        <div class="row" id="row-glob">
          <div class="col-12 col-lg-6" id="col-right">
            <div class="offset-1 col-10 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
              <h2 class="title-agenda"><?php the_field('nom_responsable'); ?></h2>
              <p class="p-atelier"><?php the_field('contact_fonction'); ?></p>
              <p class="p-atelier"><?php the_field('contact_mail'); ?></p>
              <h2 class="title-agenda title-agenda-2"><?php the_field('contact_titre_adresse'); ?></h2>
              <p class="p-atelier"><?php the_field('contact_adresse'); ?></p>

            </div>
          </div>
          <div class="col-12 col-lg-6" id="col-left" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/maps.jpg)">

          </div>

        </div>
      </main>
    </section>
  </section>
  <?xml version="1.0" encoding="utf-8"?>
  <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
  <svg version="1.1" id="main-telephone" class="illustration illustration3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
  	 y="0px" viewBox="0 0 469 665.1" style="enable-background:new 0 0 469 665.1;" xml:space="preserve">
  <style type="text/css">
  	.st0{fill:none;stroke:#203C83;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
  	.st1{fill:none;stroke:#203C81;stroke-width:3;stroke-linecap:round;stroke-miterlimit:10;}
  	.st2{fill:none;stroke:#203C83;stroke-width:2;stroke-linecap:round;stroke-miterlimit:10;}
  </style>
  <title>main - téléphone</title>
  <path class="st0" d="M236.7,359.7c-4.2,4.5-10.5,8-19.9,8.8c-32.7,2.7-138.4,6.1-138.4,6.1s-25.8,2.1-27.9-36.4
  	c-0.3-4.6-0.5-13.7-1.1-24.1"/>
  <path class="st0" d="M47.1,272.9c-4-80.5-10-204.9-11.2-231.2c-0.3-5.9,0.7-11.8,3-17.2c3.2-7.3,9.4-15.2,21.6-15.2l148.1-7.9
  	c0,0,23.2,1,23.7,26.3c0.4,20.2,8.5,205.4,11.7,279.3"/>
  <path class="st1" d="M60.5,21.5l148.1-7.9c0,0,8.3-0.3,8.4,7c0,4,13.1,278.7,14.2,300c0.1,1.6-0.6,3.2-2,4.1c-1.3,0.9-3.4,1.7-7,1.9
  	c-10.6,0.7-153.9,8.4-153.9,8.4s-5.8,0.8-6.2-6.1C61.2,314.7,49.4,30.5,49.4,30.5S48,22,60.5,21.5z"/>
  <ellipse class="st0" cx="152.9" cy="351.4" rx="13.5" ry="13.4"/>
  <path class="st0" d="M22.1,291.5c0,0,8.4-5.2,11.3-1.9s14.9,21.7,9.1,25.3S24.2,297.2,22.1,291.5"/>
  <path class="st0" d="M467.5,615.8c0,0-57.6-114.5-62.5-128.6s-12.7-45-19-84.3s-30.2-115.3-49.2-142.6s-21.3-38.2-25-47.4
  	c-3.9-9.8-14.4-26.4-26.7-40.4s-14-44.6-14-44.6s-2.5-33.7-13.7-29.9s-20.7,18.3-20.4,33.4s1,35.1,1,35.1s0.7,16.2,2.8,20.4
  	s20.7,43.6,22.9,51s4.6,26,3.2,37.2"/>
  <path class="st0" d="M240.2,229.2c0,0,23.7,19.7,25.6,22.7"/>
  <path class="st2" d="M274.6,274.9c0,0,14.8,8.3,17.9,11.8s11.2,7.9,12.8,7.9"/>
  <path class="st2" d="M271.8,293.6c0,0,27.4,29.3,51,41.3"/>
  <path class="st2" d="M247.4,250.4c0,0-4.8,9.3-4.8,13.4"/>
  <path class="st2" d="M255.8,259.6c0,0-5.6,3-7.2,6.3s-5.3,15.1-5.5,15.8"/>
  <path class="st0" d="M256.9,273.6c0,0-19,38.5-19.7,71.3c-0.4,21.6,0.5,28.6,0.5,28.6"/>
  <path class="st2" d="M262.3,416.3c0,0,30.2,38.6,50.2,54.8"/>
  <path class="st2" d="M202.3,385.1c0,0,6.9-14,10.4-16.2"/>
  <path class="st2" d="M193.4,384.9c0,0,3.2-13.4,7-15.4"/>
  <path class="st2" d="M173.9,385.4c0,0,2.2-14.3,4.7-14.8"/>
  <path class="st0" d="M42.5,185.4c0,0-22.4-4.7-30.8,0s-12.1,12.4-9.2,21.1s11.9,13.2,24,14.2s17.7,0.5,17.7,0.5"/>
  <path class="st0" d="M38.3,266.9c0,0,18.2,8.3,17.4,28.1c-0.8,18.6-7.1,19.7-8.7,20c-3.3,0.7-10,3.7-21.5-16.7s-13.7-31.8-9-36.5
  	s20.2-11.4,28.6-14.4"/>
  <path class="st0" d="M63.1,370.1c0,0-39.3,21.4-44.6,23.9S6,406.6,12,413s19.3,11.6,42.2-0.7s33.6-19.1,39.5-20.5
  	s56.6-3.9,68.2-10.4c4.9,8.1,56.9,82,59,89.8s39.4,62.5,68.2,89.2s52.7,103.3,52.7,103.3"/>
  <path class="st2" d="M84.7,374.4c0,0,6.6,8.7,7.6,9.5"/>
  <path class="st2" d="M94.7,391.5c0,0,7.9-5,5-7.1s-6.6-5.3-6.6-5.3"/>
  <path class="st0" d="M159.5,381.8c2.1-2.9,3.2-6.4,3.2-10"/>
  <path class="st2" d="M287.1,189.5c3.4-0.3,6.7-1,9.8-2.3"/>
  <path class="st2" d="M283.7,198.8c0,0,7.5,0.5,9.8-0.9"/>
  <path class="st0" d="M272.3,140.5c0,0-10.9,3.2-13-1.8s-2.8-32.7,1.6-37.1c0,0,2.1-2.8,3.3-1.7s5.5,12.5,6,19.7
  	S272.3,140.5,272.3,140.5z"/>
  </svg>



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
    new Vivus('main-telephone', {duration: 300});
  </script>
</html>
