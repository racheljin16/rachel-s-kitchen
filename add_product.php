<?
include_once("db_connect.php");

if(!isset($_COOKIE['username']) && $_COOKIE['username'] != 'racheljin') {
	header('Location: http://www.ruicongjin.com/AAU/rachel_kitchen/login.php');
} else {
header('Location: http://www.ruicongjin.com/AAU/rachel_kitchen/list.php');
$name = $_GET["name"];
$price = $_GET["price"];
$description = $_GET["description"];
$star = $_GET["star"];
$style = $_GET["style"];
$image = $_GET["image"];
$weight = $_GET["weight"];
$ingredient = $_GET["ingredient"];

$query = "INSERT INTO ruicongj_kitchen.product (name, price, description, star, style, image, weight, ingredient)";
	$query .= " values ( '" . $name . "'," . $price . ",'" . $description . "','" . $star . "','" . $style . "','" . $image . "','" . $weight . "','" . $ingredient . "')";
  	$mysqli->query($query);
}
exit;
?>