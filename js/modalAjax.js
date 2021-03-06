$(function(){
	$('.services-name').click(function(e){
		e.preventDefault();
		$.ajax({
			url: $(this).attr('href'),
			success: function(result) {
				$('.content').append(result);
				setTimeout(() => { $('.modal-container').css('opacity', 1) }, 50);
				setTimeout(() => { $('.modal-holder>*').css({'transform': 'translateX(-50%) translateY(-50%) scale(1)'})}, 200);
				$('.modal-holder>*').append('<div id="modal-close"><i class="far fa-window-close"></i></div>').on('click', ()=>{$('.modal-container').remove()});
				makeContainBg();
			},
			error: function(err) {
				console.log('AJAX error:'+err);
			}
		});
		return false;
	})
	$('#contactForm form').submit(function(e){
		e.preventDefault();
		if($(this).find('.empty').length != 0){
			return;
		}
		$.ajax({
			url: $(this).attr('action'),
			success: function(result) {
				$('.content').append(result);
				setTimeout(() => { $('.modal-container').css('opacity', 1) }, 50);
				setTimeout(() => { $('.modal-holder>*').css({'transform': 'translateX(-50%) translateY(-50%) scale(1)'})}, 200);
				$('#contactForm form').trigger('reset');
			},
			error: function(err) {
				console.log('AJAX error:'+err);
			}
		});
		return false;
	})
});