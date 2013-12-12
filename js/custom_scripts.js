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
  

  $('a:not(.showcase_link)').smoothScroll();
  $(document).on('click', 'a.showcase_link', function(event){
    event.preventDefault();
    switch(window.location.pathname){
      case "/showcase.php":
        $('html, body').animate({
          scrollTop: $('#'+ $(this).attr('data-target')).offset().top
        }, 'slow');
        break;
      default:
        window.location.href = $(this).attr('href');
        break;
    }
  })

});
