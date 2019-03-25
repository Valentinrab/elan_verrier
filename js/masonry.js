// external js: masonry.pkgd.js
$(document).ready(function() {
  // $('.grid').style.display = 'inherit';
  var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: '.grid-sizer',
  percentPosition: true
  });

  $('.grid').imagesLoaded().progress( function() {
    $('.grid').masonry('layout');
  });


})
