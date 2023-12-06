(function($) {

	"use strict";

	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	$('#check-icon').on('click', function () {
      $('#sidebar').toggleClass('active');
      $('#check-icon').css({"display": "none", });
      $('.c').css({"display": "block", });




  });

// A $( document ).ready() block.


  $('#sideBar').on('click', function () {
    $('#sidebar').toggleClass('active');


});

$('#sideBar').on('click', function () {
    $('#check-icon').css({"display": "block", });
    $('.c').css({"display": "none", });


});

})(jQuery);
