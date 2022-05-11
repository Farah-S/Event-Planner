$(document).ready(function(){
    
    (function($) {
        "use strict";

    $.validator.addMethod('filesize', function(value, element, param) {
    // param = size (in bytes) 
    // element = element to validate (<input>)
    // value = value of the element (file name)
    return this.optional(element) || (element.files[0].size <= param) 
    });
    
    /* jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-"); */

    var whitelist = ['png','jpe?g','gif'];
    var id= $("input[name=id]").val();
    var url ='{{ route("customEvents.store", ":id") }}';
    url = url.replace(':id', id);
    var route="{{ route('customEvents.store')}}"+ '/' + id;

    // validate 
    $(function() {
        /* var exten = $("#image").val().split('.').pop().toLowerCase();
        if (jQuery.inArray(exten, ['jpg', 'jpeg','png']) == -1) {
            alert("Invalid File");
        } */
        $('#customEventForm').validate({
            rules: {
                message: {
                    required: true,
                    minlength: 50
                },
                budget: {
                    required: true
                },
                cancel: {
                    required: true
                },
                im:{
                    required: true,
                    extension: "jpg,jpeg",
                    //uploadFile:true,
                    filesize: 1048576*2
                }
            },
            messages: {
                message: {
                    required: "Details are required to send a request",
                    minlength: "You need to write more details"
                },
                budget: {
                    required: "Available budget is required"
                },
                cancel: {
                    required: "You must read the cancel policy before submitting"
                },
                im: {
                    extension: "Incorrect image type. You must upload jpeg/jpg/png",
                    filesize: "image size it too big"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"/events/customevent/2",
                    success: function() {
                        $('#customEventForm :input').attr('disabled', 'disabled');
                        $('#customEventForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#customEventForm').fadeTo( "slow", 1, function() {
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