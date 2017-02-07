(
  function() {
    document.getElementById("home-top").style.height = $(window).height()*0.80+"px";
    document.getElementById("intercambio-country").style.height = $(window).height()*0.90+"px";
    document.getElementById("intercambio-Vnzla").style.height = $(window).height()*0.90+"px";
}());

window.onresize = function(event) {
    document.getElementById("home-top").style.height = $(window).height()*0.80+"px";
    document.getElementById("intercambio-country").style.height = $(window).height()*0.90+"px";
    document.getElementById("intercambio-Vnzla").style.height = $(window).height()*0.90+"px";
};


jQuery(function ($) {

    'use strict';

    // ----------------------------------------------
    // Table index
    // ----------------------------------------------

    /*-----------------------------------------------
    # Dropdown Menu Animation
    # Navigation Fixed
    # Search
	# Parallax Scrolling
    # Slider Height
    # Active mixitup
    # smoothScroll
    # Pretty Photo
    # Single Portfolio
    # Close Single Portfolio
    # Timer
    # Google Map Customization
    -------------------------------------------------*/

	 // ----------------------------------------------
    // # Dropdown Menu Animation
    // ----------------------------------------------

	(function () {
		$('.dropdown').on('show.bs.dropdown', function(e){
			$(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
		});

		$('.dropdown').on('hide.bs.dropdown', function(e){
			$(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
		});

	}());

	// ----------------------------------------------
    // # Navigation fixed
    // ----------------------------------------------

	(function () {
		$(window).on('scroll', function(){
			if( $(window).scrollTop()>650 ){
				$('#index2 #navigation .navbar-static-top').addClass('navbar-fixed-top');
			} else {
				$('#index2 #navigation .navbar-static-top').removeClass('navbar-fixed-top');
			};
			if( $(window).scrollTop()>0 ){
				$('#onepage #navigation .navbar-static-top').addClass('navbar-fixed-top');
			} else {
				$('#onepage #navigation .navbar-static-top').removeClass('navbar-fixed-top');
			};
			if( $(window).scrollTop()>0 ){
				$('#landing #navigation .navbar-static-top').addClass('navbar-fixed-top');
			} else {
				$('#landing #navigation .navbar-static-top').removeClass('navbar-fixed-top');
			}
		});
	}());

	// ----------------------------------------------
    // # Parallax Scrolling
    // ----------------------------------------------

    (function () {

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

    }());

	// ----------------------------------------------
    // # Clients Carousel Timing
    // ----------------------------------------------
	(function () {

		$('#client-carousel').carousel({
		  interval: 4000
		})
    }());
});
