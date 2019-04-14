var index = 1;
showSlides(index);

function showSlides(n) {
  if (n > $(".slides").length) {
  	index = 1
  } 
  if (n < 1) {
  	index = $(".slides").length
  }

  for (var i = 0; i < $(".slides").length; i++) {
    $(".slides").eq(i).hide();
  }
  for (var i = 0; i < $(".dot").length; i++) {
    $(".dot").eq(i).removeClass("activeDot");
  }

  $(".slides").eq(index-1).css("display", "block");
  $(".dot").eq(index-1).addClass("activeDot");
}

function changeSlide(n) {
  showSlides(index += n);
}

function gotoSlide(n) {
  showSlides(index = n);
}