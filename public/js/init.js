(function ($) {
  $(document).ready(function () {

    $('.button-collapse').sideNav({
      closeOnClick: true
    });
    $('.parallax').parallax();
    $(".dropdown-button").dropdown({
      hover: true,
      belowOrigin: true,
      constrainWidth: false
    });

    $(".responsive-img").unveil();
    $('.materialboxed').materialbox();


    $('.scrollspy').scrollSpy({
      scrollOffset: 60
    });
    $('.menu-section').scrollSpy({
      scrollOffset: 60
    });
    // Floating-Fixed table of contents
    setTimeout(function () {
      var tocWrapperHeight = 260; // Max height of ads.
      var tocHeight = $('.toc-wrapper .table-of-contents').length ? $('.toc-wrapper .table-of-contents').height() : 0;
      var socialHeight = 95; // Height of unloaded social media in footer.
      var footerOffset = $('body > footer').first().length ? $('body > footer').first().offset().top : 0;
      var bottomOffset = footerOffset - socialHeight - tocHeight - tocWrapperHeight;

      var pushpinObj = {};


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

      $('.toc-wrapper').pushpin(pushpinObj);
    }, 100);

    $('select').material_select();


    // var yesterday = new Date((new Date()).valueOf()-1000*60*60*24);
    // $('.datepicker').on('focus', function() {
    //     // open the picker when enter/space is pressed
    // })
    jQuery.extend(jQuery.fn.pickadate.defaults, {
      monthsFull: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
      monthsShort: ['Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
      weekdaysFull: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
      weekdaysShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
      today: 'Heute',
      clear: 'Löschen',
      close: 'Schließen',
      firstDay: 1,
      format: 'dddd, dd. mmmm yyyy',
      formatSubmit: 'yyyy/mm/dd'
    });

    jQuery.extend(jQuery.fn.pickatime.defaults, {
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
        {from: [0, 0, 0], to: new Date((new Date()).valueOf() - 1000 * 60 * 60 * 24)}
      ],
      onClose: function () {
        $(document.activeElement).blur();
      },
      // editable: true,
      onStart: function () {
        var date = new Date();
        this.set('select', new Date())
        // this.setDate( date.getFullYear(), date.getMonth() + 1, date.getDate() )
      }
    });

    $(".captcha_image").click(
      function () {
        var randomLetter = String.fromCharCode(Math.floor(Math.random() * (122 - 97)) + 97);
        $(this).attr("src", $(this).attr("src") + randomLetter);
      }
    );
  }); // end of document ready
})(jQuery); // end of jQuery name space