<?php 

	include_once "lib/php/functions.php"; 
	include_once "parts/templates.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List - C&J Bakery</title>

	<?php include "parts/meta.php"; ?>

	<script src="lib/js/functions.js"></script>
	<script src="js/templates.js"></script>
	<script src="js/product_list.js"></script>

</head>
<body>
	
	<?php include "parts/navbar.php"; ?>
	<?php include "parts/title.php"; ?>

	<div class="container content">
		
		<h1 class="order">ORDER</h1>


	    <div class="display-flex">
	    	<div class="flex-stretch">
				<form class="hotdog menu" id="product-search" style="width: 95%; height: 5vh;">
					<input type="search" placeholder="Seach Products">
				</form>
			</div>

			<div class="flex-none">
				<div class="form-select menu" style="width: 100%">
					<select class="js-sort">
						<option value="1">Newest</option>
						<option value="2">Oldest</option>
						<option value="3">Price Low to High</option>
						<option value="4">Price High to Low</option>
					</select>
				</div>
			</div>

		</div>

		<div class="row">

			<!-- row-cols-1 row-cols-sm-2 row-cols-md-4 -->
		    <div class="col-sm-3 dropdownmenu">
<!-- 		    	<select class="js-sort dropdown-item form-button menu">
					<option value="1">Newest</option>
					<option value="2">Oldest</option>
					<option value="3">Price Low to High</option>
					<option value="4">Price High to Low</option>
				</select> -->
		    	<button data-filter="category" data-value="" type="button" class="dropdown-item form-button menu"><span>All</span></button>
		    	<button data-filter="category" data-value="cake" type="button" class="dropdown-item form-button menu"><span>CAKE</span></button>
		    	<button data-filter="category" data-value="bakery" type="button" class="dropdown-item form-button menu"><span>BAKERY</span></button>
		    	<button data-filter="category" data-value="drink" type="button" class="dropdown-item form-button menu"><span>DRINK</span></button>
		    </div>



		    <div class="col-sm-9 d-flex flex-wrap justify-content-left productlist">			 
			</div>

		 </div>
	</div>

	<?php include "parts/footer.php"; ?>

	<script type="text/javascript">
    	$(function(){$.each($('img'),function(i,item){$(item).width('250');$(item).height('250')});});
    </script>

</body>
</html>