$(document).ready(function(){

    jQuery('.contact-form').validate({
        rules: {
            firstname: "required",
            lastname: "required",
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                digits: true
            },
            message: "required"
        },
        messages: {
            firstname: "Please enter first name",
            lastname: "Please enter last name",
            email: {
                required: "Please enter email address",
                email: "Invalid Email"
            },
            phone: {
                required: "Please enter Contact Nummber",
                digits: "Only Digits are allowed"
            },
            message: "Please enter message"
        }
    });
    window.setInterval(function(){
      $('.alert-msg').hide();
    }, 20000);
});
$(document).on('click', '.submit_btn', function(){
    if($('.contact-form').valid()){
        var formData = $('.contact-form').serialize();
        console.log('formData');
        console.log(formData);
        $.ajax({
            type: 'post',
            url: 'mail.php',
            data: formData,
            beforeSend: function(){
                $('.loader-full').show();
            },
            success:function (res) {
                $('.alert-msg').html(res);
                $('.alert-msg').show();
                $('.contact-form').trigger('reset');
                $('.loader-full').hide();
            }
        });
    }
});

(function ($) {
    'use strict';

    var form = $('.contact__form'),
        message = $('.contact__msg'),
        form_data;

    // Success function
    function done_func(response) {
        message.fadeIn()
        message.html(response);
        setTimeout(function () {
            message.fadeOut();
        }, 5000);
        
        form.find('input:not([type="submit"]), textarea').val('');
    }

    // fail function
    function fail_func(data) {
        message.fadeIn()
        message.html(data.responseText);
        setTimeout(function () {
            message.fadeOut(5000);
        }, 5000);
    }
    
    form.submit(function (e) {
        e.preventDefault();
        form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form_data
        })
        .done(done_func)
        .fail(fail_func);
    });
})(jQuery);