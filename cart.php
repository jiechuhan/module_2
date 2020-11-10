<?php 

	include_once "lib/php/functions.php";
	include_once "parts/templates.php";
		// include_once "parts/templates.php";
	$cart = makeQuery(
		makeConn(), 
		"SELECT * FROM `products` WHERE `id` IN (1, 5, 8, 10) ");
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

					<div class="cart-card">

						<?= array_reduce($cart, 'cartListTemplate') ?>

						<div class="total-price-holder" style="display: none"></div>
						<div class="price-holder" style="display: none"></div>
					</div>

					

				</div>
			</div>

			<div class="col-xs-12 col-md-4">
				<div class="card soft">
					<h1 class="itemTitle flex-none" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200">Order Summary</h1>
					<hr>

					<div class="addUp">
						<div class="d-flex justify-content-between">
							<p>Subtotal:</p>
							<p>$50</p>
						</div>
						<div class="d-flex justify-content-between">
							<p>Shipping/Delivery:</p>
							<p>$50</p>
						</div>
						<div class="d-flex justify-content-between">
							<p>Taxes:</p>
							<p>$50</p>
						</div>
					</div>

					<hr>

					<div class="d-flex justify-content-between">
						<h5 style="font-size: 1.75em;">Total:</h5>
						<h5 style="font-size: 1.5em;">$50</h5>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xs-12 col-md-8">
			<div class="checkout-button">
				<div class="flex-none abstract" style="margin-top: 0;">
					<a href="product_list.php" class="form-button checkout"><span>Continue Shopping</span></a>
				</div>

				<div class="flex-stretch"></div>

				<div class="flex-none abstract" style="margin-top: 0;">
					<a href="checkout.php" class="form-button checkout"><span>Check Out</span></a>
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php"; ?>

	<!-- <script type="text/javascript">
		function smallWindowPrice() {
			$('.total-price-holder').css('display','block');
			$('.price-holder').css('display','block');
			$('#product-price').css('display','none');
			$('.cart-price').css('display', 'none');
			$(".total-price-holder").empty();
			$(".total-price-holder").append($(".cart-price").text());
			$(".total-price-holder").addClass("itemTitle");
			$(".total-price-holder").css({"color": "#0D0D0D", "text-align": "left", "font-size": "1.5em", "font-weight": "200"});
			$(".price-holder").empty();
			$(".price-holder").append($("#product-price").text());
			$(".price-holder").addClass("price-description");
		};

		function bigWindowPrice() {
			$('.cart-price').css('display', 'block');
			$('.price-holder').css('display','none'); 
			$('#product-price').css('display','block'); 
			$(".price-holder").empty();
		};


		$(function(){
			if(window.matchMedia("(max-width: 800px)").matches) {
				smallWindowPrice();
			}  else {
				bigWindowPrice();
			};

			$(window).on('resize', function(){ 
				if(window.matchMedia("(max-width: 800px)").matches) {
					smallWindowPrice();
				}  else {
					bigWindowPrice();
				}
			});
		});		
	</script> -->
</body>
</html>