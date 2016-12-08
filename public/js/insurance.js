$('document').ready(function()
{
    var loginForm = $("#loginForm");
    $('#loginForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            email: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The UserID is required and can\'t be empty'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    }
                }
            }
        }
    }).on('success.form.fv', function(e) {
        e.preventDefault();

        submitHandler: submitForm()

    });
    /* validation */

    /* login submit */
    function submitForm()
    {
        var data = loginForm.serialize();
        $.ajax({
            type : 'POST',
            url  : 'login',
            data : data,
                beforeSend: function()
                {
                    console.log(data);
                    Metronic.blockUI({
                        target: '#login_form',
                        animate: true,
                    });

                    window.setTimeout(function() {
                        Metronic.unblockUI('#login_form');
                    }, 2000)

                },
            success :  function(data)
            {
               var test = console.log(data.responseText);
                alert(test);
               /* $("#btn-login").html('<i class="fa fa-refresh fa-spin fa-3x fa-fw margin-bottom"></i> &nbsp; Signing In ...');
                setTimeout(' window.location.href = "home"; ',2000);*/

            },
            error: function(data) {
                console.log(data.responseText);
                var obj = jQuery.parseJSON(data.responseText);

                    $("#error").fadeIn(1000, function(){
                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+obj.error+' !</div>');
                        $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
                    });

            }
        });
        return false;
    }
    /* login submit */
});
