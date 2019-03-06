$(document).ready(function(){

  $('.wrap').on('mouseover', function(e){
    let wrapHover = e.currentTarget.children[2];
    let wrapHoverHeight = e.currentTarget.children[2].offsetHeight;
    let heightCalculated = 214 - (wrapHoverHeight - 36);
    $(wrapHover).css('top', heightCalculated);
  });

  $('.wrap').on('mouseleave', function(e){
    let wrapHover = e.currentTarget.children[2];
    $(wrapHover).css('top', '214px');
  });

});
