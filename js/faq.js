'use strict';

class Faq{
  constructor(){
    this.btnLink = $(".card-flex");
  }

  init(){
    this.btnLink.on('click', (ev)=>{
      console.log('hey')
    // $(ev.target).addClass("temp");
    // $(".btn-link .plus").removeClass('active');
    // $(".temp .btn-link .plus").addClass('active');
    //
    // $(ev.target).parent().find('.plus').toggleClass("active");
    // $(".temp").removeClass('active');

    })
  }
}

$(document).ready(() => {
	const faq = new Faq();
	faq.init();
})
