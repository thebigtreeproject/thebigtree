$(function(){
	$('form').submit(function() {
		let missing = 0;
		$('.required').each(function(){
			const field = $(this).next();
			if(field.val()){
				field.css('background', '#fff');
			} else {
				field.css('background', 'rgb( 255, 0, 0 , 0.3)');
				missing = missing +1;
			}
			console.log(missing);
		});
		if(missing===0){
			event.preventDefault;
			return true;
		} else {
			return false;
		}
	});
	$('#autoFill').change(function(){
		if($(this).prop("checked")){
		   $('#shippingfirstName').val($('#billingfirstName').val());
		   $('#shippinglastname').val($('#billinglastname').val());
		   $('#shippingstreetAdress').val($('#billingstreetAdress').val());
		   $('#shippingzipCode').val($('#billingzipCode').val());
		}			 
	});
});