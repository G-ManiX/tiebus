<?php include '../database/db.php';?>
<?php
	
	$from = $_GET['from'];
	$to = $_GET['to'];
	$date = $_GET['date'];
	$busname = $_GET['busname'];
	$price = $_GET['price'];
	if (!$from || !$to ||!$date ||!$busname ||!$price) {
		header("location: ../index.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Booking-Seat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="../image/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../image/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../image/favicon/favicon-16x16.png">
	<link rel="manifest" href="../image/favicon/manifest.json">
	<link rel="mask-icon" href="../image/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="../css/style-booking.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/seatbooking.js"></script>
</head>
<body>
	<div class="header">
		<header>
		<form method="GET" action="booking.php">
			<ul>
			<li><input type="text" name="From" placeholder="from" value="<?php echo $from ;?>"></li>
			<li><input type="text" name="To" placeholder="to" value="<?php echo $to ;?>"></li>
			<li><input type="date" name="Date" placeholder="date" value="<?php echo $date ;?>"></li>
			<li><input type="submit" name="submit" value="modify"></li>
			</ul>
		</form>
		</header>
	</div>
<section>
	<div class="toggleModify"><span class="animated infinite fadeInDown"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></span> Modify Route <a href="../index.php"><span id="home"><i class="fa fa-home" aria-hidden="true"></i></span></a></div>
</section>
<section>
	<div class="forminformation">
		<form autocomplete="off">
			<input type="text" name="name" placeholder="Your Name:" autofocus required><br>
			<input type="phone" name="phoneNumber" placeholder="Phone number:" required><br>
			<input type="email" name="email" placeholder="Email (Optional):" ><br>
			<div class="bookingfor">Booking For</div>
			<select name="bookingfor">
				<option value = "1" selected>1 seat</option>
				<option value = "2">2 seat</option>
				<option value = "3">3 seat</option>
				<option value = "4">4 seat</option>
				<option value = "5">5 seat</option>
			</select>

			<div class="proceedbtn">Proceed</div>

			<div class="confirmBox">
				<div id="tobehidden">
				<div class="contentconfirmbox">
					<div  id="contentconfirmT">
					<table width="100%">
						<tr>
							<td width="50%">Bus name</td>
							<td width="50%"><?php echo $busname;?></td>
						</tr>
						<tr>
							<td>Route</td>
							<td><?php echo $from;?> to <?php echo $to;?></td>
						</tr>
						<tr>
							<td>Date</td>
							<td><?php echo $date;?></td>
						</tr>
						<tr>
							<td>Distance</td>
							<td>Null</td>
						</tr>
						<tr>
							<td>Fee</td>
							<td><?php echo $price;?></td>
						</tr>
						<tr>
							<td>Seats</td>
							<td>null</td>
						</tr>
						<tr>
							<td>Total Fee</td>
							<td>null</td>
						</tr>
					</table>
					</div>
				</div>
				<div class="btnsbmit"><input type="submit" name="submitThis" id="submitThis" value="Confirm"></div>
				<div class="closeConfirm">Cancel</div>
			</div>
			<div class="loader">
				<div class="imageholder"><img src="../images/bx_loader.gif"></div>
				<div class="sucessfull">
					<span class="green">Your Booking is successfull</span> !<br><br> Make payment to complete your request <br>
					Your controll number is<br> <b>9495843663748</b>
					<div class="howtopay">Pay with tigoPesa</div>
				</div>
			</div>
			</div>
		</form>
	</div>
</section>

</body>
</html>
