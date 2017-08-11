$(document).ready(function() {
    $("#seller_register").validate({
        rules: {
            name: "required",
            seller_id: "required",
            api_key: "required",
            password: {
                required: true,
                minlength:6,
                maxlength:25    
            }, 
            confirm_password : {
                required: true,
                minlength : 6,
                maxlength : 25
                //equalTo : "#password"
            },
            email: {
                required: true,
                email: true
            }/*,
            mobile: {
                required: true,
                number: true,
                minlength:10,
                maxlength:10
            }*/
        },
        messages: {
           /* name: "Please enter your name",
            email: "Please enter a valid email address",
            mobile: {
                required: "Please enter your mobile number",
                minlength: "Your username must consist of at least 10 characters"
            } */
        }
    });

$("#seller_login").validate({
        rules: {
            password: {
                required: true,
                minlength:6,
                maxlength:25    
            },
            user_name: {
                required: true,
                email: true
            }
        },
        messages: {
           /* name: "Please enter your name",
            email: "Please enter a valid email address",
            mobile: {
                required: "Please enter your mobile number",
                minlength: "Your username must consist of at least 10 characters"
            } */
        }
    });

});