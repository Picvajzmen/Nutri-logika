
/******* OPEN CLOSE BUTTON DASHBOARD ******/
$(document).ready(function () {
    $('.open-close-button__wrapper').click(function(){
      $(this).toggleClass("arrow-up");
      let x = $(this).attr('name');
      $('#'+x).toggleClass("ostalo-info-open");
    })
  });