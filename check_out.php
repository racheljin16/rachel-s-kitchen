<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>check out</title>
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
  <h2>Your Dishes</h2> 

<?php
include_once("db_connect.php");
$total_price = 0;
$product_list="";
echo "<table>";
echo "<tr>";
echo "<th>product</th>";
echo "<th>quantity</th>";
echo "<th>price</th>";
echo "<th>value</th>";
echo "</tr>";
foreach($_GET as $product_info=>$quantity){
   if($quantity > 0) {
   	$product_id = substr($product_info,21);
   	$product_list .= "_". $product_id;
   	$query_product = "SELECT * FROM ruicongj_kitchen.product WHERE id=".$product_id;
    $product = $mysqli->query($query_product)->fetch_object();
    $value = $product->price * $quantity;
    $total_price += $value;
    echo "<tr>";
    echo "<td>";
    echo $product->name;
    echo "</td>";
    echo "<td>";
    echo $quantity;
    echo "</td>";
    echo "<td>";
    echo "$".$product->price;
    echo "</td>";
    echo "<td>";
    echo "$".$value;
    echo "</td>";
    echo "</tr>";
   }
}
echo "</table>";?>
<br><p style="color: #f9aa3c">
<?php
echo "Your total price: $" . $total_price;
?>
</p>
<?php
echo "<form action='place_order.php' method='get'>";
echo "<input type='hidden' name='product_list' value='" . $product_list ."'/>";
echo "<input type='submit' class='button' value='Place Order'/>";
echo "</form>"
?>

</body>
</html>