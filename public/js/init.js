(function($){
    $( document ).ready(function() {

    $('.button-collapse').sideNav({
        closeOnClick: true
    });
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

        $('.scrollspy').scrollSpy({
            scrollOffset:60
        });


        $('select').material_select();


        // var yesterday = new Date((new Date()).valueOf()-1000*60*60*24);
        // $('.datepicker').on('focus', function() {
        //     // open the picker when enter/space is pressed
        // })
        jQuery.extend( jQuery.fn.pickadate.defaults, {
            monthsFull: [ 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember' ],
            monthsShort: [ 'Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez' ],
            weekdaysFull: [ 'Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag' ],
            weekdaysShort: [ 'So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa' ],
            today: 'Heute',
            clear: 'Löschen',
            close: 'Schließen',
            firstDay: 1,
            format: 'dddd, dd. mmmm yyyy',
            formatSubmit: 'yyyy/mm/dd'
        });

        jQuery.extend( jQuery.fn.pickatime.defaults, {
            clear: 'Löschen'
        });

        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 2, // Creates a dropdown of 15 years to control year,
            today: 'Today',
            clear: 'Clear',
            close: 'Ok',
            closeOnSelect: true, // Close upon selecting a date,
            disable: [
                { from: [0,0,0], to:  new Date((new Date()).valueOf()-1000*60*60*24) }
            ],
            onClose: function(){
                $(document.activeElement).blur();
            },
            // editable: true,
            onStart: function() {
                var date = new Date();
                this.set('select', new Date())
                // this.setDate( date.getFullYear(), date.getMonth() + 1, date.getDate() )
            }
        });






//         picker.open()
//         picker.close()
//
// // If a “click” is involved, prevent the event bubbling.
//         event.stopPropagation()
//
// // If we want to maintain focus on the input,
// // prevent the default action on “mousedown”.
//         event.preventDefault()


        // var slider = document.getElementById('time-picker');
        //
        // noUiSlider.create(slider, {
        //     start: [ 20, 80 ],
        //     connect: true,
        //     step: 10,
        //     range: {
        //         'min': 0,
        //         'max': 100
        //     }
        // });
        //
        //
        // noUiSlider.create(slider, {
        //     start: [20, 80],
        //     connect: true,
        //     step: 1,
        //     orientation: 'horizontal', // 'horizontal' or 'vertical'
        //     range: {
        //         'min': 0,
        //         'max': 100
        //     },
        //     format: wNumb({
        //         decimals: 0
        //     })
        // });
//
//       $('.grid').packery({
//           // options
//           // use outer width of grid-sizer for columnWidth
//           columnWidth: '.grid-sizer',
// // do not use .grid-sizer in layout
//           itemSelector: '.grid-item',
//           percentPosition: true
//       });

  }); // end of document ready
})(jQuery); // end of jQuery name space