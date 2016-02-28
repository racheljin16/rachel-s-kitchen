<?php
header('Location: http://www.ruicongjin.com/AAU/rachel_kitchen/list.php'); 
if(isset($_COOKIE["username"])) {
	$username = $_COOKIE["username"];
	setcookie("username", $username, 1, "/");
}
exit;
?>