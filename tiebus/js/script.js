$(document).ready(function(){
	$(".nav-icon").click(function() {
		$(".site-container").slideUp();
		$(".navigation").slideDown();
	});

	$("#close").click(function() {
		$(".site-container").slideDown();
		$(".navigation").slideUp();
	});


	$(".book-now").click(function() {
		$(".modal_form").slideDown();
	});

	$(".close").click(function() {
		$(".modal_form").slideUp();
	});

});