var $ = jQuery.noConflict();

	$(window).load(function() {
    	$('#preloader').fadeOut('slow');
    	$('.home').removeClass('page-template-default');
    	setTimeout(function() {
    		$('#blueEarlEventModal').modal();
		}, 2000);
	});
$(document).ready(function() {
	//$('#blueEarlEventModal').modal('show');
	$('#blueEarlEventModal').on('hidden.bs.modal', function () {
    	$('#blueEarlEventModal iframe').removeAttr('src');
	});
    $('.eme-ongoing-event').addClass('text-center');
    $('#wpsl-radius').find('label').addClass('radius-label');
    $('#emeRss').find('a').addClass('btn btn-primary');
    $("#menu-main-navigation-bar").find('.menu-item').addClass('nav-item');
    $("#menu-main-navigation-bar").find('a').addClass('nav-link');
    $('.dropdown-toggle').removeAttr('title');
    $('.nav-link').removeAttr('title');
    $('.dropdown').on('show.bs.dropdown', function(e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });
    $('.dropdown').on('hide.bs.dropdown', function(e) {
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });
});
var $window = $(window);

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
checkWidth();
$(window).resize(checkWidth);


