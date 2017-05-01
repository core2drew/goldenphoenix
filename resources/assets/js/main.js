import $ from 'jquery';

$(function(){
	$('#ContactUs').click(function(){
		 $('html, body').animate({
	        scrollTop: $("#GetInTouch").offset().top
	    }, 2000);
	})
});