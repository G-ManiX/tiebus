<?php include '../database/db.php'; ?>
<?php
	$sql_bus = "SELECT DISTINCT bName FROM bus_info";
	$result_bus = mysqli_query($conn,$sql_bus);
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
		<?php while($busname = mysqli_fetch_assoc($result_bus)):?>
		<a href="pages/busprofile.php?bn=<?php echo ucfirst(strtolower($busname['bName']));?>"><li><?php echo ucfirst(strtolower($busname['bName'])); ?></li></a>
		<?php endwhile;?>
	</ul>
</body>
</html>