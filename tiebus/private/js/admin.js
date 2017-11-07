function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}


$("#submituser").click(function(event) {

   var xhr = new XMLHttpRequest();
   var username = document.getElementById("useradd").value;
   var password = document.getElementById("passadd").value;
   var confirmpass = document.getElementById("confirmpass").value;

   if (!username || !password) {
    alert("Please Enter all the fields");
    return false;
   }else if (password.length <= 3) {
    alert('password should be more than 3 characters');
    return false;
   }else if (password !== confirmpass) {
    alert('password doesnot match');
    return false;
   }
   var header = document.getElementById("userloading");
   var vars = "username="+username+"&password="+password;

       xhr.open("POST","insertuser.php",true);
       xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
          alert("User Added Successfull");
        }
       }
       xhr.send(vars);
       event.preventDefault();
});


$("#submitbus").click(function(event) {
   var xhr = new XMLHttpRequest();
   var busname = document.getElementById("busname").value;
   var from = document.getElementById("from").value;
   var to = document.getElementById("to").value;
   var arrival = document.getElementById("arrival").value;
   var departure = document.getElementById("departure").value;
   var bustype = document.getElementById("bustype").value;
   if (busname == ''|| from == '' || to == '' || arrival == '' || departure == '' || bustype == '') {
    alert("Please Enter all the fields");
    return;
   }
   var addbustitle = document.getElementById("addbustitle");
   var vars = "busname="+busname+"&from="+from+"&to="+to+"&arrival="+arrival+"&departure="+departure+"&bustype="+bustype;

       xhr.open("POST","insertbus.php",true);
       xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
       xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
          alert("User Added Successfull");
        }
       }
       xhr.send(vars);
       event.preventDefault();
});
