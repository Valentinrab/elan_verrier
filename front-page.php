<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Elan Verrier - Accueil</title>

    <meta name="viewport" content="width=device-width, user-scalable=no">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/boutons.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/accueil.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/menu.css" />
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon-elan-verrier.png" type="image/png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/rellax.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
    <script>document.documentElement.className = 'js';</script>
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

    <?php get_header(); ?>

    <section class="container">

      <main id="content_video">

        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_1.svg" data-rellax-speed="-1" class="tache tache1 rellax" alt="tache">

        <div class="video set_bg">
          <div class="video-img set_bg" style="background-image:url(<?php the_field('image_format_portable') ?>)"></div>
          <div id="video"></div>
          <!-- <iframe class="video" src="<?php the_field('video_presentation');?>?background=1&autoplay=1&loop=1&byline=0&title=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        </div>
        <div class="video_title">
          <h1 class="name"><?php the_field('video_titre'); ?></h1>
          <h2 class="bl"><?php the_field('video_sous-titre'); ?></h2>
        </div>


      </main>
      <div class="next_ev">
        <p class="next_ev_title">PROCHAINEMENT<i class="fas fa-sort-down"></i></p>

        <a href="<?php echo get_permalink(44); ?>"><div class="next_ev_container">
          <!-- prochainement debut  -->
          <?php

          // The Query
          $query = new WP_Query( $args );
            // The Query
            $today = date('Ymd');
            $args = array ('post_type' => 'evenement',
                          'meta_query' => array(
                              array(
                                    'key'		=> 'date_fin',
                                    'compare'	=> '>',
                                    'value'		=> $today,
                                )
                          ),
                          'order' => 'ASC',
                          'meta_key'			=> 'date_debut',
                          'orderby'			=> 'meta_value',
                          'posts_per_page'         => '1',
            );

            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
            $the_query -> the_post();


            //infos de la date de début de l'évenement
            $dateDebut = get_field('date_debut', false, false);
            $dateDebut = new DateTime($dateDebut);
            $debut_jour = $dateDebut->format('d');
            $debut_mois = $dateDebut->format('m');

            //infos de la date de fin de l'évenement
            $dateFin = get_field('date_fin', false, false);
            $dateFin = new DateTime($dateFin);
            $fin_jour = $dateFin->format('d');
            $fin_mois = $dateFin->format('m');

            //convertion des mois en français
            $tabMois = ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'];
            $debut_mois_fr = $tabMois[$debut_mois - 1];
            $fin_mois_fr = $tabMois[$fin_mois - 1];

            ?>

            <div class="wrap <?php the_field('categorie'); ?>">
              <div class="img-event set_bg" style="background-image:url(<?php the_field('image') ?>)">
                <p class="event-date"><?php echo $debut_jour.'-'.$fin_jour ?></p>
                <div class="event-info">

                  <div class="desc-wrap categorie <?php the_field('categorie'); ?>">
                    <p class="event-categorie"><?php the_field('categorie') ?></p>
                    <h3 class="event-title"><?php the_title() ?></h3>
                  </div>
                </div>

              </div>
            </div>

            <?php
              }
            wp_reset_postdata();
            }
          ?>
<!-- prochainement fin -->
        </div>
      </a>
      </div>

      <section id="content_about" class="mt-150px row">
        <div class="content_texte col-8 offset-2 col-lg-5 offset-lg-0">
          <span class="lettrine lettrine1"><?php the_field('lettrine'); ?></span>
          <h2 data-sr="move 250px" class="content_title"><?php the_field('qui_sommes_nous_titre'); ?></h2>
          <p data-sr="move 250px" class="content_para"><?php the_field('qui_sommes_nous_paragraphe'); ?></p>

          <div class="btn_access">
            <a href="<?php echo get_permalink(109); ?>" class="btn_access">
              <span class="text"><?php the_field('qui_sommes_nous_bouton'); ?></span>
              <span class="line -right"></span>
              <span class="line -top"></span>
              <span class="line -left"></span>
              <span class="line -bottom"></span>
            </a>
          </div>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_2.svg" data-rellax-speed="-0.7" class="tache tache2 rellax" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/mains-team.svg" class="illustration illustration1" alt="illustration">
        <div class="content_image col-12 col-lg-6 offset-lg-0">
          <div class="image_l set_bg col-8 offset-2 col-lg-8 offset-lg-0 rellax img1" data-rellax-speed="1" style="background-image:url(<?php the_field('qui_sommes_nous_images_1'); ?>);"></div>
          <div class="image_r set_bg col-8 offset-lg-4 rellax" data-rellax-speed="2" style="background-image:url(<?php the_field('qui_sommes_nous_images_2'); ?>);"></div>
        </div>
      </section>

      <section id="content_activites" class="mt-150px row">
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_3.svg" class="tache tache3 rellax" data-rellax-speed="-0.9" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/soufflage-main.svg" class="illustration illustration2" alt="illustration">
        <div class="content_image col-12 col-lg-6">
          <div class="image_l set_bg col-8 offset-2 col-lg-12 offset-lg-0 rellax img3" data-rellax-speed="1" style="background-image:url(<?php the_field('activites_images'); ?>);"></div>
        </div>
        <div class="content_texte col-8 offset-2 col-lg-5 offset-lg-0">
          <span class="lettrine lettrine2"><?php the_field('lettrine2'); ?></span>
          <h2 class="content_title"><?php the_field('activites_titre'); ?></h2>
          <p class="content_para"><?php the_field('activites_paragraphe'); ?></p>
          <div class="btn_access">
            <a href="<?php echo get_permalink(105); ?>" class="btn_access">
              <span class="text"><?php the_field('activites_bouton'); ?></span>
              <span class="line -right"></span>
              <span class="line -top"></span>
              <span class="line -left"></span>
              <span class="line -bottom"></span>
            </a>
          </div>
        </div>
      </section>

      <section id="content_actu" class="mt-150px">


        <h2 id="actu_title"><span class="lettrine lettrine3"><?php the_field('lettrine3'); ?></span>Les actualités</h2>
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
                    <div class="categorie col-1 <?php the_field('categorie'); ?>">
                      <p class="categorie_title"><?php the_field('categorie'); ?></p>
                    </div>
                    <!-- <span class="categorie">EXPOSITION</span> -->
                    <div class="actu_content_info col-9 offset-1">
                      <div class="actu_date col-12">
                        <p><?php the_field('article_auteur'); ?></p>
                        <p><?php the_time('d/m/Y') ?></p>
                      </div>
                      <h1 class="col-12"><?php the_title(); ?></h1>
                      <div class="float-right"><a class="btn_lls" href="<?php the_permalink(); ?>">Lire la suite</a></div>
                    </div>
                  </div>
                </article>

                <div class="content_actu_secondary col-12 col-lg-6">
                <?php
              }else{ ?>
                <article class="actu_secondary">
                  <div class="actu_secondary_image set_bg col-sm-6" style="background-image:url(<?php the_field('article_image'); ?>)"></div>
                  <div class="actu_secondary_info col-sm-8">
                    <div class="categorie col-sm-1 <?php the_field('categorie'); ?>"><p class="categorie_title"><?php the_field('categorie'); ?></p></div>
                    <div class="actu_content_info col-sm-9 offset-md-1">
                      <div class="actu_date col-sm-12">
                        <p><?php the_field('article_auteur'); ?></p>
                        <p><?php the_time('d/m/Y') ?></p>
                      </div>
                      <h1 class="col-sm-12"><?php the_title(); ?></h1>
                      <div class="float-right"><a class="btn_lls" href="<?php the_permalink(); ?>">Lire la suite</a></div>
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
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_4.svg" class="tache tache4 rellax" data-rellax-speed="-2" alt="tache">
        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/feu-verre.svg" class="illustration illustration3" alt="illustration">
        <div class="btn_access hey">
          <a href="<?php echo get_permalink(47); ?>" class="btn_access">
            <span class="text">VOIR TOUS LES ARTICLES</span>
            <span class="line -right"></span>
            <span class="line -top"></span>
            <span class="line -left"></span>
            <span class="line -bottom"></span>
          </a>
        </div>
      </section>

      <section id="content_realisation" class="mt-200px">
        <span class="lettrine lettrine4"><?php the_field('lettrine4'); ?></span>
        <h2 id="actu_title">Réalisations</h2>

        <img src="<?php bloginfo('template_directory'); ?>/images/illustrations/main-vase.svg" class="illustration illustration4" alt="illustration">
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
        <div class="btn_access">
          <a href="<?php echo get_permalink(42); ?>" class="btn_access btn_access_actu">
            <span class="text">VOIR TOUTES LES REALISATIONS</span>
            <span class="line -right"></span>
            <span class="line -top"></span>
            <span class="line -left"></span>
            <span class="line -bottom"></span>
          </a>
        </div>
        <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache_1.svg" data-rellax-speed="-2" class="tache tache5 rellax" alt="tache">
      </section>

      <section id="content_faq" class="mt-150px">
        <div class="accordion col-8 offset-2" id="accordionExample">
          <?php
            $count = 0;
            if( have_rows('foire_aux_questions') ):

                while ( have_rows('foire_aux_questions') ) : the_row();
                $count ++;
                ?>

                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0 card-flex collapsed" data-toggle="collapse" data-target="#collapse_<?php echo $count ?>" aria-expanded="false" aria-controls="collapseOne">
                      <button class="btn btn-link " type="button" >
                        <?php the_sub_field('faq_questions'); ?>
                        <div class="plus">
                          <div class="horizontal"></div>
                          <div class="vertical"></div>
                        </div>
                      </button>

                    </h5>
                  </div>
                  <div id="collapse_<?php echo $count ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <p><?php the_sub_field('faq_reponse'); ?></p>
                    </div>
                  </div>
                </div>
          <?php
              endwhile;
              endif;
          ?>

      </section>

    </section>



    <?php get_footer(); ?>



  </body>

  <script src="<?php bloginfo('template_directory'); ?>/js/menu.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/easings.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/menu3.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/plugins/CSSPlugin.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/easing/EasePack.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.17.0/TweenLite.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TimelineLite.min.js'></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/devenirmembre.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/jquery.youtubebackground.js"></script>
  <script>
    $(document).ready(function() {

          $('#video').YTPlayer({
          fitToBackground: true,
          videoId: '<?php the_field('video_presentation')?>'
      });
      $('#video').YTPlayer({
          fitToBackground: true,
          videoId: '<?php the_field('video_presentation')?>',
          playerVars: {
            modestbranding: 0,
            autoplay: 1,
            controls: 0,
            showinfo: 0,
            branding: 0,
            rel: 0,
            autohide: 0,
            start: 59,
            disablekb: 0
          }
      });

    })

  </script>
  <script>
    // Accepts any class name
    var rellax = new Rellax('.rellax');
  </script>
</html>
