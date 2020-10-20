<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<div class="container content">

		<h1 class="order">Order</h1>

		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
		    <div class="col dropdownmenu">
		    	<button type="button" class="dropdown-item form-button menu"><span>PICK-UP</span></button>
		    	<button type="button" class="dropdown-item form-button menu"><span>DELIVERY</span></button>
		    	<button type="button" class="dropdown-item form-button menu"><span>CURBSIDE PICK-UP</span></button>
		    </div>

		    <div class="col">
		    	<div class="card dark">
		    		<figure class="figure product-overlay">
		    			<a href="product_item.php?id=1">
							<img src="img/1.jpg" class="card-img-top" alt="...">
						</a>
						<figcaption>
				     		<h5 class="card-title">Card title</h5>
				        	<p class="card-text">$50</p>
						</figcaption>
						<button class="form-button addtocart"><span>Add to cart</span></button>
					</figure> 				     	
			    </div>

			    <div class="card dark">
			     	<figure class="figure product-overlay">
			     		<a href="product_item.php?id=4">
							<img src="img/4.jpg" class="card-img-top" alt="...">
						</a>
						<figcaption>
				     		<h5 class="card-title">Card title</h5>
				        	<p class="card-text">$50</p>
						</figcaption>
						<button class="form-button addtocart"><span>Add to cart</span></button>
					</figure> 	
			    </div>

			    <div class="card dark">
			     	<figure class="figure product-overlay">
						<a href="product_item.php?id=7">
							<img src="img/7.jpg" class="card-img-top" alt="...">
						</a>
						<figcaption>
				     		<h5 class="card-title">Card title</h5>
				        	<p class="card-text">$50</p>
						</figcaption>
						<button class="form-button addtocart"><span>Add to cart</span></button>
					</figure> 	
			    </div>
		    </div>

		    <div class="col">
		    	<div class="card dark">
			     	<figure class="figure product-overlay">
						<a href="product_item.php?id=2">
							<img src="img/2.jpg" class="card-img-top" alt="...">
						</a>
						<figcaption>
				     		<h5 class="card-title">Card title</h5>
				        	<p class="card-text">$50</p>
						</figcaption>
						<button class="form-button addtocart"><span>Add to cart</span></button>
					</figure> 	
			    </div>

			    <div class="card dark">
			     	<figure class="figure product-overlay">
						<a href="product_item.php?id=5">
							<img src="img/5.jpg" class="card-img-top" alt="...">
						</a>
						<figcaption>
				     		<h5 class="card-title">Card title</h5>
				        	<p class="card-text">$50</p>
						</figcaption>
						<button class="form-button addtocart"><span>Add to cart</span></button>
					</figure> 	
			    </div>

			    <div class="card dark">
			     	<figure class="figure product-overlay">
						<a href="product_item.php?id=8">
							<img src="img/8.jpg" class="card-img-top" alt="...">
						</a>
						<figcaption>
				     		<h5 class="card-title">Card title</h5>
				        	<p class="card-text">$50</p>
						</figcaption>
						<button class="form-button addtocart"><span>Add to cart</span></button>
					</figure>
				</div>
		    </div>

		    <div class="col">
		    	<div class="card dark">
			     	<figure class="figure product-overlay">
						<a href="product_item.php?id=3">
							<img src="img/3.jpg" class="card-img-top" alt="...">
						</a>
						<figcaption>
				     		<h5 class="card-title">Card title</h5>
				        	<p class="card-text">$50</p>
						</figcaption>
						<button class="form-button addtocart"><span>Add to cart</span></button>
					</figure> 	
			    </div>

			    <div class="card dark">
			     	<figure class="figure product-overlay">
						<a href="product_item.php?id=6">
							<img src="img/6.jpg" class="card-img-top" alt="...">
						</a>
						<figcaption>
				     		<h5 class="card-title">Card title</h5>
				        	<p class="card-text">$50</p>
						</figcaption>
						<button class="form-button addtocart"><span>Add to cart</span></button>
					</figure> 	
			    </div>

			    <div class="card dark">
			     	<figure class="figure product-overlay">
						<a href="product_item.php?id=9">
							<img src="img/9.jpg" class="card-img-top" alt="...">
						</a>
						<figcaption>
				     		<h5 class="card-title">Card title</h5>
				        	<p class="card-text">$50</p>
						</figcaption>
						<button class="form-button addtocart"><span>Add to cart</span></button>
					</figure> 	
			    </div>
		    </div>
		 </div>
	</div>

	<?php include "parts/footer.php"; ?>

</body>
</html>