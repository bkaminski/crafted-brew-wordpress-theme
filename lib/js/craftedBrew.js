<<<<<<< HEAD
var $=jQuery.noConflict();$(window).load(function(){$('#preloader').fadeOut('slow');$('.home').removeClass('page-template-default');});$(document).ready(function(){$('.eme-ongoing-event').addClass('text-center');$('#wpsl-radius').find('label').addClass('radius-label');$('#emeRss').find('a').addClass('btn btn-primary');$("#menu-main-navigation-bar").find('.menu-item').addClass('nav-item');$("#menu-main-navigation-bar").find('a').addClass('nav-link');$('.dropdown-toggle').removeAttr('title');$('.nav-link').removeAttr('title');$('.dropdown').on('show.bs.dropdown',function(e){$(this).find('.dropdown-menu').first().stop(true,true).slideDown();});$('.dropdown').on('hide.bs.dropdown',function(e){$(this).find('.dropdown-menu').first().stop(true,true).slideUp();});});var $window=$(window);function checkWidth(){if($window.width()<768){$('.pf-1').addClass('text-center');$('.btn-1').addClass('mx-auto d-block');$('.toggle-padding').removeClass('p-0');$('.eme-calendar-table').find('.eventful').addClass('earl-events');};if($window.width()>=768){$('.pf-1').removeClass('text-center').addClass('text-right');$('.btn-1').removeClass('mx-auto d-block');$('.toggle-padding').addClass('p-0');$('.eme-calendar-table').find('.eventful').removeClass('earl-events');}}checkWidth();$(window).resize(checkWidth);
=======
var $ = jQuery.noConflict();

    // load func's
    $(window).load(function() {
        $('#preloader').fadeOut('slow');

        //Hide interior body bg on home page
        $('.home').removeClass('page-template-default');

    //End Load
    });

    //ready func's
    $(document).ready(function() {

        //customize ongoing event
        $('.eme-ongoing-event').addClass('text-center');
    
        //Store locator add class to enable editing of text
        $('#wpsl-radius').find('label').addClass('radius-label');

        $('#emeRss').find('a').addClass('btn btn-primary');

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
                $('.eme-calendar-table').find('.eventful').addClass('earl-events');
            };
            if ($window.width() >= 768) {
                $('.pf-1').removeClass('text-center').addClass('text-right');
                $('.btn-1').removeClass('mx-auto d-block');
                $('.toggle-padding').addClass('p-0');
                $('.eme-calendar-table').find('.eventful').removeClass('earl-events');
            }
        }
        // Execute on load
        checkWidth();
        // Bind event listener
    $(window).resize(checkWidth);	

// :-)
>>>>>>> 18907f68071382e83d825becc4e00894cfe4e162
