$(document).ready(function() {
// $('.next').on('click', function() {
//   console.log('next');
//     let dialog = $(this).closest('.modal');
//     dialog.modal('hide');
//     dialog.next().modal('show');
// });
// $('.prev').on('click', function() {
//   console.log('avant');
//     let dialog = $(this).closest('.modal');
//     dialog.modal('hide');
//     dialog.prev().modal('show');
// });
$("div[id^='myModal']").each(function(){

var currentModal = $(this);

//click next
currentModal.find('.next').click(function(){
  console.log('hey');
currentModal.modal('hide');
currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show');
});

//click prev
currentModal.find('.prev').click(function(){
  console.log('hey');
currentModal.modal('hide');
currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show');
});

});

});
