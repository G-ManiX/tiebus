<?php  include('session.php');?>

<?php

$info = $_POST['about'];
$contact = $_POST['contact'];
$bName = $_POST['busnamecheck'];
$bName = ucfirst(strtolower($bName));
$done = 1;


$sql = "INSERT INTO `busprofile` (`busname`, `about`, `contacts`, `done`) VALUES ('$bName', '$info', '$contact', '$done')";
$insert = mysqli_query($conn, $sql);

if ($insert) {
	echo "success";
}else{
	echo "failed";
}


?>