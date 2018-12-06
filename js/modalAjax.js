$(function(){
	$('#login').click(function(){
		$.ajax({
			url: 'index.php?action=memberLogin',
			method: 'post',
			data: {
				'id' : $('#productName').data('productid'),
				'date': $.now(),
				'nQuantity': $('#quantity').val()
			},
			success: function(result){
				const quantity = $('.cartNav').find('#cart-product-quantity').text();
				let nItems = parseInt(quantity)+1;
				$('.cartNav').find('#cart-product-quantity').text(nItems);
				$('body').append(result);
				$('.modal-container').css('display', 'block').animate({opacity: 1});
			},
			error: function(){
				console.log('error');
			}
			
		});
		return false;
	})
//	$('#deleteItem').click(function(){
//		$.ajax({
//			url: $(this).data('target'),
//		});
//		$(this).remove();
//		return false;
//	})
});