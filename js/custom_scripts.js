function autoProgressSlides(){
	clickable_num = $('.current_num');
	int_num = clickable_num.attr('num');

	clickable_num.removeClass('current_num');
	clickable_num.next('.num').addClass('current_num');


	wrong_slides = $('.slide').not('#slide'+int_num);
	wrong_slides.fadeOut('slow');

	// console.log(wrong_slides);

	right_slide = $('.slide #slide'+int_num);

	right_slide.fadeIn('slow');
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

	// setInterval(function(){
	// 	autoProgressSlides()
	// 	// autoProgressSlides()
	// }, 1000);
	
});
