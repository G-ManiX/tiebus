<?php include '../database/db.php';
		session_start();

		$error = '';

	   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 

      
      $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM lg_info WHERE uname = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['Active'];
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         
         header("location: ../private/index.php");
      }else {
         $error = '<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp Username or Password is Incorrect';
      }
   }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tie Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="../image/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../image/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../image/favicon/favicon-16x16.png">
	<link rel="manifest" href="../image/favicon/manifest.json">
	<link rel="mask-icon" href="../image/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>

	<div id="login_form">
		<div class="form">
		<div id="processing"><?php echo $error;?></div>
			<form autocomplete="off" method="POST" action="login.php">
			<input type="text" name="uname" placeholder="Username"><br>
			<input type="password" name="password" placeholder="password"><br>
			<input type="submit" name="submit" value="sign in">
			<form>
		</div>
	</div>
</body>
</html>