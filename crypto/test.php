<?php
include "lib/connect.php";
echo $mysqli->host_info . "\n";
$test=$mysqli->query("insert into crypto (address,type) VALUES ('test','doge')");
var_dump($test)
?>