    <header>
      <div class="content_menu">
        <a href="<?php echo get_permalink(38); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="logo élan verrier" id="logo"></a>

        <div class="content_menu_right">
          <div class="btn_member">
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo">
              <defs>
                <filter id="goo">
                  <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo" />
                </filter>
              </defs>
            </svg>

            <span class="button--bubble__container">
              <a href="#campaign" class="button button--bubble">
                Devenir membre
              </a>
              <span class="button--bubble__effect-container">
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>
                <span class="circle top-left"></span>

                <span class="button effect-button"></span>

                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
                <span class="circle bottom-right"></span>
              </span>
            </span>
          </div>
          <div id="menu_burger">
            <div class="bar bar1"></div>
            <div class="bar bar2"></div>
            <div class="bar bar3"></div>
          </div>
        </div>

          <nav id="nav_menu">
            <a href="<?php echo get_permalink(38); ?>">Home</a>
            <a href="<?php echo get_permalink(105); ?>">Les ateliers</a>
            <a href="<?php echo get_permalink(42); ?>" >Réalisations</a>
            <a href="<?php echo get_permalink(49); ?>" >Les membres</a>
            <a href="<?php echo get_permalink(44); ?>" >Agenda</a>
            <a href="<?php echo get_permalink(47); ?>" >Actualités</a>
            <a href="<?php echo get_permalink(63); ?>" >Contact</a>
            <a href="<?php echo get_permalink(107); ?>" >Mentions</a>
            <a href="<?php echo get_permalink(109); ?>" >qui sommes nous ?</a>
          </nav>

      </div>
    </header>
