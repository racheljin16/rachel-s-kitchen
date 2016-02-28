<?php
include_once("db_connect.php");
if(!isset($_COOKIE['username'])) {
	header('Location: http://www.ruicongjin.com/AAU/rachel_kitchen/login.php');
} else {
	//header('Location: http://www.ruicongjin.com/AAU/rachel_kitchen');
	$id_list=explode("_", $_GET['product_list']);
	for ($i = 1; $i < count($id_list); $i ++ ) {
		$query = "DELETE FROM ruicongj_kitchen.cart WHERE username='" . $_COOKIE['username'] ."' AND product_id=" . $id_list[$i];
		$mysqli->query($query);	
	}
	echo "<script> alert('Your order has been sucessfully placed. Thank you !'); window.location.href='index.php'; </script>";
}
exit;
?>