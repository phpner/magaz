jQuery(document).ready(function($) {
		if($("body div").hasClass("woocommerce-message")){
			var href = window.location.href;
			window.location.href = href;
		}
		/*Carousel start*/
		var car = $(".owl-carousel");
		
		car.on(' translate.owl.carousel',function(property){
			    var current = property.item.index; 

			    $(property.target).find(".owl-item").find(".textbox").removeClass('textIn');

			     $(property.target).find(".owl-item").eq(current).find(".textbox").addClass('textIn');   
   					
		}).owlCarousel(
			{
				autoplay:true,
				autoplayTimeout:2000,
				items:1,
				loop:true,
				animateOut: 'flipOutX',
				smartSpeed:450

			});
		/*Carousel*/

		$('.productRight .product_list_widget').addClass('sliderRight');
		$('.sliderRight').owlCarousel(
			{
				animateOut: 'zoomOutLeft',
			    animateIn: '',
				autoplay:true,
				autoplayTimeout:2000,
				items:1,
				loop:true,
				dots:false,
			});
		
});