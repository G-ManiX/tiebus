<?php include '../database/db.php'; ?>
<?php 

if (isset($_GET['bn'])) {
	$busname = $_GET['bn'];

	$sql_bus = "SELECT * FROM bus_info WHERE bName = '$busname'";
	$result_bus = mysqli_query($conn,$sql_bus);
	$row = mysqli_fetch_array($result_bus,MYSQLI_ASSOC);

	//query for displaying bus routes
	$sql_route = "SELECT DISTINCT bFrom,bTo,price FROM bus_info WHERE bName = '$busname'";
	$result_route = mysqli_query($conn,$sql_route);

	//querying the other table and getting its informations
	$sql_info = "SELECT * FROM busprofile WHERE busname = '$busname'";
	$result_info = mysqli_query($conn,$sql_info);
	$foundinfo = mysqli_num_rows($result_info);
	$fetch = mysqli_fetch_array($result_info,MYSQLI_ASSOC);

	if ($foundinfo < 1) {
		echo "<div style='text-align:center;font-family:arial;font-size:17px;margin-top:20px;'>PROFILE NOT FOUND ! </div>";
		die();
	}
}else {
	header("location: ../index.php");
}

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>bus profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/busprofile.css">
	<link rel="stylesheet" type="text/css" href="../css/jquery.bxslider.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.bxslider.js"></script>
	<script type="text/javascript" src="../js/busprofile.js"></script>

</head>
<body>
	<header>
		<div class="header">
			TIE BUS TICKETING
		</div>
	</header>
	<section>
		<div class="min-info"><a href="../index.php">Go back home</a></div>
		<div class="container">
			<div class="topnote">
				<div class="form-search">
					<div class="form-header">Search routes on <?php echo $busname;?> bus</div>
					<div class="form">
						<form autocomplete="off" method="GET" action="busbooking.php?&bn=<?php echo $busname;?>">
							<table width="100%">
								<tr>
									<td width="30%"><input type="text" name="From" placeholder="From:"></td>
									<td width="30%"><input type="text" name="To" placeholder="To:"></td>
									<td width="30%"><input type="date" name="Date" placeholder="Date:"></td>
									<td width="10%" id="btn"><input type="submit" name="submit" value="search"><input type="checkbox" name="checkbox" value="<?php echo $busname;?>" checked></td>
								</tr>
							</table>
						</form>
					</div>
					<div class="contents">
						<div class="maincontents">
							<?php echo $fetch['about'];?>
						</div>
						<div class="popuralroutes">
							<div class="routes">
								<div class="routesheader">Popular Routes</div>
								<table width="100%">
							
									<?php while($route = mysqli_fetch_assoc($result_route)):?>
										<tr>
										<td><?php echo ucfirst(strtolower($route['bFrom']));?> to <?php echo ucfirst(strtolower($route['bTo']));?></td>
										<td><?php echo $route['price'];?> Tsh</td>
										<td><div class="select">select</div></td>
									</tr>
									<?php endwhile;?>
									
								</table>
							</div>
							<div class="routesheader">
								<div class="contactheader">Contacts information</div>
								<?php echo $fetch['contacts'];?>
							</div>
						</div>
					<div class="imageheading">Image gallery</div>
					<div class="image">
						<img src="../image/profileimg/bus1.jpg">
						<img src="../image/profileimg/bus2.jpg">
						<img src="../image/profileimg/bus3.jpg">
						<img src="../image/profileimg/bus4.jpg">
						<img src="../image/profileimg/bus5.jpg">
						<img src="../image/profileimg/bus6.jpg">
						<img src="../image/profileimg/bus7.jpg">
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>