    <header>
      <a href="<?php echo get_permalink(38); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="logo élan verrier" id="logo"></a>

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
					<a href="<?php echo get_permalink(49); ?>" class="button button--bubble">
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
			<div class="content content--demo-3">
				<div class="hamburger hamburger--demo-3 js-hover">
					<div class="hamburger__line hamburger__line--01">
						<div class="hamburger__line-in hamburger__line-in--01"></div>
					</div>
					<div class="hamburger__line hamburger__line--02">
						<div class="hamburger__line-in hamburger__line-in--02"></div>
					</div>
					<div class="hamburger__line hamburger__line--03">
						<div class="hamburger__line-in hamburger__line-in--03"></div>
					</div>
					<div class="hamburger__line hamburger__line--cross01">
						<div class="hamburger__line-in hamburger__line-in--cross01"></div>
					</div>
					<div class="hamburger__line hamburger__line--cross02">
						<div class="hamburger__line-in hamburger__line-in--cross02"></div>
					</div>
				</div>

				<div class="global-menu">
					<div class="global-menu__wrap">
						<a class="global-menu__item global-menu__item--demo-3" href="<?php echo get_permalink(38); ?>">Accueil</a>
						<a class="global-menu__item global-menu__item--demo-3" href="<?php echo get_permalink(109); ?>">Qui sommes nous ?</a>
						<a class="global-menu__item global-menu__item--demo-3" href="<?php echo get_permalink(105); ?>">Les ateliers</a>
						<a class="global-menu__item global-menu__item--demo-3" href="<?php echo get_permalink(49); ?>">Les membres</a>
						<a class="global-menu__item global-menu__item--demo-3" href="<?php echo get_permalink(42); ?>">Réalisations</a>
						<a class="global-menu__item global-menu__item--demo-3" href="<?php echo get_permalink(47); ?>">Actualités</a>
						<a class="global-menu__item global-menu__item--demo-3" href="<?php echo get_permalink(44); ?>">Agenda</a>
						<a class="global-menu__item global-menu__item--demo-3" href="<?php echo get_permalink(63); ?>">Contact</a>
					</div>
				</div>
				<svg class="shape-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
					<path class="shape-overlays__path"></path>
					<path class="shape-overlays__path"></path>
					<path class="shape-overlays__path"></path>
				</svg>
			</div>
    </header>
