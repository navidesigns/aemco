$( document ).ready(function() {

// hamburger toggle

$( ".nav-toggle" ).click(function() {
 $(this).toggleClass('active');
 $(".nav-items").toggle();
});

// homepage bxslider
 $('.bxslider').bxSlider();


// sticky homepageslider

$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('.main-header').addClass("sticky");
  } else {
    $('.main-header').removeClass("sticky");
  }
});



  //end
});


