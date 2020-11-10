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

function cartListTemplate($r,$o) {
	return $r.<<<HTML

		<div class="item-card">
			<img src="img/$o->thumbnail">
			<div class="cartItem flex-none">
				<p class="price" style="color: #0D0D0D; text-align: left; font-size: 2em;">$o->name</p>
				<div class="description" style="color: #0D0D0D; min-height: min-content; margin: 0">
					Quantity:
					<button class="addNumber">-</button>
					<span>1</span>
					<button class="addNumber">+</button>
				</div>
				<div class="display-flex">
					<h1 class="smallWindowPrice flex-none itemTitle" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200; margin-right: 3vh;">Total Price</h1>
					<div class="smallWindowPrice flex-stretch"></div>
					<div class="smallWindowPrice description flex-none" style="color: #0D0D0D; min-height: min-content; margin-top: 0; margin-right: 4vh; margin-top: 3vh;">&dollar;$o->price</div>
				</div>
				<button class="form-button addtocart cart-remove" style="margin-top: 10vh; width: 250px; align-content: center;">Remove</button>
			</div>
			<div class="flex-stretch"></div>
			<div class="description flex-none" style="color: #0D0D0D; min-height: min-content; margin-top: 0; margin-right: 4vh">&dollar;$o->price</div>
		</div>
		<hr style="margin-top: 3vh; margin-bottom: 3vh;">

	HTML;
}




 ?>