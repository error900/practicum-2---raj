/*
    Scroll to Top
*/

$(function(){
	
	$(document).on( 'scroll', function(){
		if ($(window).scrollTop() > 100) {
			$('.scroll-top-wrapper').addClass('show');
		} else {
			$('.scroll-top-wrapper').removeClass('show');
		}
	});
	 
	$('.scroll-top-wrapper').on('click', scrollToTop);

});

	function scrollToTop() {
		verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
		element = $('body');
		offset = element.offset();
		offsetTop = offset.top;
		$('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
	}

/*
    Textarea Counter
*/

$(document).ready(function() {

    var text_max = 1000;
    $('.textarea_feedback').html(text_max + ' characters remaining');

    $('.textarea').keyup(function() {
        var text_length = $('.textarea').val().length;
        var text_remaining = text_max - text_length;

        $('.textarea_feedback').html(text_remaining + ' characters remaining');
    });
	
});

/*
    Delete Confirmation Box
*/

$(document).ready(function() {

	$('.delete-form').submit(function(e) {
		var currentForm = this;
		e.preventDefault();
		bootbox.confirm("Are you sure you want to delete this?", function(result) {
			if (result) {
				currentForm.submit();
			}
		});
	});

});

