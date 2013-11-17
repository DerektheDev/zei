$(function(){

	// remove last right border
	// bars between, not after list items
	$('#footer-menu ul').find('li:last').css('border','0');
	


	// slideshow
	$('#slide1').show();
	$('#slide2, #slide3, #slide4, #slide5').hide();
	$('#num1').addClass('current_num')
									
	//Toggle slide
	$('#num1').click(
		function () {
			$(this).addClass('current_num');
			$('#num2, #num3, #num4, #num5').removeClass('current_num');
			$('#slide1').fadeIn('slow');
			$('#slide2, #slide3, #slide4, #slide5').fadeOut('slow');
		}
	);
	
	$('#num2').click(
		function () {
			$(this).addClass('current_num');
			$('#num1, #num3, #num4, #num5').removeClass('current_num');
			$('#slide2').fadeIn('slow');
			$('#slide1, #slide3, #slide4, #slide5').fadeOut('slow');
		}
	);
	
	$('#num3').click(
		function () {
			$(this).addClass('current_num');	
			$('#num1, #num2, #num4, #num5').removeClass('current_num');
			$('#slide3').fadeIn('slow');
			$('#slide1, #slide2, #slide4, #slide5').fadeOut('slow');
		}
	);
	
	$('#num4').click(
		function () {
			$(this).addClass('current_num');
			$('#num1, #num2, #num3, #num5').removeClass('current_num');
			$('#slide4').fadeIn('slow');
			$('#slide1, #slide2, #slide3, #slide5').fadeOut('slow');
		}
	);
	
	$('#num5').click(
		function () {
			$(this).addClass('current_num');
			$('#num1, #num2, #num3, #num4').removeClass('current_num');
			$('#slide5').fadeIn('slow');
			$('#slide1, #slide2, #slide3, #slide4').fadeOut('slow');
		}
	);
	
});
