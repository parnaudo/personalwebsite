<?php
include "db_config.php";
$mysqli = new mysqli(HOST, USER, PW, DATABASE);
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
