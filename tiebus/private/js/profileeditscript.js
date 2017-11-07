$(document).ready(function(){
	$("textarea").jqte();

	$("#submitbtn").click(function(event) {
   var xhr = new XMLHttpRequest();
   var about = document.getElementById("about").value;
   var contact = document.getElementById("contact").value;
   var busnamecheck = document.getElementById("busnamecheck").value;
   var vars = "about="+about+"&contact="+contact+"&busnamecheck="+busnamecheck;

       xhr.open("POST","insertabout.php",true);
       xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
          alert("Insert Successfull");
        }
       }
       xhr.send(vars);
       event.preventDefault();
});
	
})


