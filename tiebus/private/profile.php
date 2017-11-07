<?php  include('session.php');?>

<!DOCTYPE html>
<html>
<head>
	<title>Private Area</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="../image/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../image/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../image/favicon/favicon-16x16.png">
	<link rel="manifest" href="../image/favicon/manifest.json">
	<link rel="mask-icon" href="../image/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<div class="desktop">
		<div class="table">
			<table width="100%">
				<tr>
					<td id="navigation">
						<div class="navigation-header">TIE</div>
						<div class="nav-contents">
							<ul>
								<a href="index.php"><li><i class="fa fa-sign-in" aria-hidden="true"></i> &nbsp Requests</li></a>
								<a href="notification.php"><li><i class="fa fa-globe" aria-hidden="true"></i> &nbsp Notification</li></a>
								<a href="customerchat.php"><li><i class="fa fa-comments-o" aria-hidden="true"></i> &nbsp Customer Chat</li></a>
								<a href="message.php"><li><i class="fa fa-envelope-o" aria-hidden="true"></i> &nbsp Messages</li></a>
								<a href="admin.php"><li><i class="fa fa-tachometer" aria-hidden="true"></i> &nbsp Adminstrator Area</li></a>
								<a href="profile.php"><li class="active"><i class="fa fa-user-o" aria-hidden="true"></i> &nbsp Profile [ <?php echo $login_session;?> ]</li></a>
								<a href="logout.php"><li><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp Logout</li></a>
							</ul>
						</div>
					</td>
					<td id="main">
						<div class="main-contents">
							mains
						</div>
						<div class="no-request">
							<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> &nbsp No Request Found
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div><!--end of the desktop version-->
</body>
</html>