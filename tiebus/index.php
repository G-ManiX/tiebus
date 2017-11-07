<?php include 'database/db.php'; ?>

<?php
	//QUERY FOR SELECTING ONLY BUSES LIMIT TO 30
	$sql_bus = "SELECT DISTINCT bName FROM bus_info WHERE ratings >= 2 LIMIT 30";
	$result_bus = mysqli_query($conn,$sql_bus);


	//QUERY FOR SELECTING BUS ROUTES LIMIT TO 30
	$sql_route = "SELECT DISTINCT bFrom,bTo FROM bus_info WHERE ratings >= 2 LIMIT 30";
	$result_route = mysqli_query($conn,$sql_route);
	$route_count = mysqli_num_rows($result_route);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tie Booking</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="# An Easy Way to book online">
	<meta name="author" content="Musa Mtuya">
	<meta name="keywords" content="Online,Bus,Booking,Tanzania,Kenya,Uganda">
	<link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
	<link rel="manifest" href="image/favicon/manifest.json">
	<link rel="mask-icon" href="image/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<div class="navigation"> <!--site navigation -->
		<nav>
			<div id="close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<ul>
				<a href="pages/tickets.php"><li>Tickets</li></a>
				<a href="##"><li>About Us</li></a>
				<a href="##"><li>Contact Us</li></a>
				<a href="pages/login.php"><li>Login</li></a>
			</ul>
		</nav>
	</div> <!--site navigation ends-->

	<div class="site-container">
		<header>
		<div class="header">
			<div class="form-main">
				<div class="form-main-header"><i class="fa fa-map-marker" aria-hidden="true"></i> 
					We Travel Together <br> <span> # Easy Way To Book Online </span>
				</div>
				<div class="book-now" onclick="load('processing/datalist.php','data')">Book Now</div>
			</div>
		</div>
	<div class="nav-icon">
		<div class="nav-icon-bar"></div>
		<div class="nav-icon-bar"></div>
		<div class="nav-icon-bar"></div>
	</div>
	</header>
	<section>
		<div class="available_buses">
			<div class="available_buses_header"><i class="fa fa-bolt" aria-hidden="true"></i>&nbsp Available Buses [ 101 ]</div>
			<div class="available_buses_contents" id="buses">
				<ul>
					<?php while($busname = mysqli_fetch_assoc($result_bus)):?>
						<a href="pages/busprofile.php?bn=<?php echo ucfirst(strtolower($busname['bName']));?>"><li><?php echo ucfirst(strtolower($busname['bName'])); ?></li></a>
					<?php endwhile;?>
				</ul>
			</div>
			<div class="available_buses_footer" onclick="load('processing/allbuses.php','buses')"><i class="fa fa-bolt" aria-hidden="true"></i>&nbsp View all buses</div>
		</div>
	</section>
	<section>
		<div class="popular-data">
			<div class="poputar-routes-header"><i class="fa fa-bolt" aria-hidden="true"></i>&nbsp Popular Routes</div>
			<div class="poputar-routes-contents" id="routes">
				<ul>
					<?php while($route = mysqli_fetch_assoc($result_route)):?>
					<a href="pages/booking.php?From=<?php echo ucfirst(strtolower($route['bFrom'])); ?>&To=<?php echo ucfirst(strtolower($route['bTo'])); ?>&Date=please set date&submit=Search"><li><?php echo ucfirst(strtolower($route['bFrom'])); ?> To <?php echo ucfirst(strtolower($route['bTo'])); ?></li></a>
					<?php endwhile;?>
				</ul>
			</div>
			<div class="poputar-routes-footer" onclick="load('processing/allroutes.php','routes');"><i class="fa fa-bolt" aria-hidden="true"></i>&nbsp View All Routes </div> 
		</div>
	</section>
	<section>
		<div class="modal_form">
			<div class="modal_form_inner">
				<form autocomplete="off" method="GET" action="pages/booking.php">
				<ul>
					<li><input type="text" name="From" placeholder="From" list="data" required></li>
					<li><input type="text" name="To" placeholder="To" list="data" required></li>
					<li><input type="date" name="Date" placeholder="Date" required></li>
					<li><input type="submit" name="submit" value="Search"></li>
				</ul>
				</form>
				<div class="close"> <i class="fa fa-times-circle-o" aria-hidden="true"></i> </div>
			</div>
		</div>
	</section>


	<section>
		<div class="footer">
			&copy 2017 Tie Bus. All Rights Reserved
		</div>
	</section>
	
	
	</div><!--contaier of the whole site except for the navigation-->

	<datalist id="data">
		
	</datalist>
<script type="text/javascript" src="js/async.js"></script>
</body>
</html>