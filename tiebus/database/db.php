<?php include('db_variables.php');
  //initializing connection to the database
  $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_database) or die("Connection Failed".mysqli_error($conn));
?>
