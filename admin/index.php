<?php 

	include "../lib/php/functions.php";

	$empty_product = (object)[
		"name" => "durian",
		"description" => "from zelda",
		"price" => "5.99",
		"category" => "cake",
		"thumbnail" => "cake_original_thumb.jpg",
		"images" => "cake_original_thumb.jpg",
		"size" => "large"
	];


	// LOGIC
	try {
		$conn = makePDOConn();

		switch ($_GET['action']) {
			case 'update':
				$statement = $conn->prepare("UPDATE 
					`products` 
					SET 
						`name`=?,
						`price`=?,
						`size`=?,
						`category`=?,
						`description`=?,
						`thumbnail`=?,
						`images`=?,
						`date_modify`= NOW()
					WHERE `id` =?
					");

				$statement->execute([
					$_POST['product-name'],
					$_POST['product-price'],
					$_POST['product-size'],
					$_POST['product-category'],
					$_POST['product-description'],
					$_POST['product-thumbnail'],
					$_POST['product-images'],
					$_GET['id']
				]);
				header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
				break;

			case "create":
				$statement = $conn->prepare("INSERT INTO 
					`products` 
					(
						`name`,
						`price`,
						`size`,
						`category`,
						`description`,
						`thumbnail`,
						`images`,
						`date_create`,
						`date_modify`
					)
					VALUES (?,?,?,?,?,?,?,NOW(),NOW())
					");

				$statement->execute([
					$_POST['product-name'],
					$_POST['product-price'],
					$_POST['product-size'],
					$_POST['product-category'],
					$_POST['product-description'],
					$_POST['product-thumbnail'],
					$_POST['product-images'],
				]);
				$id = $conn->lastInsertId();
				header("location:{$_SERVER['PHP_SELF']}?id=$id");
				break;

			case "delete":
				$statement = $conn->prepare("DELETE FROM `products` WHERE `id`=?");
				$statement->execute([$_GET['id']]);
				header("location:{$_SERVER['PHP_SELF']}");
				break;
			
			default:
				break;
		}
	} catch(PDOException $e) {
		die($e->getMessage());
	}



	// TEMPLATES
	function productListItem($r, $o){
		return $r.<<<HTML
			<div class="card soft">
				<div class="display-flex">
					<div class="flex-none images-thumb">
						<img src="../img/$o->thumbnail">
					</div>
					<div class="flex-stretch" style="padding: 1em;">
						<h5 class="card-title">$o->name</h5>
						<p class="card-text">Size: $o->size</p>
					</div>
					<div class="flex-none">
						<a href="{$_SERVER['PHP_SELF']}?id=$o->id" class="form-button addtocart" style="width: 100%; padding: 1vh; margin: auto;">
							<span>Edit</span>
						</a>
					</div>
				</div>
			</div>
		HTML;
	};

	function showProductPage($o){

		$id = $_GET['id'];
		$addoredit = $id == "new" ? "Add" : "Edit";
		$createorupdate = $id == "new" ? "create" : "update";
		$images = array_reduce(explode(",", $o->images), function($r, $o){return $r."<div style='margin: 1%'><img src='../img/$o'></div>";});
		
		//  heredoc
		$display = <<<HTML
			<div>
				<h2>$o->name</h2>

				<hr>

				<div>
					<label class="form-label">Size</label>
					<h5 class="flex-none">$o->size</h5>
				</div>

				<div>
					<label class="form-label">Price</label>
					<h5 class="flex-none">&dollar;$o->price</h5>
				</div>

				<div>
					<label class="form-label">Category</label>
					<h5 class="flex-none">$o->category</h5>
				</div>

				<div>
					<label class="form-label">Description</label>
					<h5 class="flex-none">$o->description</h5>
				</div>

				<div>
					<label class="form-label">thumbnail</label>
					<h5 class="flex-none images-thumb"><img src='../img/$o->thumbnail'></h5>
				</div>

				<div>
					<label class="form-label">Other Images</label>
					<div class="images-thumb d-flex flex-wrap justify-content-left">$images</div>
				</div>
			</div>
		HTML;


		$form = <<<HTML
			<form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&action=$createorupdate">
				<h2>$addoredit Product</h2>

				<hr>

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="product-name">Name</label>
						<input type="text" placeholder="Enter the Product Name" class="form-control" name="product-name" id="product-name" value="$o->name">
					</div>

					<div class="form-group col-md-6">
						<label for="product-category">Category</label>
						<input type="text" placeholder="Enter the Product Category" class="form-control" name="product-category" id="product-category" value="$o->category">
					</div>
				</div>


				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="product-price">Price</label>
						<input type="number" min="0" max="1000" step="0.01" placeholder="Enter the Product Price" class="form-control" name="product-price" id="product-price" value="$o->price">
					</div>

					<div class="form-group col-md-6">
						<label for="product-size">Size</label>
						<input type="text" placeholder="Enter the Product Size" class="form-control" name="product-size" id="product-size" value="$o->size">
					</div>
				</div>

				
				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="product-description">Description</label>
						<textarea class="form-control" name="product-description" id="product-description" placeholder="Enter the Product Description" >$o->description
						</textarea>
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="product-thumbnail">Thumbnail</label>
						<input type="text" placeholder="Enter the Product Thumbnail" class="form-control" name="product-thumbnail" id="product-thumbnail" value="$o->thumbnail">
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="product-images">Other Images</label>
						<input type="text" placeholder="Enter the Product Images" class="form-control" name="product-images" id="product-images" value="$o->images">
					</div>
				</div>
				
				<div class="form-group">
					<input type="submit" class="form-button" value="Save Changes" style="margin: 0 auto;">
				</div>
			</form> 
		HTML;

		$output = $id == "new" ? "<div class='card soft'>$form</div>" :
			"<div class='row'>
				<div class='col-xs-12 col-md-5'><div class='card soft'>$display</div></div>
				<div class='col-xs-12 col-md-7'><div class='card soft'>$form</div></div>
			</div>";

		$delete = $id == "new" ? "" : "<a href='{$_SERVER['PHP_SELF']}?id=$id&action=delete'>Delete</a>";

		echo <<<HTML
			<div class='card soft'>
				<nav class="display-flex">
					<div class="flex-stretch">
						<a href="{$_SERVER['PHP_SELF']}">Back</a>
					</div>
					<div class="flex-none">$delete</div>
				</nav>
			</div>
			$output
		HTML;
	};

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- CSS STYLESHEET -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="../lib/css/styleguide.css">
	<link rel="stylesheet" href="../css/storetheme.css">

	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Italiana&family=Josefin+Sans:wght@100;200;400;500;700&family=Nanum+Myeongjo:wght@400;700;800&display=swap" rel="stylesheet">

	<!-- INCON -->
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="img/cj.ico" type="image/x-icon"/>
	<script src="https://kit.fontawesome.com/b94e5be0e6.js" crossorigin="anonymous"></script>

	<!-- JQUERY -->
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
	<title>Product Admin Page</title>
</head>
<body>

	<div class="navbar">
		<ul class="nav">
			<li><a href="index.php">Product Admin Page</a></li>
		</ul>

		<ul class="nav justify-content-end">
			<li><a href="../index.php">Home</a></li>
			<li><a href="<?=$_SERVER['PHP_SELF'] ?>?">Product List</a></li>
			<li><a href="<?=$_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
		</ul>
	</div>


	<div class="container">
		<?php 

			if(isset($_GET['id'])) {
				echo showProductPage(
					$_GET['id']=="new" ? 
						$empty_product : 
						makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` =".$_GET['id'])[0]
				);
			} else {

		 ?>

		<div class="title" style="margin-top: 20px;">
			<h1>Product List</h1>
		</div>

			<?php 

				$result = makeQuery(makeConn(), "SELECT * FROM `products` ORDER BY `date_create` DESC");

				echo array_reduce($result, 'productListItem');

				?>

		<?php	}   ?>
	</div>

</body>
</html>