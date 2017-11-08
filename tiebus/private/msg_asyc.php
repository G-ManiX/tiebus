<?php  include('session.php');
	$sql = "SELECT * FROM `sms`";
	$response = mysqli_query($conn,$sql) or die(mysqli_error($conn));
?>

<?php while($row = mysqli_fetch_assoc($response)):?>
	<li>
		<div class="msgcontainer">
		<div class="msgheader"><?php echo $row['name'];?> <span><?php echo $row['time'];?></span></div>
		<div class="textmsg"><?php echo $row['message'];?></div>
	</div>
	</li>
<?php endwhile;?>