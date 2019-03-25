// external js: masonry.pkgd.js
$(window).on("load", function (e) {

  var $grid = $('.grid').masonry({
  itemSelector: 'none',
  columnWidth: '.grid-sizer',
  percentPosition: true,
  stagger: 300,
  // nicer reveal transition
  visibleStyle: { transform: 'translateY(0)', opacity: 1 },
  hiddenStyle: { transform: 'translateY(50px)', opacity: 0 }
  });

  // initial items reveal
$grid.imagesLoaded( function() {
  $grid.removeClass('are-images-unloaded');
  $grid.masonry( 'option', { itemSelector: '.grid-item' });
  var $items = $grid.find('.grid-item');
  $grid.masonry( 'appended', $items );
});


  // document.getElementById('grid').style.opacity = 1;
  // $grid.style.opacity = 1;
  // $('.grid').imagesLoaded().progress( function() {
  //   $('.grid').masonry('layout');
  // });




});
