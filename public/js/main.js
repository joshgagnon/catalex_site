$(document).ready(function(){

	if($('.create-blog').length){
		$('.create-blog input#title, .create-blog textarea').on('change keyup', function(){
			$('.create-blog .preview .blog-entry > h4').html($('.create-blog input#title').val())
			$('.create-blog .preview .blog-entry > div').html($('.create-blog textarea').val())
		}).trigger('change');
	}

});