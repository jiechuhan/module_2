<?php 

	include_once "lib/php/functions.php";
		// include_once "parts/templates.php";
	$product = makeQuery(
		makeConn(), 
		"SELECT * FROM `products` WHERE `id` =".$_GET['id'])[0];

	// print_p($product);
	$cart_product = cartItemById($_GET['id']);

	// print_p($cart_product);


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Confirmation Page</title>
	<?php include "parts/meta.php" ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<?php include "parts/title.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2>You added <?= $product->name ?> to your cart</h2>
			<p>There are now <?= $cart_product->amount ?> of <?= $product->name ?> (<?= $cart_product->size ?>) in your cart.</p>
			<div class="display-flex">
				<div class="flex-none"><a href="product_list.php">Continue Shopping</a></div>
				<div class="flex-stretch"></div>
				<div class="flex-none"><a href="cart.php">Go to Cart</a></div>
			</div>
		</div>
	</div>
</body>
</html>