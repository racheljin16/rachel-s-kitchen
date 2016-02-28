<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>

	<link rel="stylesheet" href="css/basic.css">
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<header> 
		
		<div class="title" id="titlelogo">
			<a href="index.php"><img class="logo" id="toplogo" src="images/logo.png"></a>
		</div>

		<nav class="nav nav-pills">
			<ul>
    			<li><a href="cart.php"><img src="images/cart.png" style="height: 20px"></a></li>
    			<li class="li-current">
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

	<div class="column">
		<div id="login-form">
			<h2>Log in</h2>
			<form action="login_redirect.php" method="post" >
		    	<label for="">User name:</label>
				<input type="text" name="username"><br>
				<label for="">Password:</label>
				<input type="password" name="password"><br>
				<input type="submit" class="button" value="Log in">
			</form>
		</div>

		<div id="signup-form">
			<h2>Sign up</h2>
			<form action="signup_redirect.php" method="post" >
			    <label for="">User name:</label>
				<input type="text" name="username"> <br>
				<label for="">Password:</label>
				<input type="password" name="password"> <br>
				<label for="">Re-enter Password:</label>
				<input type="password" name="re-password"> <br>
				<input type="submit" class="button" value="Sign up">
			</form>
		</div>
	</div>

</body>
</html>