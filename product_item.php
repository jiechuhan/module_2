<?php 

	include_once "lib/php/functions.php";
		// include_once "parts/templates.php";
	$product = makeQuery(
		makeConn(), 
		"SELECT * FROM `products` WHERE `id` =".$_GET['id'])[0];

	// print_p($product);
	$images = explode(",", $product->images);

	// print_p($_SESSION);

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item - C&J Bakery</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<?php include "parts/title.php"; ?>

	<div class="container content">
		<div class="row">
            <div class="col-sm">
            	<div class="slideshow">
            		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
	  					<ol class="carousel-indicators">
	    					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  					</ol>
	 					
	 					 <div class="carousel-inner">
						    <div class="carousel-item active">
						    	<img class="d-block w-100" src="img/<?= $images[0] ?>" alt="First slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="img/<?= $images[1] ?>" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						    	<img class="d-block w-100" src="img/<?= $images[2] ?>" alt="Third slide">
						    </div>
	  					</div>
					 	
					 	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    	<span class="sr-only">Previous</span>
						</a>
	  					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
					    </a>
					</div>
				</div>
            </div>
            
            <div class="col-sm">
                <form class="col-sm" method="post" action="cart_actions.php?action=add-to-cart">

                	<input type="hidden" name="product-id" value="<?= $product->id ?>">

                	<input type="hidden" name="product-name" value="<?= $product->name ?>">
                    <h1 id="product-name" name="product-name" class="itemTitle"><?= $product->name ?></h1>
                    <div class="description">
                    	<?= $product->description ?>
                    </div>
                    <p class="price">Price: &dollar;<?= $product->price ?></p>

                    <label for="product-amount" class="form-label">Amount</label>
					<div class="form-select">
						<select id="product-amount" name="product-amount">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
					</div>

					<label for="product-size" class="form-label">Size</label>
					<div class="form-select">
						<select id="product-size" name="product-size">
							<option>large</option>
							<option>small</option>
						</select>
					</div>

					<input type="hidden" id="idBySize" name="idBySize" value="">
                    <input type="submit" class="form-button addtocart detailButton" style="padding-top: 7.5px;" value="Add To Cart">
                </form>
            </div>
        </div>
	</div>

	<?php include "parts/footer.php"; ?>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>