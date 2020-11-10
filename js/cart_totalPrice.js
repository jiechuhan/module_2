function smallWindowPrice() {
	// $('.total-price-holder').css('display','block');
	// $('.price-holder').css('display','block');
	// $('#product-price').css('display','none');
	$('.cart-price').css('display', 'none');
	$('.description.flex-none').hide();
	$('.smallWindowPrice').show();
	$(".cart-remove").css('margin-top', '2vh');
	// $(".total-price-holder").empty();
	// $(".total-price-holder").append($(".cart-price").text());
	// $(".total-price-holder").addClass("itemTitle");
	// $(".total-price-holder").css({"color": "#0D0D0D", "text-align": "left", "font-size": "1.5em", "font-weight": "200"});
	// $(".price-holder").empty();
	// $(".price-holder").append($("#product-price").text());
	// $(".price-holder").addClass("price-description");
};

function bigWindowPrice() {
	$('.cart-price').css('display', 'block');
	$('.description.flex-none').show();
	$('.smallWindowPrice').hide();
	$(".cart-remove").css('margin-top', '10vh');
	// $('.price-holder').css('display','none'); 
	// $('#product-price').css('display','block'); 
	// $(".price-holder").empty();
};


$(function(){
	if(window.matchMedia("(max-width: 800px)").matches) {
		smallWindowPrice();
	}  else {
		bigWindowPrice();
	};

	$(window).on('resize', function(){ 
		if(window.matchMedia("(max-width: 800px)").matches) {
			smallWindowPrice();
		}  else {
			bigWindowPrice();
		}
	});
});		