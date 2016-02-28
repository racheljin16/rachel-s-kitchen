<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>product_individual</title>

	<link rel="stylesheet" href="css/basic.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/grid.css"> 
	<link rel="stylesheet" href="css/product.css">

</head>
<body>
	<header> 
		
		<div class="title" id="titlelogo">
			<a href="index.php"><img class="logo" id="toplogo" src="images/logo.png"></a>
		</div>

		<nav class="nav nav-pills">
			<ul>
    			<li><a href="cart.php"><img src="images/cart.png" style="height: 20px"></a></li>
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
	<div class="container">
		<p class="des">Dish > New Dishes</p>
	</div>
	<div class="line"></div>
	
	<?php

		include_once("db_connect.php");

		$qry = "SELECT * FROM ruicongj_kitchen.product 
				WHERE id=".$_GET['product'];


		$result = $mysqli->query($qry);

		if ($mysqli->errno) die($mysqli->error);

		echo "<div class='product-page'>";
		while($row = $result->fetch_object()){
			$images = explode(",", $row->image);
			$ingredients = explode(";", $row->ingredient);

		?>
	<div class="container data-id='<?php echo $row->id;?>'">
		<div class="row">
			<h1 id="product_name" class="pull-left col-sm-12 col-md-10"><?php echo $row->name;?></h1>
			<p class="pull-right price col-sm-12 col-md-2">$ <?php echo $row->price;?></p>
		</div>
	</div>
	<div class="line"></div>
	
	<div class="container data-id='<?php echo $row->id;?>'">
		<div class="row">
			<div class="pull-left col-sm-12 col-md-10 col-lg-7">
				<div class="des-inner">
					<img class="bg" src="images/<?php echo $images[0];?>">
				</div>
			</div>
			
			<div class="pull-left col-sm-12 col-md-12 col-lg-5">
				<div class="des-inner">
					<p class="detail-bg"><?php echo $row->description;?></p>
					<p class="detail"> &#10084; <?php echo $row->star;?>/5</p> 
					<p class="small-text"><?php echo $row->style;?></p>
						<div class="selectbtns">
						<div class="float-left selectbtn">
							<select name="delivery" class="btn-select" form="add_to_cart_form">
							    <option value="delivery">Delivery or Pick up</option>
							    <option value="delivery">Delivery</option>
							    <option value="pick up">Pick up</option>
							</select>
						</div>
						<div class="float-left selectbtn">
							<select name="date" class="btn-select" form="add_to_cart_form">
							    <option value="Friday">Choose date</option>
							    <option value="Friday">Friday Dec.18</option>
							    <option value="Saturday">Saturday Dec.19</option>
							    <option value="Sunday">Sunday Dec.20</option>
							    <option value="Monday">Monday Dec.21</option>
							  </select>
						</div>
					</div>
					<form action="add_cart.php" id="add_to_cart_form">
						<input type="hidden" value=<?php echo $row->id?> name="product_id"/>
						<input type="submit" value="Add to Cart" class="btn-addcart"/>
					</form>
					<div class="imgs">
						<img class="img_sm" src="images/<?php echo $images[1];?>"> <img class="img_sm" src="images/<?php echo $images[2];?>"> <img class="img_sm" src="images/<?php echo $images[3];?>"> 
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="container data-id='<?php echo $row->id;?>'">

		<div class="line"></div>

		<div class="container">
			<p class="detail-title">Weight</p>
		</div>

		<div class="line"></div>

		<div class="container des-inner">
			<p class="des">Total Weight: <?php echo $row->weight;?> lbs (for two people) </p>
		</div>

		<div class="line"></div>
		
		<div class="container">
			<p class="detail-title">Ingredients</p>
		</div>
		
		<div class="line"></div>
		
		<div class="container des-inner">
			<p class="des"><?php echo $ingredients[0];?></p>
			<p class="des"><?php echo $ingredients[1];?></p> 
			<p class="des"><?php echo $ingredients[2];?></p> 
		</div>
		<?php
				}
				?>
		<div class="line"></div>
		
		<div class="container">
			<p class="detail-title">Make orders</p>
		</div>
		
		<div class="line"></div>

		<dl class="des-inner">
			<dt>Time</dt><dd>We accept orders every Friday to Monday.</dd>
			<dt>Delivery</dt><dd>free for south bay area (click to check map), $7 delivery fee for San Francisco or east bay<br> Welcome to drop by and take your food on time, and extra desert is provided</dd>
			<dt>Rewards</dt><dd>For frequent customers, we have extra reward points to exchange for dishes or drinks. Please log in your account to check it.</dd>
		</dl>
	</div>


	<?php include "partials/review_footer.html"; ?>
	
</body>
</html>