<?php

include_once "php/functions.php";

$product = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);
    
?><html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cart Page</title>
	<link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
    <?php include "parts/meta.php"; ?>
</head>

<body>
	
	<?php include "parts/navbar.php"; ?>

	<h1>You added <?= $product->name ?> to your cart</h1>

	<div class="addpro">
	<div class="addedproduct">
		<p style="margin: 0px;">There are now <strong><?= $cart_product->amount ?></strong> of <strong><?= $product->name ?></strong> in your cart. </p>
	</div></div>

	<div class="btns2">	
		<button class="shopbtn" onclick="location.href='store.php'">Continue Shopping</button> 
		<button class="cartbtn" onclick="location.href='cart.php'">Go to Cart</button> 
	</div>


</body>
</html>