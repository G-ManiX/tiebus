<?php  include('session.php');?>
<?php
	$sql_bus = "SELECT * FROM bus_info";
	$result_bus = mysqli_query($conn,$sql_bus);
	$bus_count = mysqli_num_rows($result_bus);

	$unique = "SELECT DISTINCT bName FROM bus_info";
	$unique_result = mysqli_query($conn,$unique);
	$unique_count = mysqli_num_rows($unique_result);

	//selecting users for management:
	$sql = "SELECT ID,uname,user_type FROM lg_info";
	$users = mysqli_query($conn,$sql);
	$user_count = mysqli_num_rows($users);


?>
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
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
<!--	<script type="text/javascript" src="js/jquery.tabledit.js"></script>-->
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body onload="adminbuses()">
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
								<a href="admin.php"><li class="active"><i class="fa fa-tachometer" aria-hidden="true"></i> &nbsp Adminstrator &nbsp[ <?php echo $bus_count; ?> ]</li></a>
								<a href="profile.php"><li><i class="fa fa-user-o" aria-hidden="true"></i> &nbsp Profile [ <?php echo $login_session;?> ]</li></a>
								<a href="logout.php"><li><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp Logout</li></a>
							</ul>
						</div>
					</td>
					<td id="main">
						<div class="main-contents-admin">
							<nav>
							<table width="100%">
								<tr>
									<td width="25%" id="bus" class="activee">Buses</td>
									<td width="25%" id="bprofile">Bus Profile</td>
									<td width="25%" id="add">Add</td>
									<td width="25%" id="report">Report</td>
								</tr>
							</table>
							</nav>
							<section>
								<div class="buses"><!--DIV CONTAINING BUS INFORMATIONS-->
									 <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for bus names..">
										<table id="myTable">
										  <tr class="header">
										    <th style="width:20%;">Name</th>
										    <th style="width:20%;">From</th>
										    <th style="width:20%;">To</th>
										    <th style="width:15%;">Arrival</th>
										    <th style="width:15%;">Departure</th>
										    <th style="width:10%;">Price</th>
										  </tr>
										  	<?php while($businfo = mysqli_fetch_assoc($result_bus)):?>
										  <tr>
										    <td><?php echo ucfirst(strtolower($businfo['bName'])); ?></td>
										    <td><?php echo ucfirst(strtolower($businfo['bFrom'])); ?></td>
										    <td><?php echo ucfirst(strtolower($businfo['bTo'])); ?></td>
										    <td><?php echo strtolower($businfo['aTime']); ?></td>
										    <td><?php echo strtolower($businfo['dTime']); ?></td>
										    <td><?php echo $businfo['price']; ?> Tsh</td>
										  </tr>
											<?php endwhile;?>
										</table> 
								</div>
								<div class="buseprofile"><!--DIV CONTAINING BUSPROFILES INFORMATIONS-->
									<div class="busprofile-inner">
										<ul>
											<?php while($uniquebus = mysqli_fetch_assoc($unique_result)):?>
											<a href="profileEdit.php?busname=<?php echo $uniquebus['bName'];?>"><li><?php echo $uniquebus['bName'];?> Profile <span>!</span></li></a>
										<?php endwhile;?>
										</ul>
									</div>
								</div>
								<div class="add"><!--DIV FOR ADDING USERS AND BUS INFORMATION-->
									<div class="addbus">
										<div class="addbus-title" id="addbustitle">Add New Bus</div>
										<div class="addbuscontents">
										<form autocomplete="off" id="addbus_form">
										<input type="text" name="busname" id="busname" placeholder="Bus name:" required><br>
										<input type="text" name="from" placeholder="From:" id="from" required><i class="fa fa-arrows-h" aria-hidden="true"></i>
										<input type="text" name="to" placeholder="To:" id="to" required><br>
										<input type="text" name="atime" placeholder="Arrival" id="arrival" required><i class="fa fa-clock-o" aria-hidden="true"></i>
										<input type="text" name="dtime" placeholder="Daparture" id="departure" required><br>
										<input type="text" name="bustype" placeholder="Bus Type:" id="bustype" required><br>
										<input type="submit" name="submitbus" id="submitbus" value="add bus">
										</form>
										</div>
									</div>

									<div class="adduser">
										<div class="adduser-title" id="userloading">Add New User</div>
										<div class="addusercontents">
											<form autocomplete="off" id="adduser_form">
											<input type="text" name="usernameAdd" placeholder="Username" id="useradd" required><br>
											<input type="password" name="passwordAdd" placeholder="Password" id="passadd" required><br>
											<input type="password" name="passconfirm" placeholder="Repeat password" id="confirmpass" required><br>
											<input type="submit" name="submituser" value="add user" id="submituser">
											</form>
										</div>
									</div>
									<div class="manage_user">
										<div class="manageheader">Manage Users [ <?php echo $user_count; ?> ]</div>
										<div class="managecontents">
											<div id="tableusers">
											<table width="100%" id="manageuserst">
												<tr>
													<th width="20%">ID</th>
													<th width="40%">USERNAME</th>
													<th>USER TYPE</th>
													<th>ACTION</th>
												</tr>
													<?php while($user = mysqli_fetch_assoc($users)):?>
														<tr>
														<td class="userid"><?php echo $user['ID']; ?></td>
														<td class="left"><?php echo $user['uname']; ?></td>
														<td><?php echo $user['user_type']; ?></td>
														<td><span class="deluser"><i class="fa fa-trash-o" aria-hidden="true"></i></span></td>
														</tr>
													<?php endwhile;?>
											</table>
											</div>
										</div>
									</div>
								</div>
								<div class="Report"><!--DIV FOR REPORT INFORMATION-->
									Reports information
								</div>
							</section>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div><!--end of the desktop version-->
<script type="text/javascript" src="js/admin.js"></script>
</body>
</html>