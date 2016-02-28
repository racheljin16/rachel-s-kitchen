<?php
include_once("db_connect.php");
$username = $_POST['username'];
$password = $_POST['password'];
$confirmpass = $_POST['re-password'];

$result= $mysqli->query("SELECT * from ruicongj_kitchen.user where username='".$_POST['username']."'");

$num = 0;
while($row=$result->fetch_object()) {
	$num++;

}

if (!$num && $_POST['password'] == $_POST['re-password']) {
	$query = "INSERT INTO ruicongj_kitchen.user (username, password)";
	$query .= " values ( '" . $_POST['username'] . "',md5('" . $_POST["password"] . "'))";
	$mysqli->query($query);

	$messageSuccess = "Sign up succeed!";
    setcookie("username", $_POST['username'], time() + 3600, "/");
	header('Location: http://www.ruicongjin.com/AAU/rachel_kitchen/list.php');
	exit;
} elseif ($num){
	echo "Username already exists."; 
} else {
	echo "Password doesnot match.";
}

?>