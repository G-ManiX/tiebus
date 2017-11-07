<?php include '../database/db.php';?>
<?php

if(isset($_GET['submit'])){
	
	$from = $_GET['From'];
	$to = $_GET['To'];
	$date = $_GET['Date'];
	$busname = $_GET['checkbox'];

	$from = strtolower($from);
	$to = strtolower($to);

	$from = trim($from);
	$to = trim($to);
	$date = trim($date);


	$query = "SELECT * FROM `bus_info` WHERE bFrom LIKE '%$from%' and bTo LIKE '%$to%' and bName = '$busname'";
  	$resultbus = mysqli_query($conn, $query) or die(mysqli_error($conn));
  	$count = mysqli_num_rows($resultbus);

}else{
	header('Location: ../index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
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
	<style type="text/css">
		input[type='checkbox']{
			display: none;
		}
	</style>
</head>
<body>
	<div class="header">
		<header>
		<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<ul>
			<li><input type="text" name="From" placeholder="from" value="<?php echo $from ;?>"></li>
			<li><input type="text" name="To" placeholder="to" value="<?php echo $to ;?>"></li>
			<li><input type="date" name="Date" placeholder="date" value="<?php echo $date ;?>"></li>
			<li><input type="checkbox" name="checkbox" value="<?php echo $busname;?>" checked></td><input type="submit" name="submit" value="modify"></li>
			</ul>
		</form>
		</header>
	</div>
	<section>
		<div class="result-found">showing <?php echo $count;?> result (s)</div>
		<div class="result-container">
				<div>
				<table width="100%" id="table">
					<?php while($result = mysqli_fetch_assoc($resultbus)):?>
					<tr>
						<td width="20%">
							<span class="bname"><?php echo strtoupper($result['bName']);?></span><br>
							<span class="btype"><?php echo $result['description'];?></span><br>
							<span class="ratings"><?php echo $result['ratings'];?>/5 ratings</span>
						</td>
						<td width="20%">
							<span class="info-time"> <?php echo $result['aTime'];?> </span><br>
							<span class="info"> Arival Time</span>
						</td>
						<td width="20%">
							<span class="info-time"> <?php echo $result['dTime'];?> </span><br>
							<span class="info"> Departure Time</span>
						</td>
						<td width="20%" class="center">
							<span class="price"> <?php echo $result['price'];?> TSH</span><br>
							<span class="price-type"> Tanzania Shilings </span>
						</td>
						<td width="20%" class="center">
							<span class="select"><a href="seat.php?from=<?php echo $result['bFrom'];?>&to=<?php echo $result['bTo'];?>&date=<?php echo $date;?>&price=<?php echo $result['price'];?>&busname=<?php echo $result['bName'];?>">Select</a></span><br><br>
							<span class="view">view bus</span>
						</td>
					</tr>	
					<?php endwhile;?>
					</div>
				</table>
				</div>
			</div>
		</section>
</body>
</html>