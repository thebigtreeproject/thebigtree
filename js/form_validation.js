$(function(){
	$('form').submit(function(event) {
		let missing = 0;
		$(event.target).find('.required').each(function(){
			const field = $(this).next();
			if(field.is("input") || field.is("textarea")){
				if(field.val()){
					field.removeClass('empty');
				} else {
					field.addClass('empty');
					missing++;
				}
			}
			else if(field.is("div")){
				let checked = 0;
				field.children().each( function() {
					if(!$(this).is("input:checked")){
						field.addClass('empty');
					}
					else{
						checked++;
					}
				});
				if(checked === 0){
					missing++;
				}
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
});