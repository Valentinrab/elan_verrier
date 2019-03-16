'use strict';

class Faq{
  constructor(){
    // this.cat = $('.post-categories');
    // this.catContent = $('.post-categories').find('a');
    this.parentCat = document.getElementsByClassName('.categorie');
    // this.index = 'toto';
  }

  init(){

    console.log(this.parentCat[0]);
    // $(this.parentCat).each(function() {
      // console.log($(this.index));      // this.cat = $(this.catContent)[index];
      // for (var i = 0; i < this.parentCat.length; i++) {
        // console.log('toto');
        // this.parentCat[i].addClass('toto');
      // }

      //   this.cat = $(this.catContent)[0];
      //
      // $(this.cat).text();
      // console.log($(this.cat).text());

        // console.log( index + ": " + $(this.catContent).text() );
    //   // $(this).addClass(this.nomCat);
    // })
    //recupère le nom de la catégorie
    // this.cat = $(this.catContent)[this.index];
    // console.log($(this.cat).text());



    // $(this.catContent).each(function(index) {
      // console.log(this.cat = $(this).text());
      // console.log($(this.parentCat)[1]);
      // console.log(this.cat);
      // $(this.parentCat).addClass(this.cat);



    // });
    // this.toto = $(this.catContent)[0];
    // // console.log(this.catContent[0]);
    // this.test = $(this.parentCat)[0];
    // $(this.test).addClass(this.toto);
    // console.log(this.parentCat[0]);
    }
  }


$(document).ready(() => {
	const faq = new Faq();
	faq.init();
})
