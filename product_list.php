<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List - C&J Bakery</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>
	<?php include "parts/title.php"; ?>

	<div class="container content">
		
		<h1 class="order">ORDER</h1>

		<div class="row">
			<!-- row-cols-1 row-cols-sm-2 row-cols-md-4 -->
		    <div class="col-sm-3 dropdownmenu">
		    	<button type="button" class="dropdown-item form-button menu"><span>CAKE</span></button>
		    	<button type="button" class="dropdown-item form-button menu"><span>BAKERY</span></button>
		    	<button type="button" class="dropdown-item form-button menu"><span>DRINK</span></button>
		    </div>

		    <div class="col-sm-9 d-flex flex-wrap justify-content-left">

			    <?php 

				include_once "lib/php/functions.php";
				include_once "parts/templates.php";

				$result = makeQuery(
					makeConn(),
					"
					SELECT *
					FROM `products`
					ORDER BY `date_create` DESC
					LIMIT 12
					"
				);

				echo array_reduce($result, 'productListTemplate');

				 ?>
				 
			</div>
		 </div>
	</div>

	<?php include "parts/footer.php"; ?>

	<script type="text/javascript">
    	$(function(){each($('img'),function(i,item){$(item).width('250');$(item).height('250')});});
    </script>

</body>
</html>