//slider
$(document).ready(function() {
	//slider
	$('.js-main-slider').slick({
		dots: false, 
		arrows: false, 
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3500,
	});

	//scroll-link
	$('.js-scroll-link').on('click', function(e) {
		e.preventDefault();
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: ($(anchor.attr('href')).offset().top)
		}, 700);
	});
});

// URL - menu
// Открытое меню только на главной странице
var str = window.location.toString();
var pages = str.split('/');
if (pages[3] == '' || pages[3] == 'index.html' || pages[3] == 'main') {
	document.getElementById('dropdown__active').style.display = "block";
	document.getElementById('dropdown__active-button').style.backgroundColor = "#384248";
	document.getElementById('dropdown__active-button').style.color = "#fff";
}

// // GET
// function getForm() {
// 	alert('Hi');
// 	$.ajax({
// 		type: 'POST',
// 		async: false,
// 		url: "main/signup"

// 	})
// }