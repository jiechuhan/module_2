<?php include_once "lib/php/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>C&J Bakery Cart</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>
	<?php include "parts/title.php"; ?>

	<div class="container content">

		<h1 class="order">BLOG</h1>
	</div>


	<div class="container">
		<h1 class="itemTitle flex-none" style="color: #F2F2F2; text-align: left; font-size: 1.5em; font-weight: 200">Articles</h1>

		<div class="card soft">
			<div class="cart-card">
				<div class="item-card" style="margin-top: 3vh; margin-bottom: 3vh;">
					<img src="img/1.jpg">
					<div class="cartItem">
						<p class="price" style="color: #0D0D0D; text-align: left; font-size: 2em;">Article Title</p>
						<div class="description" style="color: #0D0D0D; min-height: min-content; margin: 0">
                    		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    	</div>
						<button class="form-button addtocart" style="margin-top: 4vh; width: 80%;">Read More</button>
					</div>
					<div class="flex-stretch"></div>
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php"; ?>

</body>
</html>