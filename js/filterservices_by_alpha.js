$(function(){
	$('.alpha-filter').on('click', function(e){
		e.preventDefault();
		let letter = $(e.target).data('searchletter');
		let listId = '#companylist-'+letter;
		$('ul').hide();
		$(listId).show();
	});
});