<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";

	$cart_items = getCartItems();
	$cart = getCart();

	// print_p($_SESSION['cart']);
	// print_p($cart_items);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart - C&J Bakery</title>

	<?php include "parts/meta.php"; ?>
	<script src="js/cart_totalPrice.js"></script>
</head>
<body>
	<script>
		var goToCheckout = function(){
			$('#CheckOut').click(function(){
				window.open('checkout.php?total=' + 
					$("#totalPrice").text() 
					);
			  	return false;
			});
		}
	</script>
	
	<?php include "parts/navbar.php"; ?>
	<?php include "parts/title.php"; ?>

	<div class="container content">

		<h1 class="order">SHOPPING CART</h1>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<div class="card soft">
					<div class="display-flex">
						<h1 class="itemTitle flex-none" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200">Cart Items</h1>
						<div class="flex-stretch"></div>
						<h1 class="itemTitle flex-none cart-price" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200; margin-right: 3vh;">Total Price</h1>
					</div>
					<!-- <p>This is item # <?= $_GET['id'] ?> </p> -->
					<hr style="margin-bottom: 3vh;">


				<?php if(count($cart)) { ?>
					<div class="cart-card">

						<?= array_reduce($cart_items, 'cartListTemplate') ?>

						<div class="total-price-holder" style="display: none"></div>
						<div class="price-holder" style="display: none"></div>
					</div>
				</div>

				<div class="checkout-button">
					<div class="flex-none abstract" style="margin-top: 0;">
						<a href="product_list.php" class="form-button checkout"><span>Continue Shopping</span></a>
					</div>

					<div class="flex-stretch"></div>

					<div class="flex-none abstract" style="margin-top: 0;">
						<a id="CheckOut" class="form-button checkout" onclick="goToCheckout();"><span>Check Out</span></a>
					</div>
				</div>

				<?php 
					} else {
				?> 

					<h2>No items in cart</h2>
					

					</div>

					<div class="checkout-button">
						<div class="flex-none abstract" style="margin-top: 0;">
							<a href="product_list.php" class="form-button checkout"><span>Continue Shopping</span></a>
						</div>

						<div class="flex-stretch"></div>

						<div class="flex-none abstract" style="margin-top: 0;">
							<a id="CheckOut" class="form-button checkout" onclick="goToCheckout();"><span>Check Out</span></a>
						</div>
					</div>

					<div class="card soft">

						<h2>Other Recommendations</h2>
						<?php recommendedAnything(6); ?>

					</div>

						<?php } ?>
				

				

			</div>

			<div class="col-xs-12 col-md-4">
				<div class="card soft">
					<h1 class="itemTitle flex-none" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200">Order Summary</h1>
					<hr>
					
					<?= cartTotals() ?>
				</div>
			</div>
		</div>

	</div>

	<?php include "parts/footer.php"; ?>

</body>
</html>