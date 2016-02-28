<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>cart</title>
	<link rel="stylesheet" href="css/basic.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/table.css">
</head>
<body>
	<header> 
		
		<div class="title" id="titlelogo">
			<a href="index.php"><img class="logo" id="toplogo" src="images/logo.png"></a>
		</div>

		<nav class="nav nav-pills">
			<ul>
    			<li class="li-current"><a href="cart.php"><img src="images/cart.png" style="height: 20px"></a></li>
    			<li>
				<?php
    			 if(isset($_COOKIE["username"])) {
    			 	echo "<a href='logout.php'>log out</a>";
    			 }
    			 else
    			 	echo "<a href='login.php'>log in </a>"
    			?>
    			</li>
    			<li><a href="index.php#contact">contact</a></li>
    			<li><a href="recipe.php">recipe</a></li>
    			<li><a href="list.php">dish</a></li>
    			<li><a href="index.php">home</a></li>
    		</ul>
		</nav>
	</header>

	<div class="line"></div>
	<br>
	<br>
	<br>
	<div class="container">
	<h2>Your Cart</h2>
<?
include_once("db_connect.php");
if(!isset($_COOKIE['username'])) {
	header('Location: http://www.ruicongjin.com/AAU/rachel_kitchen/login.php');
} else {
	$username = $_COOKIE['username'];
	$query = "SELECT * FROM ruicongj_kitchen.cart WHERE ruicongj_kitchen.cart.username='" . $username. "'";
	$result = $mysqli->query($query);
	if ($mysqli->errno) die($mysqli->error);
	echo "<form action='check_out.php' method=get>";
	echo "<table>";
	echo "<tr>";
	echo "<th>Dish</th>";
	echo "<th>Delivery</th>";
	echo "<th>Date</th>";
	echo "<th>Price</th>";
	echo "<th>Quantity</th>";
	echo "</tr>";
	?>
<br>

	<?php
	while($row = $result->fetch_object()){
		echo "<tr>";
		$query_product = "SELECT * FROM ruicongj_kitchen.product WHERE id=".$row->product_id;
		$product = $mysqli->query($query_product)->fetch_object();
		echo "<td>".$product->name."</td>";
		echo "<td>".$row->delivery."</td>";
		echo "<td>".$row->date."</td>";
		echo "<td>"."\$".$product->price."</td>";
		echo "<td> <input required type='number' min='0' class='input_quantity' name='quantity_for_product_".$row->product_id."'></td>";
		echo "</tr>";
	}
	echo "</table>";
	?>
	<br>
	<br>
	<?php
	echo "<input type='submit' class='button' value='Checkout'>";
	echo "</form>";
}
exit;
?>
</div>

</body>
</html>