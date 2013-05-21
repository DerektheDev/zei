function nextSlide(){

	$('.num.current_num').removeClass('current_num').next('.num').addClass('current_num');
	$('.slide.current_slide').removeClass('current_slide').fadeOut('slow').next('.slide').addClass('current_slide').fadeIn('slow');

	if($('.current_slide').length == 0){
		$('.slide').first().addClass('current_slide').fadeIn();
		$('.num').first().addClass('current_num');
	}
}

function prevSlide(){
	$('.num.current_num').removeClass('current_num').prev('.num').addClass('current_num');
	$('.slide.current_slide').removeClass('current_slide').fadeOut('slow').prev('.slide').addClass('current_slide').fadeIn('slow');

	if($('.current_slide').length == 0){
		$('.slide').last().addClass('current_slide').fadeIn();
		$('.num').last().addClass('current_num');
	}
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

	// slider arrows
	$('#left-arrow').click(function(){
		prevSlide();
	});
	$('#right-arrow').click(function(){
		nextSlide();
	});


	// rotate automatically
	// setInterval(, 1000);
	setInterval(function(){
		nextSlide();
		// alert('hi');
	}, 5000);

	// $('.slide').not('.current_slide').hide();

});
