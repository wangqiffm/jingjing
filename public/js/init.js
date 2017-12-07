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

        $(".responsive-img").unveil();
        $('.materialboxed').materialbox();
        // $('.carousel.carousel-slider').carousel({fullWidth: true});


            // $('.slider').bxSlider();

	// $('.slider').slider();



        $('.scrollspy').scrollSpy({
            scrollOffset:60
        });
        $('.menu-section').scrollSpy({
            scrollOffset:60
        });
        // Floating-Fixed table of contents
        setTimeout(function() {
            var tocWrapperHeight = 260; // Max height of ads.
            var tocHeight = $('.toc-wrapper .table-of-contents').length ? $('.toc-wrapper .table-of-contents').height() : 0;
            var socialHeight = 95; // Height of unloaded social media in footer.
            var footerOffset = $('body > footer').first().length ? $('body > footer').first().offset().top : 0;
            var bottomOffset = footerOffset - socialHeight - tocHeight - tocWrapperHeight;

            var pushpinObj = {

            };


                pushpinObj.top = 0;

            if ($('nav').length) {
                pushpinObj.top += $('nav').height();

            }
            if ($('#index-banner').length) {
                pushpinObj.top += $('#index-banner').height();
            }
            if ($('#page-banner').length) {
                pushpinObj.top += $('#page-banner').height();

            }
            if ($('.fixed-announcement').length) {
                pushpinObj.top += 48;
            }
            console.log(pushpinObj);
            $('.toc-wrapper').pushpin(pushpinObj);
        }, 100);

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