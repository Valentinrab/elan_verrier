'use strict'

$(document).ready(function() {

  ///////////////////scroll reveal///////////////////

  var mq = window.matchMedia( "(min-width:768px)" );
  if (mq.matches) {
    ScrollReveal().reveal('.content_title', {
      duration: 1500,
      delay: 100,
      origin: 'left',
      distance: '50px',
      easing: 'ease'
    });
    ScrollReveal().reveal('.content_para', {
      duration: 1600,
      delay: 200,
      origin: 'right',
      distance: '50px',
      easing: 'ease'
    });
    ScrollReveal().reveal('.btn_access', {
      duration: 1700,
      delay: 400,
      origin: 'bottom',
      distance: '50px',
      easing: 'ease'
    });
    ScrollReveal().reveal('.actu_principal', {
      duration: 1500,
      delay: 100,
      origin: 'left',
      distance: '100px',
      easing: 'ease'
    });
    ScrollReveal().reveal('.content_actu_secondary', {
      duration: 1600,
      delay: 200,
      origin: 'right',
      distance: '100px',
      easing: 'ease'
    });
    ScrollReveal().reveal('.actu_reveal', {
      duration: 1500,
      delay: 100,
      interval: 300,
      origin: 'bottom',
      distance: '100px',
      easing: 'ease'
    });
    ScrollReveal().reveal('.card', {
      duration: 1600,
      delay: 200,
      origin: 'bottom',
      distance: '50px',
      easing: 'ease'
    });
    ScrollReveal().reveal('.event-reveal', {
      duration: 1600,
      delay: 200,
      interval: 200,
      origin: 'bottom',
      distance: '50px',
      easing: 'ease',
    });

    ScrollReveal().reveal('.bloc-ml', {
      duration: 1000,
      delay: 100,
      origin: 'left',
      distance: '20px',
      easing: 'ease'
    });
    ScrollReveal().reveal('.image_l', {
      duration: 1000,
      easing: 'ease'
    });
    ScrollReveal().reveal('.image_r', {
      duration: 1500,
      easing: 'ease'
    });
    ScrollReveal().reveal('.tache', {
      duration: 1500,
      delay: 100,
      easing: 'ease'
    });
    ScrollReveal().reveal('.lettrine', {
      duration: 3000,
      delay: 500,
      easing: 'ease'
    });

}

})
