'use strict';

class Faq{
  constructor(){
  //  this.plus = $(btn).next();
    //thid.old = $(".plus.active") ;
    this.btnLink = $(".btn-link");
  }

  init(){
    this.btnLink.on('click', (ev)=>{
      console.log("vgyv");
      //this.btn = ev.target;

    /*  this.old.each(function( i, plus ){

    })*/
$(ev.target).addClass("temp");
    $(".btn-link .plus").removeClass('active');
    $(".temp .plus").addClass('active');

    $(ev.target).parent().find('.plus').toggleClass("active");
    $(".temp").removeClass('active');

    })
  }
}

$(document).ready(() => {
	const faq = new Faq();
	faq.init();
})
