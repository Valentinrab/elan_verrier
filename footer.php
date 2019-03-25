
  <footer class="content_all">
    <section class="ft">
      <section class="container-top">
      <?php

      // check if the repeater field has rows of data
      if( have_rows('footer_reseaux', 38) ):

       	// loop through the rows of data
          while ( have_rows('footer_reseaux', 38) ) : the_row(); ?>



              <a href="<?php the_sub_field('reseaux_lien', 38); ?>">
                <i class="<?php the_sub_field('reseaux_icone'); ?>"></i>
              </a>


      <?php
          endwhile;
          endif;

      ?>
      </section>



      <section class="container-bottom">
          <a href="<?php echo get_permalink(107); ?>" class="ft-ctn-mention">MENTIONS LÉGALES</a>
          <a href="<?php echo get_permalink(63); ?>" class="ft-ctn-mention">NOUS CONTACTER</a>
          <img src="<?php bloginfo('template_directory'); ?>/images/taches/tache-bl1.png" date-rellax-speed="2" class="tache tache-bl bl1 rellax" alt="verre-transparent">
          <img src="<?php bloginfo('template_directory'); ?>/images/taches/taches_6_cut.png" class="tache tache6" alt="tache">
      </section>


    </section>

  </footer>

  <?php wp_footer(); ?>
