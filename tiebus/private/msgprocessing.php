<?php  include('session.php');?>
<?php 

$name = $_POST['username'];
$msg = $_POST['msg'];

$name = trim($name);
$msg = trim($msg);


$name = mysqli_real_escape_string($conn,$name);
$msg = mysqli_real_escape_string($conn,$msg);

$name = htmlentities($name);
$msg = htmlentities($msg);

$sql = "INSERT INTO `sms` (`ID`, `name`, `message`, `time`) VALUES (NULL, '$name', '$msg', CURRENT_TIMESTAMP)";

$result = mysqli_query($conn,$sql);

if ($result) {
	echo "success";
}else{
	echo "request failed";
}

?>