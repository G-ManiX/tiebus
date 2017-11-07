<?php

header('Content-Type: application/json');

$input = filter_input_array(INPUT_POST);

$mysqli = new mysqli('localhost', 'root', '', 'tiebus_db');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

if ($input['action'] == 'edit') {
    $mysqli->query("UPDATE bus_info SET bName='" . $input['bName'] . "', bFrom='" . $input['bFrom'] . "', bTo='" . $input['bTo'] . "', aTime='" . $input['aTime'] . "', dTime='" . $input['dTime'] . "', price='" . $input['price'] . "' WHERE ID='" . $input['ID'] . "'");
} else if ($input['action'] == 'delete') {
    $mysqli->query("DELETE FROM `log_info` WHERE `ID='".$input['ID']."'");
} else if ($input['action'] == 'restore') {
    $mysqli->query("UPDATE bus_info SET deleted=0 WHERE ID='" . $input['ID'] . "'");
}

mysqli_close($mysqli);

echo json_encode($input);