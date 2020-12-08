function smallWindowPrice() {
	$('.cart-price').css('display', 'none');
	$('.description.flex-none').hide();
	$('.smallWindowPrice').show();
	$(".cart-remove").css('margin-top', '2vh');
};

function bigWindowPrice() {
	$('.cart-price').css('display', 'block');
	$('.description.flex-none').show();
	$('.smallWindowPrice').hide();
	$(".cart-remove").css('margin-top', '3vh');
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