<?php include_once "lib/php/functions.php"; ?>

<input type="checkbox" id="menu" class="hidden">
<div class="navbar">
	<ul class="nav">
		<li><a href="index.php">Home</a></li>
		<li><a href="product_list.php">Order</a></li>
		<li><a href="blog.php">Blog</a></li>
	</ul>

	<div class="menu-button">
		<label for="menu">&equiv;</label>
	</div>

	<ul class="nav justify-content-end">
		<li><a href="#article1">Location</a></li>
		<li><a href="#article2"><i class="fas fa-map-marker-alt"></i><span>Login<span></a></li>
		<li><a href="cart.php">
			<span>Cart</span>
			<span class="badge"><?= makeCartBadge(); ?></span>
		</a></li>
	</ul>

</div>