function getURLParameter(sParam){
  var sPageURL = window.location.search.substring(1);
  var sURLVariables = sPageURL.split('&');
  for (var i = 0; i < sURLVariables.length; i++){
    var sParameterName = sURLVariables[i].split('=');
    if (sParameterName[0] == sParam){
      return sParameterName[1];
    }
  }
}

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
  
  // smooth scroll all links
  $('a:not(.showcase_link)').smoothScroll();


  // if the showcase page loads
  if(window.location.pathname == "/showcase.php"){
    // and the url contains a showcase target
    if(getURLParameter('t')){
      // navigate to it
      setTimeout(function(){
        // after 1 second
        $('html, body').animate({
          scrollTop: $('#' + getURLParameter('t')).offset().top
        }, 'slow');
      }, 500);
    }
  }

  // showcase_link click behavior listeners after document ready
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
