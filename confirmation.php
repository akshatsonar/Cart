<?php
include_once "php/functions.php";
resetCart();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cart Page</title>
	<link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="https://use.typekit.net/mzq5qsc.css">
</head>

<body>
	
	<?php include "parts/navbar.php"; ?>

	<div>
		<h1>Your Order is Confirmed!</h1>
	</div>

	<div style="display: flex; justify-content: center; padding-top: 50px;">
		<div class="confirmsec">
			<div class="confirmsec2">
				<p>You will shortly recieve a confirmation email with your order details.</p>
			</div>

			<div class="btns3">
				<button class="cartbtn3" onclick="location.href='store.php'">Continue Shopping</button>
			</div>
		</div>
	</div>

</body>
</html>