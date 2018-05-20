var $ = jQuery.noConflict();

$(window).load(function() {
        $("#preloader").fadeOut("slow");
    });

	//ready func's
	$(document).ready(function() {

        //Hide interior body bg on home page
        $('.home').removeClass('page-template-default');

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
            $('.pf-1').addClass('text-center');
            $('.btn-1').addClass('mx-auto d-block');
            $('.toggle-padding').removeClass('p-0');
        };
        if ($window.width() >= 768) {
            $('.pf-1').removeClass('text-center').addClass('text-right');
            $('.btn-1').removeClass('mx-auto d-block');
            $('.toggle-padding').addClass('p-0');
        }
    }
    // Execute on load
    checkWidth();
    // Bind event listener
$(window).resize(checkWidth);	

