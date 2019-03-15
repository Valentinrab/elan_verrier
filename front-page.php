<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elan Verrier - Accueil</title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/accueil.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="<?php bloginfo('template_directory'); ?>/js/faq.js"></script> -->

  </head>
  <body>

    <?php get_header(); ?>

    <section class="container">

      <main id="content_video">
        <!-- <img src="<?php bloginfo('template_directory'); ?>/images/accueil.jpg" class="video" alt="image de présentation d'Elan Verrier"> -->
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/accueil_1.svg" class="tache tache1" alt="tache">

        <div class="video set_bg">
          <iframe class="vimeo" src="https://player.vimeo.com/video/76979871?background=1&autoplay=1&loop=1&byline=0&title=0"
          frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          <div class="next_ev">
            <p>PROCHAINEMENT</p>
          </div>
        </div>
        <div class="video_title">
          <h1 class="name"><?php the_field('video_titre'); ?></h1>
          <h2 class="bl"><?php the_field('video_sous-titre'); ?></h2>
        </div>


      </main>

      <section id="content_about" class="mt-150px row">
        <div class="content_texte col-8 offset-2 col-lg-5 offset-lg-0">
          <h2 class="content_title"><?php the_field('qui_sommes_nous_titre'); ?></h2>
          <p class="content_para"><?php the_field('qui_sommes_nous_paragraphe'); ?></p>
          <a href="<?php echo get_permalink(109); ?>" class="btn_access"><?php the_field('qui_sommes_nous_bouton'); ?></a>

        </div>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/accueil_2.svg" class="tache tache2" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/mains.png" class="illustration illustration1" alt="illustration">
        <div class="content_image col-12 col-lg-6 offset-lg-0">
          <div class="image_l set_bg col-8 offset-2 col-lg-8 offset-lg-0" style="background-image:url(<?php the_field('qui_sommes_nous_images_1'); ?>);"></div>
          <div class="image_r set_bg col-8 offset-lg-4" style="background-image:url(<?php the_field('qui_sommes_nous_images_2'); ?>);"></div>
        </div>
      </section>

      <section id="content_activites" class="mt-150px row">
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/accueil_3.svg" class="tache tache3" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/soufflage.png" class="illustration illustration2" alt="illustration">
        <div class="content_image col-12 col-lg-6">
          <div class="image_l set_bg col-8 offset-2 col-lg-12 offset-lg-0" style="background-image:url(<?php the_field('activites_images'); ?>);"></div>
        </div>
        <div class="content_texte col-8 offset-2 col-lg-5 offset-lg-0">
          <h2 class="content_title"><?php the_field('activites_titre'); ?></h2>
          <p class="content_para"><?php the_field('activites_paragraphe'); ?></p>
          <a href="<?php echo get_permalink(105); ?>" class="btn_access"><?php the_field('activites_bouton'); ?></a>
        </div>
      </section>

      <section id="content_actu" class="mt-150px">
        <h2 id="actu_title">Les actualités</h2>
        <section id="content_actu_article" class="row">
          <?php
          $count = 0;
  				// The Query
  				$args = array ('post_type' => 'Post',
                        'posts_per_page' => '3',
		                     'order' => 'DESC');

  				$the_query = new WP_Query( $args );

  					// The Loop
  					if ( $the_query->have_posts() ) {
  				while ( $the_query->have_posts() ) {
  							$the_query -> the_post();
                $count ++;
                if ($count == 1) {?>
                <article class="actu_principal col-8 offset-2 col-lg-6 offset-lg-0">
                  <div class="actu_principal_image set_bg" style="background-image:url(<?php the_field('article_image'); ?>)"></div>
                  <div class="actu_principal_info col-12 col-md-10 col-lg-10 col-xl-10">
                    <div class="categorie rencontre col-1"><p>RENCONTRE</p></div>
                    <!-- <span class="categorie">EXPOSITION</span> -->
                    <div class="actu_content_info col-9 offset-1">
                      <div class="actu_date col-12">
                        <p><?php the_field('article_auteur'); ?></p>
                        <p><?php the_time('d/m/Y') ?></p>
                      </div>
                      <h1 class="col-12"><?php the_title(); ?></h1>
                      <div class="float-right"><a href="#" class="btn_access">LIRE LA SUITE</a></div>
                    </div>
                  </div>
                </article>

                <div class="content_actu_secondary col-12 col-lg-6">
                <?php
              }else{ ?>
                <article class="actu_secondary">
                  <div class="actu_secondary_image set_bg col-sm-6" style="background-image:url(<?php the_field('article_image'); ?>)"></div>
                  <div class="actu_secondary_info col-sm-8">
                    <div class="categorie atelier col-sm-1"><p>ATELIER</p></div>
                    <div class="actu_content_info col-sm-9 offset-md-1">
                      <div class="actu_date col-sm-12">
                        <p><?php the_field('article_auteur'); ?></p>
                        <p><?php the_time('d/m/Y') ?></p>
                      </div>
                      <h1 class="col-sm-12"><?php the_title(); ?></h1>
                      <div class="float-right"><a href="#" class="btn_access">LIRE LA SUITE</a></div>
                    </div>
                  </div>
                </article>
  							<?php
  						}
  						wp_reset_postdata();
  					}
          }
  				?>

              </div>
        </section>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/accueil_4.svg" class="tache tache4" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/feu.png" class="illustration illustration3" alt="illustration">
        <a href="<?php echo get_permalink(47); ?>" class="btn_access btn_access_actu">VOIR TOUT LES ARTICLES</a>
      </section>

      <section id="content_realisation" class="mt-150px">
        <h2 id="actu_title">Réalisations</h2>

        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/vase.png" class="illustration illustration4" alt="illustration">
        <section id="content_realisation_article">
          <?php
            $count = 0;
						$posts = get_field('realisations_featured');

						if( $posts ): ?>

						    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						        <?php setup_postdata($post);
                    $count ++;
										if ($count == 1) {?>
                      <div class="realisation_img col-8 offset-2 col-lg-4 offset-lg-0" style="background-image:url(<?php the_field('realisation_image')?>)"></div>
                      <div class="content_realisation_img col-lg-4">

                    <?php }else if($count == 2){ ?>
                      <div class="realisation_img col-sm-12" style="background-image:url(<?php the_field('realisation_image')?>)"></div>

                    <?php }else if($count == 3){ ?>
                      <div class="realisation_img col-sm-12" style="background-image:url(<?php the_field('realisation_image')?>)"></div>
                    </div>

                    <?php }else if($count == 4){ ?>
                    <div class="realisation_img col-8 offset-2 col-lg-4 offset-lg-0" style="background-image:url(<?php the_field('realisation_image')?>)"></div>

                  <?php } ?>
						    <?php endforeach; ?>

						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>

        </section>
        <a href="<?php echo get_permalink(42); ?>" class="btn_access">VOIR TOUTES LES REALISATIONS</a>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/accueil_5.svg" class="tache tache5" alt="tache">
      </section>

      <section id="content_faq" class="mt-150px">
        <div class="accordion col-8 offset-2" id="accordionExample">
          <?php

            if( have_rows('foire_aux_questions') ):

                while ( have_rows('foire_aux_questions') ) : the_row(); ?>
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0 card-flex">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <?php the_sub_field('faq_questions'); ?>
                        <div class="plus">
                          <div class="horizontal"></div>
                          <div class="vertical"></div>
                        </div>
                      </button>

                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <?php the_sub_field('faq_reponse'); ?>
                    </div>
                  </div>
                </div>
          <?php
              endwhile;
              endif;
          ?>
          <!-- <div class="card">
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
        </div> -->
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/taches_6_cut.png" class="tache tache6" alt="tache">
      </section>

    </section>



    <?php get_footer(); ?>

  </body>
</html>
