<?php include '../database/db.php';
	$sql_bus = "SELECT DISTINCT bTo FROM bus_info ";
	$result = mysqli_query($conn,$sql_bus);
?>

<!DOCTYPE html>
<html>
<head>
	<title>datalist</title>
	<meta charset="utf-8">
</head>
<body>
	<?php while($list = mysqli_fetch_assoc($result)):?>
		<option value="<?php echo $list['bTo']; ?>"><?php echo ucfirst(strtolower($list['bTo'])); ?></option>
	<?php endwhile;?>
</body>
</html>