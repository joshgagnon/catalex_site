$(document).ready(function(){

	if($('.create-blog').length){
		$('.create-blog input#title, .create-blog textarea').on('change keyup', function(){
			$('.create-blog .preview .blog-entry > h4').html($('.create-blog input#title').val())
			$('.create-blog .preview .blog-entry > div').html($('.create-blog textarea').val())
		}).trigger('change');
	}

	if($('.lb-section').length) {
		$('.lb-section .fade-container').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
			if(isInView) {
				$(this).addClass('fade-in').unbind('inview');
			}
		})
	}

});
