<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Elan Verrier - Article</title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bs-css/bootstrap-grid.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/article.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">

  <script src="<?php bloginfo('template_directory'); ?>/js/rellax.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

</head>

<body>
  <?php
    get_header();
  ?>


  <section class="global">
    <section class="container mt-200px">
      <main class="container-main">
        <a class="btn_access" href="<?php echo get_permalink(47); ?>">RETOUR</a>
        <article class="article-verrier">

          <div class="row" id="row-glob">
            <div class="col-12 col-lg-4 set_bg" id="col-left" style="background-image: url(<?php the_field('article_image'); ?>);"></div>
            <div class="col-12 col-lg-8 mt-xl-0 mt-lg-0 mt-5" id="col-right">
              <div class="offset-md-1 col-md-10">
                <div class="info-article">
                  <p class="writer-article"><?php the_field('article_auteur'); ?></p>
                  <p class="date-article"><?php the_time('d/m/Y') ?></p>
                </div>
                <h1 class="main-title"><?php the_title(); ?></h1>
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
                    <div class="col-10 col-lg-4 offset-1 offset-lg-2 offset-xl-2 mt-xl-0 mt-lg-0 mt-5 set_bg rellax" data-rellax-speed="1"  id="col-left2" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>

                  </div>

                  <?php
                  elseif( get_row_layout() == 'image_texte' ): ?>
                  <div class="image_texte row p-block">


                    <div class="col-10 col-lg-4 offset-1 offset-lg-0 offset-xl-0 mt-xl-0 mt-lg-0 mt-5 set_bg rellax" data-rellax-speed="1" id="col-left2" style="background-image: url(<?php the_sub_field('image'); ?>);"></div>
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

<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js'></script>

<script  src="<?php bloginfo('template_directory'); ?>/js/devenirmembre.js"></script>
<script>
  // Accepts any class name
  var rellax = new Rellax('.rellax');
</script>
</html>
