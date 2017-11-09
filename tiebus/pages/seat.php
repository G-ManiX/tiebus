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

	<div class="divcontainer">
		<div class="div1">
			<div class="divheader"> Payment information </div>
			<div class="pricetag">
				<label>Fee:</label>
				<input type="text" name="pricetag" placeholder="0 Tsh" value="<?php echo $price ;?>" disabled>
			</div>
			<div class="route-info"><?php echo $from ;?> - <?php echo $to ;?> <br> </div>
		</div>
		<div class="div2">
			<div class="divheader">Booking information</div>
			<div class="importantInfo">
				<form autocomplete="off">
					<table width="100%">
						<tr>
							<td width="20%">Full Name:</td>
							<td><input type="text" name="fullname" placeholder="Your Name"></td>
						</tr>
						<tr>
							<td>Phone:</td>
							<td><input type="phone" name="phone" placeholder="Your Phone"></td>
						</tr>
					</table>
					<div class="submitbtn"><input type="submit" value="submit" name="submitall" id="submitall"></div>
				</form>
			</div>
		</div>
		<div class="div3">
			<div class="divheader">Bus map</div>
		</div>
	</div>
</section>
</body>
</html>