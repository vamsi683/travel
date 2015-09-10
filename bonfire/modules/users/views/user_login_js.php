$('#login_frm').validate({

     rules: {
        login: {
          minlength: 3,
          maxlength: 60,
          required: true
        },
        password: {
          required: true
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



// trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
if (!String.prototype.trim) {
    (function() {
        // Make sure we trim BOM and NBSP
        var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
        String.prototype.trim = function() {
            return this.replace(rtrim, '');
        };
    })();
}

[].slice.call( document.querySelectorAll( 'input.input__field' ) ).forEach( function( inputEl ) {
    // in case the input is already filled..
    if( inputEl.value.trim() !== '' ) {
        classie.add( inputEl.parentNode, 'input--filled' );
    }

    // events:
    inputEl.addEventListener( 'focus', onInputFocus );
    inputEl.addEventListener( 'blur', onInputBlur );
} );

function onInputFocus( ev ) {
    classie.add( ev.target.parentNode, 'input--filled' );
}

function onInputBlur( ev ) {
    if( ev.target.value.trim() === '' ) {
        classie.remove( ev.target.parentNode, 'input--filled' );
    }
}