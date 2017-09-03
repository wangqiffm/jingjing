(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $(".dropdown-button").dropdown({
    	hover: true,
    	belowOrigin:true,
    	constrainWidth:false
    });

	$('.slider').slider();
  }); // end of document ready
})(jQuery); // end of jQuery name space