<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Rachel Jin">
	<title>recipe</title>

	<link rel="stylesheet" href="css/basic.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/list.css">
	<link rel="stylesheet" href="css/recipe.css">

</head>
<body>
	<header id="wrapper">
		
		<figure class="headerimg" id="hero-recipe"></figure> 
		
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
          <li class="li-current"><a href="recipe.php">recipe</a></li>
          <li><a href="list.php">dish</a></li>
          <li><a href="index.php">home</a></li>
        </ul> 
		</nav> 
		
		<div class="intro">
			<h1 class="name">Try Rachel's Recipe</h1>
			<p class="introtext">Like a dish? Contact Rachel for recipe!</p>
			<a href="mailto:girlracheljin@gmail.com"><p class="btn shopbtn">contact us</p></a>
		</div>

	</header>

	

	<div id="content">
		<div class="column">
			<h2>Green beans steamed noodles</h2>
			<p class="column-inner brief">We need: green beans 150g, noodles 250g, prok or beef 200g, garlic 15g, soybean 15g, salt 5g, sugar 5g</p>
			<div class="column-inner"> 
				<ol>
					<li>Cut pork or beef to thin slices</li>
					<img class="showimg" src="images/recipe1.jpg">
					<li>Wash green beans and cut to 3" sticks</li>
					<img class="showimg" src="images/recipe2.jpg">
					<li>Use Chinese wok to heat some oil and fry the garlic a little bit</li>
					<li>Fry pork or beef evenly till it's cooked</li>
					<img class="showimg" src="images/recipe3.jpg">
					<li>Mix with green beans, put soybean, salt and sugar inside and stir</li>
					<img class="showimg" src="images/recipe4.jpg">
					<li>When the green beans completely cooked, add water to the wok and put the noodles above the beans</li>
					<img class="showimg" src="images/recipe6.jpg">
					<li>Wait for 3 minutes, than mix the noodles with all beans, then plating!</li>
					<img class="showimg" src="images/recipe7.jpg">
				</ol>
			</div>
		</div>

		<div class="column">
			<h2>Frozen berry smoothie</h2>
			<p class="column-inner brief">We need: frozen berry 1 cup, half & half milk 1 cup(if use 2% milk, suggest a little bit suger added), ice 1 cup, water 1/2 cup</p>
			<div class="column-inner"> 
				<ol>
					<li>Put all gredients in a blender</li>
					<img class="showimg" src="images/recipe8.jpg">
					<li>Blend till it's completed mixed!</li>
					<img class="showimg" src="images/recipe9.jpg">
				</ol>
			</div>
		</div>
	</div>

	<?php include "partials/footer.html"; ?>
	
</body>
</html>





