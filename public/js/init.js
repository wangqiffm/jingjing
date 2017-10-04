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

      var $button = $(
          '  <div  id="source-button" class="fixed-action-btn horizontal" style="position: absolute; display: inline-block; right: 5px; top:5px;">' +
          '          <a class="btn-floating btn-large red">' +
          '          <i class="large material-icons">mode_edit</i>' +
          '          </a>' +
          '          <ul>' +
          '          <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>' +
          '          <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>' +
          '          <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>' +
          '          <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>' +
          '          </ul>' +
          '</div>' ).click(function(){
          var html = $(this).parent().html();
          // html = cleanSource(html);
          $("#source-modal pre").text(html);
          $("#source-modal").modal();
      });

      $(".bs-component").hover(function(){
          $(this).append($button);
          $button.show();
      }, function(){
          $button.hide();
      });

  }); // end of document ready
})(jQuery); // end of jQuery name space