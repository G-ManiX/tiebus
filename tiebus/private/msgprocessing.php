<?php  include('session.php');?>
<?php 

$username = $_POST['username'];
$password = $_POST['password'];

$username = trim($username);
$password = trim($password);


$username = mysqli_real_escape_string($conn,$username);
$password = mysqli_real_escape_string($conn,$password);

$username = htmlentities($username);
$password = htmlentities($password);

$sql = "INSERT INTO `lg_info` (`ID`, `uname`, `password`, `user_type`, `Active`) VALUES (NULL, '$username', '$password', 'Normal', '0')";

$result = mysqli_query($conn,$sql);

if ($result) {
	echo "success";
}else{
	echo "request failed";
}

?>