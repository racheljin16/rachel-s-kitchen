<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Rachel Jin">
	<title>shop list</title>

	<link rel="stylesheet" href="css/basic.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/list.css"> 

	<script src="lib/js/jquery-2.1.4.min.js"></script>
	<script src="js/list.js"></script>
 
</head> 
<body>
 
	<header id="wrapper">
		
		<figure class="headerimg" id="hero-list"></figure> 
		
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
    			 	echo "<a href='login.php'>log in</a>"
    			?>
    			</li>
    			<li><a href="index.php#contact">contact</a></li>
    			<li><a href="recipe.php">recipe</a></li>
    			<li class="li-current"><a href="list.php">dish</a></li>
    			<li><a href="index.php">home</a></li>
    		</ul> 
		</nav> 
		
		<div class="intro">
			<h1 class="name">Explore Rachel's Kitchen</h1>
			<p class="introtext">healthy & creative homemade dishes</p>
		</div>	

		<nav class="nav nav-horizontal" id="dishmenu">
			<ul>
				<li class="col-xs-3 menu"><a class="menulink active" href="#dishmenu">new dishes</a></li>
				<li class="col-xs-3 menu"><a class="menulink" href="#dishmenu">seasonal</a></li>
				<li class="col-xs-3 menu"><a class="menulink" href="#dishmenu">dimsum</a></li>
				<li class="col-xs-3 menu"><a class="menulink" href="#dishmenu">chief's favorite</a></li>
			</ul>
		</nav>
	
	</header>
	
	<div id="content">
		<div class="menus" id="selected">
			<div class="column column-padding-top column-padding-bottom">
				<h2>New Dishes</h2>
				<br>

			 
				<div class="product-list row">
				<?php

					include_once("db_connect.php");

					$qry = "SELECT * FROM ruicongj_kitchen.product ORDER BY ruicongj_kitchen.product.last_update DESC LIMIT 6";
					$result = $mysqli->query($qry);

					if ($mysqli->errno) die($mysqli->error);

					echo "<div class='product-item-all'>";
					while($row = $result->fetch_object()){
						$images = explode(",", $row->image);


					?>
					<div class="col-xs-12 col-md-4">
						<div class="product-item" data-id='<?php echo $row->id;?>'>
							<div class="product-image-featured">
								<a href="product_individual.php?product=<?php echo $row->id?>"><img src="images/<?php echo $images[1];?>" class="product-image"></a>
							</div>
							<div class="product-info-overlay">
								<div class="product-title"><?php echo $row->name;?></div>
								<div class="product-rating"> &#10084; <?php echo $row->star;?>/5</div>
								<div class="product-price">$<?php echo $row->price;?></div>
								<div class="product-description">
									<p><?php echo $row->description;?></p>
								</div>
							</div>
						</div>
					</div>
					<?php
						}
						?>
				</div>
			
			</div>
		</div>
			
		
		</div>

		<div class="menus" id="seasonal">
			
			<div class="column column-padding-top column-padding-bottom">
				<h2>Seasonal</h2>
			
				<div class="product-list row">
			
					<div class="col-xs-12 col-md-4">
						<div class="product-item">
							<div class="product-image-featured">
								<img src="images/lotus.jpg" class="product-image">
							</div>
							<div class="product-info-overlay">
								<div class="product-title">Lotus Root Folder</div>
								<div class="product-rating">4.7/5</div>
								<div class="product-price">$18</div>
								<div class="product-description">
									<p>Lotus root/Pork/Fried</p>
								</div>
							</div>
						</div>
					</div>
			
					<div class="col-xs-12 col-md-4">
						<div class="product-item">
							<div class="product-image-featured">
								<img src="images/bun.jpg" class="product-image">
							</div>
							<div class="product-info-overlay">
								<div class="product-title">Eggplant Buns</div>
								<div class="product-rating">4.6/5</div>
								<div class="product-price">$20/half dozen</div>
								<div class="product-description">
									<p>Eggplant/Pork/Steamed</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xs-12 col-md-4">
						<div class="product-item">
							<div class="product-image-featured">
								<img src="images/cucumber.jpg" class="product-image">
							</div>
							<div class="product-info-overlay">
								<div class="product-title">Cucumber Salad</div>
								<div class="product-rating">4.7/5</div>
								<div class="product-price">$15</div>
								<div class="product-description">
									<p>Cucumber/Fresh/Protein</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>

		<div class="menus" id="dimsum">
			
			<div class="column column-padding-top column-padding-bottom">
				<h2>Dimsum</h2>
			
				<div class="product-list row">
			
					<div class="col-xs-12 col-md-4">
						<div class="product-item">
							<div class="product-image-featured">
								<img src="images/dumplings.jpg" class="product-image">
							</div>
							<div class="product-info-overlay">
								<div class="product-title">Dumplings</div>
								<div class="product-rating">4.9/5</div>
								<div class="product-price">$18/half dozen</div>
								<div class="product-description">
									<p>Handmade/Steamed</p>
								</div>
							</div>
						</div>
					</div>
			
					<div class="col-xs-12 col-md-4">
						<div class="product-item">
							<div class="product-image-featured">
								<img src="images/bun.jpg" class="product-image">
							</div>
							<div class="product-info-overlay">
								<div class="product-title">Eggplant Buns</div>
								<div class="product-rating">4.6/5</div>
								<div class="product-price">$20/half dozen</div>
								<div class="product-description">
									<p>Eggplant/Pork/Steamed</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xs-12 col-md-4">
						<div class="product-item">
							<div class="product-image-featured">
								<img src="images/sumai.jpg" class="product-image">
							</div>
							<div class="product-info-overlay">
								<div class="product-title">Shumai</div>
								<div class="product-rating">4.7/5</div>
								<div class="product-price">$15/3</div>
								<div class="product-description">
									<p>Pork/Steamed</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>

		<div class="menus" id="chief">
			
			<div class="column column-padding-top column-padding-bottom">
				<h2>Chief's Favorite</h2>
			
				<div class="product-list row">
			
					<div class="col-xs-12 col-md-4">
						<div class="product-item">
							<div class="product-image-featured">
								<img src="images/dumplings.jpg" class="product-image">
							</div>
							<div class="product-info-overlay">
								<div class="product-title">Dumplings</div>
								<div class="product-rating">4.9/5</div>
								<div class="product-price">$18/half dozen</div>
								<div class="product-description">
									<p>Handmade/Steamed</p>
								</div>
							</div>
						</div>
					</div>
			
					<div class="col-xs-12 col-md-4">
						<div class="product-item">
							<div class="product-image-featured">
								<img src="images/bun.jpg" class="product-image">
							</div>
							<div class="product-info-overlay">
								<div class="product-title">Eggplant Buns</div>
								<div class="product-rating">4.6/5</div>
								<div class="product-price">$20/half dozen</div>
								<div class="product-description">
									<p>Eggplant/Pork/Steamed</p>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xs-12 col-md-4">
						<div class="product-item">
							<div class="product-image-featured">
								<img src="images/sumai.jpg" class="product-image">
							</div>
							<div class="product-info-overlay">
								<div class="product-title">Shumai</div>
								<div class="product-rating">4.7/5</div>
								<div class="product-price">$15/3</div>
								<div class="product-description">
									<p>Pork/Steamed</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</div>

	<?php include "partials/footer.html"; ?>
</body>
</html>





