<?php  include('session.php');?>
<?php 

$busname = $_POST['busname'];
$from = $_POST['from'];
$to = $_POST['to'];
$arrival = $_POST['arrival'];
$departure = $_POST['departure'];
$bustype = $_POST['bustype'];

$busname = trim($busname);
$from = trim($from);
$to = trim($to);
$arrival = trim($arrival);
$departure = trim($departure);
$bustype = trim($bustype);

$busname = htmlentities($busname);
$from = htmlentities($from);
$to = htmlentities($to);
$arrival = htmlentities($arrival);
$departure = htmlentities($departure);
$bustype = htmlentities($bustype);

$busname = strtolower($busname);
$from = strtolower($from);
$to = strtolower($to);
$arrival = strtolower($arrival);
$departure = strtolower($departure);
$bustype = strtolower($bustype);

$busname = ucfirst($busname);
$from = ucfirst($from);
$to = ucfirst($to);
$arrival = ucfirst($arrival);
$departure = ucfirst($departure);
$bustype = ucfirst($bustype);

$sql = " INSERT INTO `bus_info` (`bName`, `bFrom`, `bTo`, `price`,`aTime`, `dTime`, `description`) VALUES ('$busname', '$from', '$to','$price', '$arrival', '$departure', '$bustype')";

$result = mysqli_query($conn,$sql);

if ($result) {
	echo "success";
}else{
	echo "request failed";
}

?>