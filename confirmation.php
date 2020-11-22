<?php 

include_once "lib/php/functions.php"; 

resetCart();

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

		<h1 class="order">Confirmation</h1>
	</div>

	<?php include "parts/modal.php"; ?>

	<?php include "parts/footer.php"; ?>


</body>
</html>