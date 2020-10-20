<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Item</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

	<?php include "parts/title.php"; ?>
	<div class="container content">
		<div class="row">
            <div class="col-sm">
            	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
  					<ol class="carousel-indicators">
    					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  					</ol>
 					
 					 <div class="carousel-inner">
					    <div class="carousel-item active">
					    	<img class="d-block w-100" src="img/1.jpg" alt="First slide">
					    </div>
					    <div class="carousel-item">
					    	<img class="d-block w-100" src="img/2.jpg" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					    	<img class="d-block w-100" src="img/3.jpg" alt="Third slide">
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
            
            <div class="col-sm">
                <div class="col-sm">
         <!--            <h1 class="title">Product Title</h1> -->
                    <h1 class="order">Item <?= $_GET['id'] ?> </h1>
                    <h3 class="description">description</h3>
                    <p class="price">Price:</p>
                    <Button class="form-button addtocart">
                    	<span>Add to cart</span>
                    </Button>
                </div>
            </div>
        </div>
	</div>

	<?php include "parts/footer.php"; ?>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>