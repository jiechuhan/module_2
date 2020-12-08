<?php 
	include_once "lib/php/functions.php";
	include_once "parts/templates.php"; 
	
	$cart = getCartItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checkout - C&J Bakery</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	<?php include "parts/navbar.php"; ?>
	<?php include "parts/title.php"; ?>

	<div class="container content">

		<h1 class="order">CHECKOUT</h1>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<div class="card">
					<h1 class="itemTitle flex-none" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200">Order Summary</h1>
					<hr>

					<?php 

						echo array_reduce($cart, function($r, $o) {
						$totalfixed = number_format($o->total, 2, '.' , '');
						return $r."
							<div class='display-flex'>
							<div class='flex-none'>
								<h5 class='price' style='color: #0D0D0D; text-align: left; font-size: 1.5em;'>$o->name</h5>
								<div class='description' style='color: #0D0D0D; min-height: min-content; margin: 0'>
									Quantity:
									<span>1</span>
								</div>
							</div>
							<div class='flex-stretch'></div>
							<div class='flex-none'>
								<div class='description flex-none' id='product-price' style='color: #0D0D0D; min-height: min-content; margin-top: 0;'>$50
								</div>
							</div>
						</div>
						";
					}) ?>

					<hr>

					<?= cartTotals(); ?>

				</div>
			</div>


			<div class="col-sm-7">
				<div class="card">

					<!-- <h1 class="itemTitle flex-none shipAddress" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200">Shipping Address</h1> -->
					<span class="itemTitle flex-none shipAddress" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200; background-color: transparent; border: none; cursor: pointer;">Shipping Address</span>

					<hr>

					<form class="shippingAddress">
					 	<div class="form-row">
					 		<div class="form-group col-md-6">
						    	<label for="inputFirstName">First Name</label>
						    	<input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
						    </div>

					    	<div class="form-group col-md-6">
						      	<label for="inputLastName">Last Name</label>
						     	<input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
					    	</div>
					  	</div>

					  	<div class="form-group">
						      	<label for="inputEmail4">Email</label>
						     	<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
					    	</div>

					  	<div class="form-group">
						    <label for="inputAddress">Address</label>
						    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
						</div>
					  	
					  	<div class="form-group">
						    <label for="inputAddress2">Address 2</label>
						    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
						 </div>

					  	<div class="form-row">
						    <div class="form-group col-md-6">
						    	<label for="inputCity">City</label>
						     	<input type="text" class="form-control" id="inputCity">
						    </div>
					    	
					    	<div class="form-group col-md-4">
					      		<label for="inputState">State</label>
					      		<select id="inputState" class="form-control">
						        	<option selected>Choose...</option>
						        	<option>...</option>
					      		</select>
					    	</div>
					    
					    	<div class="form-group col-md-2">
						    	<label for="inputZip">Zip</label>
						    	<input type="text" class="form-control" id="inputZip">
					    	</div>
					  	</div>
					  	
					  	<div class="abstract" style="margin: 0px">
					  		<button class="form-button" style="margin: 2vh auto;" type="button">Next</button>
					  </div>
					</form>
				</div>

				<div class="card" id="paymentMethod">
			<!-- 		<h1 class="itemTitle flex-none" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200">Payment Method</h1> -->
					<span class="itemTitle flex-none payMethod" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 200; background-color: transparent; border: none; cursor: pointer;">Payment Method</span>

					<hr>

					<form id="paymentMethodForm" style="display: none;">
						<div class="form-group">
					    	<label for="inputName">Name</label>
					    	<input type="text" class="form-control" id="inputName" placeholder="Name on card">
						</div>

					  	<div class="form-group">
					      	<label for="inputCardNumber">Card Number</label>
					     	<input type="number" class="form-control" id="inputCardNumber" placeholder="Card Number">
				    	</div>

				    	<div class="form-row">
					 		<div class="form-group col-md-6">
						      	<label for="inputCVV">CVV</label>
						     	<input type="number" class="form-control" id="inputCVV" placeholder="###">
					    	</div>

					    	<div class="form-group col-md-6">
						      	<label for="inputExp">Exp Date</label>
						     	<input type="month" class="form-control" id="inputExp" placeholder="MM/YYYY">
					    	</div>
					  	</div>	

					  	<div class="sameAsShipping">
						  	<label style="margin-top: 2vh;">
						  		<input type="checkbox" id="input-1" value="billingAddress">
						  	</label>
							<label for="input-1">Same as Shipping Address</label>
						</div>

						<div class="billingAddress" style="margin-top: 7vh;">
						  	<h1 class="itemTitle flex-none" style="color: #0D0D0D; text-align: left; font-size: 1.5em; font-weight: 500">Billing Address</h1>

						  	<hr>

						  	<div class="form-row">
						 		<div class="form-group col-md-6">
							    	<label for="inputFirstName">First Name</label>
							    	<input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
							    </div>

						    	<div class="form-group col-md-6">
							      	<label for="inputLastName">Last Name</label>
							     	<input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
						    	</div>
						  	</div>

						  	<div class="form-group">
							    <label for="inputAddress">Address</label>
							    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
							</div>
						  	
						  	<div class="form-group">
							    <label for="inputAddress2">Address 2</label>
							    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
							 </div>

						  	<div class="form-row">
							    <div class="form-group col-md-6">
							    	<label for="inputCity">City</label>
							     	<input type="text" class="form-control" id="inputCity">
							    </div>
						    	
						    	<div class="form-group col-md-4">
						      		<label for="inputState">State</label>
						      		<select id="inputState" class="form-control">
							        	<option selected>Choose...</option>
							        	<option>...</option>
						      		</select>
						    	</div>
						    
						    	<div class="form-group col-md-2">
							    	<label for="inputZip">Zip</label>
							    	<input type="text" class="form-control" id="inputZip">
						    	</div>
						  	</div>
						  </div>
					  	
					 <!--  	<a href="confirmation.php" type="button" class="form-button" style="margin: 2vh auto;">Place Order</a> -->


					 	<div class="abstract" style="margin: 0px">
					  		<a href="confirmation.php" type="button" class="form-button" type="button" class="form-button" style="margin: 2vh auto;">
					  		<span>Place Order</span></a>
					  	</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include "parts/footer.php"; ?>


	<script type="text/javascript"> 
        $(document).ready(function() { 
            $('input[type="checkbox"]').click(function() { 
                var inputValue = $(this).attr("value"); 
                $("." + inputValue).toggle(); 
            }); 

            $('.shipAddress').click(function() {
            	$('.shippingAddress').slideDown();
            });

            $('.payMethod').click(function() {
            	$('#paymentMethodForm').slideDown();
            })

            $('.abstract').click(function() {
            	$('.shippingAddress').slideUp();
            	$('#paymentMethodForm').slideDown();
            });


            $("#TotalPrice").text( "$" +
            	window.location.href.split('$')[1]
            );


        }); 
    </script> 

</body>
</html>