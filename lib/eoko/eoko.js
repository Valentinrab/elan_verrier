
// Eokojs slider
// Authors : Fred Rand & Clement Vlnc ( Lp Webdesign 2018-2019 / Team Eoko ! )
// Version : 0.0.1

"use strict";

(function(){

// Public Class
window.Eoko = class Eoko {

	// The constructor
	// @reference { string } the id of the HtmlElement which is the reference Element to position the slider
	// @options { object } the list of option
	constructor( reference, options ) {

		if( !reference ){
			throw new Error("reference is not found");
		}else
		if( !options ){
			throw new Error("Eokojs needs options");
		}else
		if( !Array.isArray( options ) ){
			throw new Error("Eokojs options must be an array of object");
		}

		this.reference = document.getElementById( reference );
		this.options = options ;
		this.image_list = [];
		this.nb_slide = options.length;
		this.slide_position = 1;

		this.init(); // Initialize

	}

	init(){

		this.build();

		this.bindEvents();

		this.observeLoadingStatus();

		this.appendToPage();

	}

	bindEvents(){


		// Throttling the swipe to avoid multiple call when...
		// ...fast clicking on the prev and next buttons
		const  throttled = (delay, fn)=> {
		  let lastCall = 0;
		  return function (...args) {
		    const now = (new Date).getTime();
		    if (now - lastCall < delay) {
		      return;
		    }
		    lastCall = now;
		    return fn(...args);
		  }
		}

		const throttledSwipeLeft = throttled( 700, this.swipeLeft.bind( this ) );
		const throttledSwipeRight = throttled( 700, this.swipeRight.bind( this ) );

		this.btn_left.addEventListener("click", ()=>{

			throttledSwipeLeft();
			// this.displayBtn();

		});

		this.btn_right.addEventListener("click", ()=>{

			throttledSwipeRight();
			// this.displayBtn();

		});

	}



	// Create the slider html
	build(){

		// Create a slide and save images reference
		// @image_content { url } - the image url
		// @first_el { boolean } - if true add "is_current" class to the slide
		// @return { htmlElement } - the html for image
		const addImagePart = ( image_content, first_el ) => {

			let ekjs_slide = document.createElement("li");
			ekjs_slide.setAttribute("class", "ekjs_slide");

			// first slide is visible
			if( first_el ){
				ekjs_slide.classList.add("is_current");
			}

			let ekjs_image_container = document.createElement("div");
			ekjs_image_container.setAttribute("class", "ekjs_image_container");

			let ekjs_image = document.createElement("img");
			ekjs_image.setAttribute("class", "ekjs_image");
			const ekjs_image_alt = "une image representant les ateliers";
			ekjs_image.setAttribute("alt", ekjs_image_alt );
			ekjs_image.setAttribute("src", image_content );

			ekjs_image_container.appendChild( ekjs_image );
			ekjs_slide.appendChild( ekjs_image_container );

			this.image_list.push( ekjs_image ); // Save images

			return ekjs_slide;
		}

		// Create the slide texts
		// @title_content { string } - the title of the slide
		// @text_content { string } - the text of the slide
		// @return { htmlElement } - the html for title and text
		const addTextPart = ( title_content,  text_content, first_el )=> {

			let ekjs_info_container = document.createElement("li");
			ekjs_info_container.setAttribute("class", "ekjs_info_container");

			let ekjs_info = document.createElement("div");
			ekjs_info.setAttribute("class", "ekjs_info");

			let ekjs_info_title_container = document.createElement("h3");
			ekjs_info_title_container.setAttribute("class", "ekjs_info_title_container");

			let ekjs_info_title = document.createElement("span");
			ekjs_info_title.setAttribute("class", "ekjs_info_title is_current");
			ekjs_info_title.textContent = title_content;

			let ekjs_info_text = document.createElement("p");
			ekjs_info_text.setAttribute("class", "ekjs_info_text is_current");
			ekjs_info_text.textContent = text_content;

			if( first_el ){

				ekjs_info_title.classList.add("is_current");
				ekjs_info_text.classList.add("is_current");
				ekjs_info.classList.add("is_current");

			}

			ekjs_info_title_container.appendChild( ekjs_info_title );
			ekjs_info.appendChild( ekjs_info_title_container );
			ekjs_info.appendChild( ekjs_info_text );
			ekjs_info_container.appendChild( ekjs_info );

			return ekjs_info_container;

		}

		// Create the slider backbone
		const createConcreate = ()=> {

			this.concreate = document.createElement("div");
			this.concreate.setAttribute("class", "eokojs");
			this.concreate.innerHTML = template ;

		}

		// Build the complete slider
		const putAllTogether = ()=> {

			createConcreate();
			const images_container = this.concreate.querySelector('.ekjs_slides_container');
			const texts_container = this.concreate.querySelector('.ekjs_infos');

			let image_part = '';
			let text_part = '';
			this.options.forEach( ( item, index, array ) => {

				if( index == 0 ){
					image_part = addImagePart( item.image_content, true );
					text_part = addTextPart( item.title_content , item.text_content, true) ;
				}else{
					image_part = addImagePart( item.image_content );
					text_part = addTextPart( item.title_content, item.text_content);
				}


				images_container.appendChild( image_part );
				texts_container.appendChild( text_part );

			})
		}

		const initPagination = ()=>{

			this.current_num.textContent = '1';
			this.total_slide.textContent = '' + this.nb_slide;
		}

		//========================================================

		putAllTogether();
		this.getHtmls();
		initPagination();


	}
	swipeLeft(){

		if( this.slide_position == 1 ){ return; } // Theres no previous slider

		// Manage image swipe
		const changeImage = ()=>{
			const current_slide = this.concreate.querySelector(".ekjs_slide.is_current");
			const previous_slide = current_slide.previousSibling;

			current_slide.classList.add("is_right"); // Shrinks the current slider from left

			// The previous slide becomes the current slide
			current_slide.classList.remove("is_current");
			previous_slide.classList.add("is_current");
		}

		// Manage texts swipe
		const changeTexts = ()=>{

			const current_info = this.concreate.querySelector(".ekjs_info.is_current");
			const current_info_container = current_info.parentElement;
			const previous_info = current_info_container.previousSibling.querySelector(".ekjs_info");

			// The next info becomes the current info
			current_info.classList.remove("is_current");
			previous_info.classList.add("is_current");
		}

		//========================================================

		changeImage();
		changeTexts();
		this.raisePaginationNum( false );
		this.slide_position--;
		this.deactivateNavDirection();

	}
	swipeRight(){

		if( this.slide_position == this.nb_slide ){ return; } // Theres no next slider

		// Manage image swipe
		const changeImage = ()=>{

			const current_slide = this.concreate.querySelector(".ekjs_slide.is_current");
			const next_slide = current_slide.nextSibling;

			// The next slide becomes the current slide
			// The next slide shrinks from left
			current_slide.classList.remove("is_current","is_right");
			next_slide.classList.add("is_current","is_right");
		}

		// Manage texts swipe
		const changeTexts = ()=>{

			const current_info = this.concreate.querySelector(".ekjs_info.is_current");
			const current_info_container = current_info.parentElement;
			const next_info = current_info_container.nextSibling.querySelector(".ekjs_info");

			// The next info becomes the current info
			current_info.classList.remove("is_current");
			next_info.classList.add("is_current");
		}

		//========================================================

		changeImage();
		changeTexts();
		this.raisePaginationNum( true );
		this.slide_position++;
		this.deactivateNavDirection();

	}

	deactivateNavDirection(){

			this.btn_left.classList.remove('is_disabled');
			this.btn_right.classList.remove('is_disabled');

			if( this.slide_position == this.nb_slide ){

					this.btn_right.classList.add('is_disabled');

			}else if( this.slide_position == 1 ){

					this.btn_left.classList.add('is_disabled');

			}
	}

	raisePaginationNum( yes ){

		let next_pos = Number( this.current_num.textContent ) + 1;

		// decrease pagination num
		if( !yes ){
			next_pos = Number(this.current_num.textContent ) - 1 ;
		}

		this.current_num.textContent = next_pos;

	}

	// Append the slider to the HtmlElement reference
	appendToPage(){

		this.reference.appendChild( this.concreate );

	}

	// Cache useful htmls
	getHtmls(){

		this.btn_left = this.concreate.querySelector('.ekjs_left');
		this.btn_right = this.concreate.querySelector('.ekjs_right');

		this.current_num = this.concreate.querySelector('.ekjs_current_num');
		this.total_slide = this.concreate.querySelector('.ekjs_nb_slide');

	}

	// Check if the slider was created
	// @return { Eoko Class }
	observeLoadingStatus(){

		const _self = this;

		this.is_loading = new Promise( function( resolve, reject ) {

			// Instanciate a MutationObserver to listen to append event in the slider container
		 	_self.mutationObserver = new MutationObserver( mutations => {

				  mutations.forEach(( mutation )=> {

				  		resolve( _self ); // The slider is loaded, we resolve the Promise and pass Eoko Class
				  });

			});

			// Starts listening for changes in the slider container element
			const target =  _self.reference;
			_self.mutationObserver.observe(  target , {
				attributes: true,
				characterData: true,
				childList: true,
				subtree: true,
				attributeOldValue: true,
				characterDataOldValue: true
			});

		});

	}
	// displayBtn(){
	// 	console.log(this.slide_position);
	// 	if( this.slide_position == 1 ){
	// 		this.btn_left = this.concreate.querySelector('.ekjs_left');
	// 		this.btn_left.style.opacity = 0;
	// 		this.btn_right.style.opacity = 1;
	// 	}else if( this.slide_position == this.nb_slide ){
	// 		this.btn_right = this.concreate.querySelector('.ekjs_right');
	// 		this.btn_right.style.opacity = 0;
	// 		this.btn_left.style.opacity = 1;
	// 	}else{
	// 		this.btn_right.style.opacity = 1;
	// 		this.btn_left.style.opacity = 1;
	// 	}
	//
	// }
	// possible method
	autoplay(){

		let go_right = true;
		const init = ()=>{

			if( go_right ){

				this.swipeRight();


				if( this.slide_position == this.nb_slide ){ // hitting last slide
						go_right = false;
				}

			}else{
				this.swipeLeft();

				if( this.slide_position == 1 ){ // hitting first slide
						go_right = true;
				}
			}

		}

		init();

		// ...

	}

}

const template =
`<!-- Slides -->
<div class="ekjs_slider">

	<ul class="ekjs_slides_container"></ul>

	<!-- Arrows -->
	<div class="ekjs_arrows">
	<button class="ekjs_arrow ekjs_left is_disabled"><i class="fas fa-angle-left"></i></button>
	<button class="ekjs_arrow ekjs_right"><i class="fas fa-angle-right"></i></button>

	</div>

	<!-- Pagination -->
	<div class="ekjs_pagination">
		<span class="ekjs_current_num_container">
			<span class="ekjs_current_num is_current">0</span>
		</span>

		<span class="separator"> / </span>
		<span class="ekjs_nb_slide">0</span>

	</div>

</div>

<!-- Infos -->
<ul class="ekjs_infos"></ul>
`;

})();
