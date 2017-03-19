$(document).ready(function() {    
  $("body").css("opacity", "1");
});

$(function(){
  init();
});

function init() {

	

	console.log("Yes")
	$('.counter').counterUp({
	  delay: 10,
	  time: 2000,
	});
	function getCurrentScroll() {
		return window.pageYOffset || document.documentElement.scrollTop;
	}

	$(".hamburger-menu").sideNav({
		menuWidth: 250,
		edge: 'right',
	});

	$('.panel-collapse').on('show.bs.collapse', function () {
    $(this).siblings('.panel-heading').addClass('active');
  });

  $('.panel-collapse').on('hide.bs.collapse', function () {
    $(this).siblings('.panel-heading').removeClass('active');
  });

  $('.dropdown-button').dropdown({
      hover: true, // Activate on hover
    }
  );

	// Fixed Header
	var header_fixed = 50;
	var width = document.body.clientWidth;
	// console.log(header_fixed)
	// $(window).on('scroll', function() {
	// 	var scroll = getCurrentScroll();
	// 	if ( scroll >= header_fixed && width > 600 ) {
	// 		$('.navbar').addClass('navbar-fixed');
	// 	} else {
	// 		$('.navbar').removeClass('navbar-fixed');
	// 	}
	// });


}