$(document).ready(function() {

$("div[id^='myModal']").each(function(){

var currentModal = $(this);

//click next
currentModal.find('.right').click(function(){
  console.log('hey');
  currentModal.modal('hide');
  currentModal.closest("div[id^='myModal']").nextAll("div[id^='myModal']").first().modal('show');
});

//click prev
currentModal.find('.left').click(function(){
  console.log('hey');
  currentModal.modal('hide');
  currentModal.closest("div[id^='myModal']").prevAll("div[id^='myModal']").first().modal('show');
});

});

});
