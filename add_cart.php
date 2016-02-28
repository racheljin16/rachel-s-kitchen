<?php
include_once("db_connect.php");
if(!isset($_COOKIE['username'])) {
	header('Location: http://www.ruicongjin.com/AAU/rachel_kitchen/login.php');
} else {
	header('Location: http://www.ruicongjin.com/AAU/rachel_kitchen/list.php');
	$query = "INSERT INTO ruicongj_kitchen.cart (username, product_id, delivery, date)";
	$query .= " values ( '" . $_COOKIE['username'] . "'," . $_GET['product_id'] . ",'" . $_GET['delivery'] . "','" . $_GET["date"] . "')";
	echo $query;
	$mysqli->query($query);
}
exit;
?>