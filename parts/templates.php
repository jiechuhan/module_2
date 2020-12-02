<?php 

function productListTemplate($r, $o) {
	return $r.<<<HTML

		<div class="card dark">
	     	<figure class="figure product-overlay">
				<a href="product_item.php?id=$o->id">
					<img class="img" src="img/$o->thumbnail" alt="" intrinsicsize="250 x 250">
				</a>
				<figcaption>
		     		<h5 class="card-title">$o->name</h5>
		        	<p class="card-text">&dollar;$o->price</p>
				</figcaption>
				<a href="product_added_to_cart.php?id=$o->id" class="form-button addtocart"><span style="padding-top: 7.5px;">Add to cart</span></a>
			</figure>
	    </div>    
	HTML;
}


function selectAmount($amount=1, $total=10) {
	$output = "<select name='amount'>";
	for ($i=1; $i<=$total; $i++) {
		$output .= "<option ".($i==$amount?"selected":"").">$i</option>";
	}
	$output .= "</select>";
	return $output;
}


function cartListTemplate($r,$o) {

	$totalfixed = number_format($o->total, 2, '.' , '');
	$selectAmount = selectAmount($o->amount, 10);

	return $r.<<<HTML

		<div class="item-card">
			<img src="img/$o->thumbnail">
			<div class="cartItem flex-none">
				<p class="price" style="color: #0D0D0D; text-align: left; font-size: 2em;">$o->name</p>
				<div class="description" style="color: #0D0D0D; min-height: min-content; margin: 0">
					<form action="cart_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
						<input type="hidden" name="id" value="$o->id">
						
						<div style="margin-bottom: 1vh;">
						Quantity:

						<div class="form-select" style="font-size: 0.8em">
							$selectAmount
						</div>
						</div>

						Size:
						<span>$o->size</span>

					</form>

				</div>


				<div class="display-flex">
					<h1 class="smallWindowPrice flex-none itemTitle" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200; margin-right: 3vh;">Total Price</h1>
					<div class="smallWindowPrice flex-stretch"></div>
					<div class="smallWindowPrice description flex-none" style="color: #0D0D0D; min-height: min-content; margin-top: 0; margin-right: 4vh; margin-top: 3vh;">&dollar;$totalfixed</div>
				</div>
				<form action="cart_actions.php?action=delete-cart-item" method="post">
					<input type="hidden" name="id" value="$o->id">
					<input type="submit" class="form-button addtocart cart-remove" style="margin-top: 3vh; width: 250px; align-content: center;" value="Remove" style="font-size: 0.8em">
				</form>
			</div>
			<div class="flex-stretch"></div>
			<div class="description flex-none" style="color: #0D0D0D; min-height: min-content; margin-top: 0; margin-right: 4vh">&dollar;$totalfixed</div>
		</div>
		<hr style="margin-top: 3vh; margin-bottom: 3vh;">

	HTML;
}


function cartTotals() {
	$cart = getCartItems();

	$cartPrice = array_reduce($cart, function($r, $o) {
		return $r + $o->total;
	}, 0);

	$shipping = 20;

	$pricefixed = number_format($cartPrice, 2, '.' , '');
	$taxfixed = number_format($cartPrice*0.0725, 2, '.' , '');
	$taxedfixed = number_format($cartPrice*1.0725+$shipping, 2, '.' , '');


	return <<<HTML
			
			<div class="card soft">
					<h1 class="itemTitle flex-none" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200">Order Summary</h1>
					<hr>

					<div class="addUp">
						<div class="d-flex justify-content-between">
							<p>Subtotal:</p>
							<p>&dollar;$pricefixed</p>
						</div>
						<div class="d-flex justify-content-between">
							<p>Shipping/Delivery:</p>
							<p>&dollar;$shipping</p>
						</div>
						<div class="d-flex justify-content-between">
							<p>Taxes:</p>
							<p>&dollar;$taxfixed</p>
						</div>
					</div>

					<hr>

					<div class="d-flex justify-content-between">
						<h5 style="font-size: 1.75em;">Total:</h5>
						<h5 id="totalPrice" style="font-size: 1.5em;">&dollar;$taxedfixed</h5>
					</div>
				</div>

	HTML;

}


function recommendedProducts($a) {
	$products = array_reduce($a, 'productListTemplate');
	echo <<<HTML
		<div class="grid gap productlist">$products</div>
	HTML;
}


function recommendedCategory($cat, $limit=3) {
	$result = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `category` = '$cat' ORDER BY `date_create` DESC LIMIT $limit ");
	recommendedProducts($result);
}


function recommendedSimilar($cat, $id=0, $limit=3) {
	$result = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `category` = '$cat' AND `id`<>$id ORDER BY rand() DESC LIMIT $limit ");
	recommendedProducts($result);
}




 ?>