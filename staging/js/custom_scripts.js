$(document).ready(function(){

	// remove last right border
	// bars between, not after list items
	$('#footer-menu ul').find('li:last').css('border','0');

	$('#zeller-carousel').carousel();

  $('.thumbnail').hover(
    function(){
      $(this).find('h5').addClass('thumbHovered');
    },
    function(){
      $(this).find('h5').removeClass('thumbHovered');
  });
  
  $('a').smoothScroll();


});
