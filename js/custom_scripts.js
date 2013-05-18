function autoProgressSlides(){
	first_num 	= $('.current_num');
	first_slide = $('.current_slide');
	
	next_num   = $(first_num).next('.num');
	next_slide = $(first_slide).next('.slide');

	first_num.removeClass('current_num');
	next_num.addClass('current_num');
	first_slide.fadeOut('slow');
	next_slide.fadeIn('slow');
}

$(document).ready(function(){

	// remove last right border
	// bars between, not after list items
	$('#footer-menu ul').find('li:last').css('border','0');

	// slideshow
	$('#slide1').show();
	$('#slide2, #slide3, #slide4, #slide5').hide();
	// $('#num1').addClass('current_num');

	// click a number to transition
	$('.num').click(function(){
		num = $(this).attr('num');
		$('.num').removeClass('current_num');
		$(this).addClass('current_num');
		$('.slide').not($('#slide'+num)).fadeOut('slow');
		$('#slide'+num).fadeIn('slow');
	});

	// rotate automatically
	// setInterval(autoProgressSlides, 1000);

	setInterval(function(){
		autoProgressSlides()
		// autoProgressSlides()
	}, 1000);

});
