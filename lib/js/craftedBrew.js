var $ = jQuery.noConflict();

	//ready func's
	$(document).ready(function() {

		//Add Bootstrap 4 Classes to Navigation
		$("#menu-main-navigation-bar").find('.menu-item').addClass('nav-item');
		$("#menu-main-navigation-bar").find('a').addClass('nav-link');

		//Prevent title attribute on hover
		$('.dropdown-toggle').removeAttr('title');
		$('.nav-link').removeAttr('title');

        // Add slideDown animation to dropdown
        $('.dropdown').on('show.bs.dropdown', function(e){
          $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
        });

        // Add slideUp animation to dropdown
        $('.dropdown').on('hide.bs.dropdown', function(e){
          $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
        });

	//End Ready	
	});

// Swap alignment at mobile
var $window = $(window);
     // Function to handle changes to style classes based on window width
     //Different from Bootstrap's 768px but working and tested
     function checkWidth() {
        if ($window.width() < 768) {
            $("#brewForYourSoul").addClass('d-none');
        };
        if ($window.width() >= 768) {
            $("#brewForYourSoul").removeClass('d-none');
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
$(window).resize(checkWidth);	

