<?php
include_once("db_connect.php");
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM ruicongj_kitchen.user WHERE username='$username' AND password=". "md5('" . $password . "')";
$results = $mysqli->query($query);
if ($results->num_rows > 0) {
	header('Location: http://www.ruicongjin.com/AAU/rachel_kitchen/list.php'); 
	if(!isset($_COOKIE["username"])) {
		setcookie("username", $username, time() + 3600, "/");
	}
	exit;
} else {
	echo "Invalid username or password.";
}
?>