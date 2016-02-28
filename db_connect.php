<?php

$db_host = "localhost";
$db_username = "ruicongj_kitchen";
$db_password = "ruicongj_kitchen";
$db_database = "ruicongj_kitchen";

$mysqli = new mysqli($db_host,$db_username,$db_password,$db_database);
if($mysqli->connect_errno) die($mysqli->connect_error);

?>