$(document).ready(function(){
	$("#bprofile").click(function(){
		$("#bus,#add,#report").removeClass('activee');
		$("#bprofile").addClass('activee');
		$(".buses,.add,.Report").hide();
		$(".buseprofile").show();
	});

	$("#add").click(function(){
		$("#bus,#bprofile,#report").removeClass('activee');
		$("#add").addClass('activee');
		$(".buses,.buseprofile,.Report").hide();
		$(".add").show();
	});

	$("#report").click(function(){
		$("#bus,#bprofile,#add").removeClass('activee');
		$("#report").addClass('activee');
		$(".buses,.buseprofile,.add").hide();
		$(".Report").show();
	});

	$("#bus").click(function(){
		$("#report,#bprofile,#add").removeClass('activee');
		$("#bus").addClass('activee');
		$(".Report,.buseprofile,.add").hide();
		$(".buses").show();
	});


	$(".adduser-title").click(function() {
		$(".addusercontents").toggle();
	});

	$(".addbus-title").click(function() {
		$(".addbuscontents").toggle();
	});

	$(".manageheader").click(function() {
		$(".managecontents").toggle();
	});

	$('#myTable').Tabledit({
    columns: {
    identifier: [0, 'ID'],                    
    editable: [[0, 'ID'], [1, 'bName'],[2, 'bFrom'], [3, 'bTo'], [4, 'aTime'],[5, 'dTime'],[6, 'price']]
	}
	});

});