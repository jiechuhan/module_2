<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart - C&J Bakery</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>
	<?php include "parts/title.php"; ?>

	<div class="container content">

		<h1 class="order">SHOPPING CART</h1>
	</div>


	<div class="container">
		<div class="card soft">
			<div class="display-flex">
				<h1 class="itemTitle flex-none" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200">Cart Items</h1>
				<div class="flex-stretch"></div>
				<h1 class="itemTitle flex-none cart-price" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200; margin-right: 3vh;">Price</h1>
			</div>
			<!-- <p>This is item # <?= $_GET['id'] ?> </p> -->
			<hr style="margin-bottom: 3vh;">

			<div class="cart-card">
				<div class="item-card">
					<img src="img/1.jpg">
					<div class="cartItem flex-none">
						<a href="product_item.php?id=1" class="price" style="color: #0D0D0D; text-align: left; font-size: 2em;">Item Title</p></a>
						<div class="description" style="color: #0D0D0D; min-height: min-content; margin: 0">
							Quantity:
							<button class="addNumber">-</button>
							<span>1</span>
							<button class="addNumber">+</button>
						</div>

						<div class="price-holder" style="display: none"></div>
						<button class="form-button addtocart remove">Remove</button>
					</div>
					<div class="flex-stretch"></div>
					<div class="description flex-none" id="product-price" style="color: #0D0D0D; min-height: min-content; margin-top: 0; margin-right: 4vh">$50
					</div>
				</div>
				<hr style="margin-top: 3vh; margin-bottom: 3vh;">
			</div>

			<!-- <div class="cart-card">
				<div class="item-card">
					<img src="img/1.jpg">
					<div class="cartItem flex-none">
						<p class="price" style="color: #0D0D0D; text-align: left; font-size: 2em;">Item Title</p>
						<div class="description" style="color: #0D0D0D; min-height: min-content; margin: 0">
							Quantity:
							<button class="addNumber">-</button>
							<span>1</span>
							<button class="addNumber">+</button>
						</div>
						<button class="form-button addtocart" style="margin-top: 10vh;">Remove</button>
					</div>
					<div class="flex-stretch"></div>
					<div class="description flex-none" style="color: #0D0D0D; min-height: min-content; margin-top: 0; margin-right: 4vh">$50</div>
				</div>
				<hr style="margin-top: 3vh; margin-bottom: 3vh;">
			</div> -->
		</div>

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

	<?php include "parts/footer.php"; ?>

	<script type="text/javascript">
		function smallWindowPrice() {
			$('.price-holder').css('display','block');
			$('#product-price').css('display','none');
			$(".price-holder").empty();
			$(".price-holder").append($("#product-price").text());
			$(".price-holder").addClass("price-description");
		};

		function bigWindowPrice() {
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
	</script>
</body>
</html>