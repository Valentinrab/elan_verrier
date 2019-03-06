'use strict';

class Faq{
  constructor(){
    this.btn = ev.target;
    this.plus = $(btn).next();
    thid.old = $(".plus.active") ;
    this.btnLink = $(".btn-link");
  }

  init(){
    this.btnLink.on('click', (ev)=>{

      this.old.each(function( i, plus ){
        $(plus).removeClass('active');
      })

      this.plus.addClass("active");

    })
  }
}

$(document).ready(() => {
	const faq = new Faq();
	faq.init();
}
