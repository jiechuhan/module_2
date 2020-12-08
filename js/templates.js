const listItemTemplate = templater( o => `
	<div class="card dark">
     	<figure class="figure product-overlay">
			<a href="product_item.php?id=${o.id}">
				<img class="img" src="img/${o.thumbnail}" alt="" intrinsicsize="250 x 250">
			</a>
			<figcaption>
	     		<h5 class="card-title">${o.name}</h5>
	        	<p class="card-text">&dollar;${o.price}</p>
			</figcaption>
			
		</figure>
    </div>    
`);

// <a href="product_added_to_cart.php?id=${o.id}&amount=1&size=small" class="form-button addtocart">
// 	<span style="padding-top: 7.5px;">Add to cart</span>
// </a>