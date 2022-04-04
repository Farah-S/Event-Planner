$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#editPackageForm').validate({
            rules: {
                message: {
                    required: true,
                    minlength: 20
                },
                price: {
                    required: true
                },
                season: {
                    required: true
                }
            },
            messages: {
                message: {
                    required: "Details are required edit this package",
                    minlength: "You need to write more details"
                },
                price: {
                    price: "Price is required"
                },
                season: {
                    season: "Season is required"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"#",
                    success: function() {
                        $('#editPackageForm :input').attr('disabled', 'disabled');
                        $('#editPackageForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#editPackageForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})