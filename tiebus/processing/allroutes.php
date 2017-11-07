<?php include '../database/db.php'; ?>
<?php
	$sql_route = "SELECT bFrom,bTo FROM bus_info";
	$result_route = mysqli_query($conn,$sql_route);
	$route_count = mysqli_num_rows($result_route);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tie Booking</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
	<ul>
	<?php while($route = mysqli_fetch_assoc($result_route)):?>
		<a href="pages/booking.php?From=<?php echo ucfirst(strtolower($route['bFrom'])); ?>&To=<?php echo ucfirst(strtolower($route['bTo'])); ?>&Date=please set date&submit=Search"><li><?php echo ucfirst(strtolower($route['bFrom'])); ?> To <?php echo ucfirst(strtolower($route['bTo'])); ?></li></a>
	<?php endwhile;?>
	</ul>
</body>
</html>