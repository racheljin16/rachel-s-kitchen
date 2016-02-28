<!DOCTYPE html>
<html>
<head>
	<title>Rachel's Kitchen</title>
	<meta charset="UTF-8">
	<meta name="author" content="Rachel Jin">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="css/basic.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="lib/js/jquery-2.1.4.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>
	<header id="wrapper">
		<figure class="headerimg" id="hero"></figure>
 
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
    			<li><a href="#contact">contact</a></li>
    			<li><a href="recipe.php">recipe</a></li>
    			<li><a href="list.php">dish</a></li>
    			<li class="li-current"><a href="index.php">home</a></li>
    		</ul>
		</nav>

		<div class="intro">
			<h1 class="name">Rachel's Kitchen</h1>
			<p class="introtext">healthy & creative homemade dishes</p>
			<a href="list.php"><p class="btn shopbtn">shop now</p></a>
		</div>
		
		<section class="scroll">
  			<a class="arrow-wrap" href="#content">
    			<span class="arrow"></span>
  			</a>
		</section>
	</header>

	<div id="content">
		<div class="column column-padding-top">
			<h2>Our story</h2>
			<p class="column-inner brief">I'm Rachel, an architect & interactive designer living in the Bay Area. I love cooking and take it seriously. My kitchen is open to friends every weekend, and you can also order dishes online. All dishes listed here are highly reccomended by frequent customers, and I share my recipes as well. </p>
		</div>

		<div class="column column-padding-top text-center">
			<h2>Chief's Choice</h2>
			<div class="specials">
				<div class="special">
					<a href=""><img class="choiceimg" src="images/beef.jpg"></a>
					<p class="subtitle">Pepper Beef</p>
				</div>

				<div class="special">
					<a href=""><img class="choiceimg" src="images/bun11.jpg"></a>
					<p class="subtitle">Eggplant Buns</p>
				</div>
			</div>
		</div>

		<div class="column column-padding-top column-padding-bottom text-center">
			<h2>Vegan Taste</h2>
			<div class="specials">
				<div class="special">
					<a href=""><img class="specialimg" src="images/cucumber.jpg"></a>
					<p class="subtitle">Cucumber Salad</p>
				</div>

				<div class="special">
					<img class="specialimg" src="images/pancake.jpg">
					<p class="subtitle">Blueberry Pancake<p>
				</div>

				<div class="special">
					<img class="specialimg" src="images/shrimp.jpg">
					<p class="subtitle">Shrimp with Chives</p>
				</div>
			</div>
		</div>

		<div class="grey">
			<div class="column column-padding text-center">
				<h2>Do it by yourself</h2>
					<div class="specials">
						<div class="special">
							<a href="recipe.html"><img class="choiceimg" src="images/recipe7.jpg"></a>
							<p class="subtitle">Green Beans Steamed Noodles</p>
						</div>

						<div class="special">
							<a href="recipe.html"><img class="choiceimg" src="images/recipe9.jpg"></a>
							<p class="subtitle">Frozen Berry Smoothie</p>
						</div>
					</div>

					<a href="recipe.html"><p class="btn recipebtn">more recipes</p></a>
				</div>
			</div>
		</div>

		<div class="contact text-center" id="contact">
			<p class="sayhi">Say hi to Rachel!</p>
			<a href="mailto:girlracheljin@gmail.com"><p class="btn contactbtn">contact us</p></a>
		</div>

		<?php include "partials/footer.html"; ?>
		
	</div>

</body>
</html>
