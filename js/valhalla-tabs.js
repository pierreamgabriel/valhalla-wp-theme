/**
 * File valhalla-tabs.js.
 *
 * Activate the jQuery UI tabs on home and service pages.
 *
 */

( function( $ ) { 
    "use strict";

    $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
    $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );  
} )(jQuery);