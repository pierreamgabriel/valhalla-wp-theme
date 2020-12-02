/**
 * File valhalla-carousel.js.
 *
 * Change the home page header background.
 *
 */

( function( $ ) { 
    "use strict";
    let count = 0;
    $( "#carousel-item1" ).addClass( "active" );
    $("#header-carousel").on('slide.bs.carousel', function () {
        count = count +1;
        if (count === 1) {
            $("#home-header").removeClass("home-header-background1");
            $("#home-header").addClass("home-header-background2");
            }
            if (count === 2) {
            $("#home-header").removeClass("home-header-background2");
            $("#home-header").addClass("home-header-background3");
            }
            if (count === 3) {
            count = 0;
            $("#home-header").removeClass("home-header-background3");
            $("#home-header").addClass("home-header-background1");
            }
        
    });
} )(jQuery);