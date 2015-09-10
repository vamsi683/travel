$('#rgstr_frm').validate({

     rules: {
        display_name: {
          minlength: 3,
          maxlength: 60,
          required: true
        },
        email:
        {
            minlength: 3,
            maxlength: 60,
            required: true,
            email: true,
            remote: {
                    url: "<?php echo base_url()."users/check_exist_email";?>",
                    type: "get",
                    cache: false,
                    dataType: "json",                    
                    data: {
                        email: function() { return $("#email").val(); }
                    },
                }                
        },
        username: {
          minlength: 3,
          maxlength: 20,
          required: true,
          remote: {
                    url: "<?php echo base_url()."users/check_exist_username";?>",
                    type: "get",
                    cache: false,
                    dataType: "json",                    
                    data: {
                        username: function() { return $("#username").val(); }
                    },
            }                 
        },
        password: {
            minlength: 3,
            maxlength: 30,
            required: true
        },
        pass_confirm: {
            minlength: 3,
            maxlength: 30,
            required: true,
            equalTo: "#password"
        }
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('error');
    },
    errorElement: 'span',
    errorClass: 'error_custom',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }

});



$('#frgtpwd_frm').validate({

     rules: {
        email:
        {
            minlength: 3,
            maxlength: 30,
            required: true,
            email: true,
        }
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('error');
    },
    errorElement: 'span',
    errorClass: 'error_custom',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }

});


$('#rrpassword_frm').validate({

     rules: {
        password: {
            minlength: 3,
            maxlength: 30,
            required: true
        },
        pass_confirm: {
            minlength: 3,
            maxlength: 30,
            required: true,
            equalTo: "#password"
        }
    
    },
    highlight: function(element) {
        $(element).closest('.form-group').addClass('error');
    },
    unhighlight: function(element) {
        $(element).closest('.form-group').removeClass('error');
    },
    errorElement: 'span',
    errorClass: 'error_custom',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }

});


