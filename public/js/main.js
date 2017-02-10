
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

	// ----------------------------------------------
    // # Navigation fixed
    // ----------------------------------------------


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

    $("home-top").ready(function(){
      $("#home-top").css('height',$(window).height()*0.80);
      $(window).resize(function() {
          $("#home-top").css('height',$(window).height()*0.80);
      });
    });

    $("intercambio-country").ready(function(){
      $("#intercambio-country").css('height',$(window).height()*0.90);
    });

    $("intercambio-Vnzla").ready(function(){
      $("#intercambio-Vnzla").css('height',$(window).height()*0.90);
    });

});
