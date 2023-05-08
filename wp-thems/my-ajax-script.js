jQuery(document).ready(function($) {

	var offset = 0;
	$('#my-ajax-button').click(function() {
			var category = 'название-категории'; // Замените на нужную вам категорию
			$('.my-loader').show();
			$.ajax({
					url: myAjax.ajaxurl,
					type: 'POST',
					data: {
							action: 'my_ajax_action',
							///category: category
							offset: offset,
					},
					success: function(response) {
							$('#product-container').append(response);
							offset+=1;
							$('.my-loader').hide();
					},
					error: function(xhr, status, error) {
							console.log(xhr.responseText);
					}
			});
	});
});
