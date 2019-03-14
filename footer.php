
  <footer class="content_all">
    <section class="ft">

      <?php

      // check if the repeater field has rows of data
      if( have_rows('footer_reseaux') ):

       	// loop through the rows of data
          while ( have_rows('footer_reseaux') ) : the_row(); ?>


          <section class="container-top">
              <a href="<?php the_sub_field('reseaux_lien'); ?>"><p class="ft-ctn-sn"><?php the_sub_field('reseaux_icone'); ?></p></a>
          </section>

      <?php
          endwhile;
          endif;

      ?>




      <section class="container-bottom">
          <a href="<?php echo get_permalink(107); ?>" class="ft-ctn-mention">MENTIONS LÉGALES</a>
          <a href="<?php echo get_permalink(63); ?>" class="ft-ctn-mention">NOUS CONTACTER</a>
      </section>

    </section>

  </footer>
