$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#addPackageForm').validate({
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
                    required: "Details are required create a package",
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
                    url:"contact_process.php",
                    success: function() {
                        $('#addPackageForm :input').attr('disabled', 'disabled');
                        $('#addPackageForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#addPackageForm').fadeTo( "slow", 1, function() {
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