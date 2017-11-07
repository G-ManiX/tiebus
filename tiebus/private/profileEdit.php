<?php  include('session.php');?>
<?php $busname = $_GET['busname'];?>

<!DOCTYPE html>
<html>
<head>
	<title>Private Area</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="apple-touch-icon" sizes="180x180" href="../image/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../image/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../image/favicon/favicon-16x16.png">
	<link rel="manifest" href="../image/favicon/manifest.json">
	<link rel="mask-icon" href="../image/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" type="text/css" href="css/editstyle.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery-te-1.4.0.css">
	<script type="text/javascript" src="js/jquery-te-1.4.0.js"></script>
	<script type="text/javascript" src="js/profileeditscript.js"></script>
</head>
<body>
	<header>
		<div class="header"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>&nbspTIE BUS PROFILE EDIT &nbsp[ <?php echo strtoupper($busname) ;?> ] <span class="viewbus"><a href="">view profile</a></span></div>
	</header>
	<section>
		<div class="container">
			<div class="form-container">
				<form method="POST" action="insertabout.php" autocomplete="off">
					<ul>
						<li>
							<textarea name="about" id="about" placeholder="About:">About:</textarea>
						</li>
						<li>
							<textarea name="contact" id="contact" placeholder="Contact:">contacts:</textarea>
						</li>
						<li id="btn">
							<input type="checkbox" id="busnamecheck" name="busnamecheck" value="<?php echo strtoupper($busname) ;?>" checked>
							<input type="submit" id="submitbtn" name="btncontacts" value="save">
						</li>
					</ul>
				</form>
			</div>

			<div class="imageuploader">
				<div class="imageselector">
					<div class="selectorheader">Drag and Drop or</div>
					<div class="form">
						<form action="upload.php" method="post" enctype="multipart/form-data">
							<label class="btn" for="fileinput">Select Files</label>
							<input id="fileinput" name="fileToUpload" type="file" multiple value="Select Files"><br>
							<i class="fa fa-upload" aria-hidden="true"></i><input type="submit" name="submit" value="Upload" id="subtn">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
