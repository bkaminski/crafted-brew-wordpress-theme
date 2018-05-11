var $ = jQuery.noConflict();

	//ready func's
	$(document).ready(function() {

		//Add Bootstrap 4 Classes to Navigation
		$("#menu-main-navigation-bar").find('.menu-item').addClass('nav-item');
		$("#menu-main-navigation-bar").find('a').addClass('nav-link mr-5');

	//End Ready	
	});

// Swap alignment at mobile
var $window = $(window);
     // Function to handle changes to style classes based on window width
     //Different from Bootstrap's 768px but working and tested
     function checkWidth() {
        if ($window.width() < 750) {
        };
        if ($window.width() >= 750) {
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
$(window).resize(checkWidth);	

