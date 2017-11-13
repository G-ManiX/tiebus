<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="# About Tiebus mission and vision">
	<meta name="author" content="Ally Mohamed">
	<meta name="keywords" content="Online,Bus,Booking,Tanzania,Kenya,Uganda,About,Us,About Us">
	<link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
	<link rel="manifest" href="image/favicon/manifest.json">
	<link rel="mask-icon" href="image/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="../css/style-about.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<script type="text/javascript" src="../js/jquery.js"></script>
</head>
<body>
	<script type="text/javascript" src="../js/about.js"></script>
	<div class="top-container">
		<nav>
			<div class="navigation">
				<div class="navigation-menu">
					<div class="desktop">
						<div id="home"><i class="fa fa-home" aria-hidden="true"></i><a href="../index.php"> Home</a></div>
						<div id="ticket"><i class="fa fa-ticket" aria-hidden="true"></i><a href=""> Ticketing</a></div>
						<div id="contact"><i class="fa fa-phone" aria-hidden="true"></i><a href=""> Contact Us</a></div>
						<div id="login"><i class="fa fa-sign-in" aria-hidden="true"></i><a href=""> Login</a></div>
					</div>
					<div class="mobile">
						<div><i class="fa fa-home" aria-hidden="true"></i><a href="../index.php"> Home</a></div>
						<div><i class="fa fa-ticket" aria-hidden="true"></i><a href=""> Ticketing</a></div>
						<div><i class="fa fa-phone" aria-hidden="true"></i><a href=""> Contact Us</a></div>
						<div><i class="fa fa-sign-in" aria-hidden="true"></i><a href=""> Login</a></div>
					</div>
				</div>
			</div>
		</nav>
	</div>
	<div class="main-container">
		<header>
		<div class="header">
			<div class="title"><span><i class="fa fa-info-circle" aria-hidden="true"></i> About Us</span></div>
			<div class="scroll">
				<ul id="chevy">
					<li><span><i class="fa fa-chevron-down fa-3x" aria-hidden="true"></i></span></li>
					<li><span><i class="fa fa-chevron-down fa-3x" aria-hidden="true"></i></span></li>
					<li><span><i class="fa fa-chevron-down fa-3x" aria-hidden="true"></i></span></li>
				</ul>
			</div>
		</div>
		<div class="nav-icon" data-nav-toggle="show" data-nav-content="navigation-menu">
			<div class="nav-icon-bar"></div>
			<div class="nav-icon-bar"></div>
			<div class="nav-icon-bar"></div>
		</div>
		</header>
		<section>
			<div class="mission">
				<div class="left-block-t">
					<div class="mission-hd"><span id="missiontitle">Our Mission</span></div>
				</div>
				<div class="right-block-t">
					<div class="mission-bd">
						<p><i class="fa fa-quote-left" aria-hidden="true"></i>...To sale tickets online On-the-Go.</p><br />
						<p>Anyone with mobile device that have internet access can book for a ticket and pay through his or her own choosen mobile service provider eCash...<i class="fa fa-quote-right" aria-hidden="true"></i></p>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="vision">
				<div class="right-block-b">
					<div class="vision-hd"><span id="visiontitle">Our Vision</span></div>
				</div>
				<div class="left-block-b">
					<div class="vision-bd">
						<p><i class="fa fa-quote-left" aria-hidden="true"></i>...To be a reliable Online Bus ticketing platform.</p><br />
						<p>Our intent for the future is to bring closer the service at the tip of your finger anytime anywhere...<i class="fa fa-quote-right" aria-hidden="true"></i></p>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!--footer contents-->
	<div class="bottom-container">
		
	</div>
	<script>
		var mstitle = document.getElementById("missiontitle"),
			vstitle = document.getElementById("visiontitle");
		var	msAnimator = new Mission(mstitle,450),
			vsAnimator = new Vision(vstitle,800);

			window.addEventListener("scroll", function(event) {
				currentPos = Math.round(window.scrollY);
				msAnimator.isScroll(currentPos);
				vsAnimator.isScroll(currentPos);
			});
			
		var home = document.getElementById("home"), 
			ticket = document.getElementById("ticket"),
			contact = document.getElementById("contact"), 
			login = document.getElementById("login");
		var arrayElem = [home,ticket,contact,login],
			button = document.querySelector(".nav-icon"),
			mobile = document.querySelector(".mobile");
			
			Navigation.setElement(arrayElem);
			button.addEventListener("click", toggleMenu);

		var chevy = $("#chevy span > i");
			Chevron.animate(chevy);
			
	</script>
</body>
