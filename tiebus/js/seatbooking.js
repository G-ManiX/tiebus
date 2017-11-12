$(document).ready(function(){
	$(".toggleModify").click(function(event) {
		$(".header").toggle(200)
	});


	$(".closeConfirm").click(function(){
		$(".confirmBox").slideUp()
	});

	$(".proceedbtn").click(function(){
		$(".confirmBox").slideDown()
	});


	$("#submitThis").click(function(e){
		$("#tobehidden").hide();
		$(".loader").show();
		e.preventDefault();
	});
	
	
});