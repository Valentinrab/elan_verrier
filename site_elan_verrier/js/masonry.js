// external js: masonry.pkgd.js
$(document).ready(() => {
  var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  columnWidth: '.grid-sizer',
  percentPosition: true
  });

  $grid.on( 'click', function(ev) {
    ev.target.parentNode.classList = "grid-item col-sm-6";
    ev.target.style.zIndex = 2;

  })


})
