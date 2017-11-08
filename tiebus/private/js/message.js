var form = document.getElementById("sendForm");


form.onsubmit = function(e){
	sendmsg(e);
}

function sendmsg(e){
   var xhr = new XMLHttpRequest();
   var username = document.getElementById("username").value;
   var msg = document.getElementById("msg").value;
   var msg = msg.trim();
   
   if (!msg || msg.length === 0) {
    alert("Please Enter all the fields");
    e.preventDefault();
    return false;
   }else{
   	var vars = "username="+username+"&msg="+msg;

       xhr.open("POST","msgprocessing.php",true);
       xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
          return;
        }
       }
       xhr.send(vars);
       e.preventDefault();
       form.reset();
   }
   
}

$(document).ready(function(){
  setInterval(function(){
    $("#list").load("msg_asyc.php");
  }, 500);

function scrollbottom(){
  var tal = document.getElementById("mainx");
  tal = tal.scrollTop +=500;
  console.log(tal);
}

var below = setInterval(function(){
  scrollbottom();
},500);

function stopFunction(){
  clearInterval(below);
}

 
})

