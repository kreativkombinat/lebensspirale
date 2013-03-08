
jQuery(document).ready(function($){
	$('form#contact-form').submit(function() {
		$('form#contact-form .contact-error').remove();
		var hasError = false;
		$('form#contact-form .requiredField').each(function() {
			if(jQuery.trim($(this).val()) == '') {
            	var labelText = $(this).prev('label').text();
            	$(this).parent().append('<span class="contact-error">Erforderlich</span>');
            	$(this).addClass('inputError');
            	hasError = true;
            } else if($(this).hasClass('email')) {
            	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            	if(!emailReg.test(jQuery.trim($(this).val()))) {
            		var labelText = $(this).prev('label').text();
            		$(this).parent().append('<span class="contact-error">Falsch</span>');
            		$(this).addClass('inputError');
            		hasError = true;
            	}
            }
		});
		if(!hasError) {
			var formInput = $(this).serialize();
			$.post($(this).attr('action'),formInput, function(data){
				$("form#contact-form").before('<div class="contact-success"><strong>Danke!</strong><p>Wir werden uns umgehend mit Ihrem Anliegen befassen und uns gegebenenfalls bei Ihnen melden.</p> <p>Ihr KREATIVKOMBINAT</p></div>');
			});
		}


		return false;

	});
});