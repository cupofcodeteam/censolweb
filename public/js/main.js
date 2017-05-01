
$(document).ready(function() {
  if (isBreakPoint('xs') || isBreakPoint('md') || isBreakPoint('sm')){
    $('.appear-right').addClass('appear-left');
    $('.appear-right').toggleClass('appear-right');

    $('.appear-zoom').addClass('appear-left');
    $('.appear-zoom').toggleClass('appear-zoom');
  }else {
    scrollingNav();
  }

  if (isBreakPoint('md') || isBreakPoint('sm')) {
    scrollingNav();
  }
});

$(window).resize(function() {
  if (isBreakPoint('xs') || isBreakPoint('md') || isBreakPoint('sm')){
    $('.appear-right').addClass('appear-left');
    $('.appear-right').toggleClass('appear-right');

    $('.appear-zoom').addClass('appear-left');
    $('.appear-zoom').toggleClass('appear-zoom');
  }else {
    scrollingNav();
  }

  if (isBreakPoint('md') || isBreakPoint('sm')) {
    scrollingNav();
  }

  if (isBreakPoint('xs')) {
    unbindScrollingNav();
  }
});

function parallaxInit() {
  $("#promotion").parallax("50%", 0.3);
  $("#twitter").parallax("50%", 0.3);
  $("#promotion-two").parallax("50%", 0.3);
  $("#about-video").parallax("50%", 0.3);
  $("#onepage #fun-fact").parallax("50%", 0.3);
  $("#onepage #shop").parallax("50%", 0.3);
  $("#landing #video-promotion").parallax("50%", 0.3);
  $("#landing #feature-in").parallax("50%", 0.3);
}
parallaxInit();


  $('#client-carousel').carousel({
    interval: 4000
  });

$("home-top").ready(function(){
  $("#home-top").css('height',$(window).height()*0.90);
  $(window).resize(function() {
    $("#home-top").css('height',$(window).height()*0.90);
  });
});

$("intercambio-country").ready(function(){
  $("#intercambio-country").css('height',$(window).height()*0.90);
});

$("intercambio-Vnzla").ready(function(){
  $("#intercambio-Vnzla").css('height',$(window).height()*0.90);
});


function isBreakPoint(bp) {
  var w = $(window).width();
  switch (bp) {
    case 'xs':
    return (w <= 767);
    break;
    case 'sm':
    return (w >=  768 && w <= 991);
    break;
    case 'md':
    return (w >=  992 && w <= 1199);
    break;
    case 'lg':
    return (w >= 1400);
    break;
  }
}
