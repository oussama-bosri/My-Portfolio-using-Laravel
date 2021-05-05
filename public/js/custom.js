   $(document).ready(function(){
 
 
    
  $('.work-slider').slick({
    autoplay: true,
  autoplaySpeed: 4000,
  });
});
 
 // move to top

 $("a[href='#top']").click(function() {
  window.scroll({top: 0, behavior: "smooth"})
  return false;
});
 
   // Add smooth scrolling to all links

   $("a").on('click', function(event) {

  if (this.hash !== "") {
    
    event.preventDefault();
    
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 1800, function(){

      });
  } 
});

$('body').append('<div style="" id="loadingDiv"><div class="loader">Loading...</div></div>');
$("body").css("overflow", "hidden");
$(window).on('load', function(){
  
  setTimeout(removeLoader, 20);
  
});
function removeLoader(){
  $('.contact-me-text').textillate();
	$('.big-font-size').textillate();
  $("body").css("overflow-y", "scroll");
  wow = new WOW( {
    boxClass:     'wow',
    animateClass: 'animated',
    offset:       45
    }
);

wow.init();
    $( "#loadingDiv" ).fadeOut(500, function() {
      // fadeOut complete. Remove the loading div
      $( "#loadingDiv" ).remove(); 
     
       
  });  
}

