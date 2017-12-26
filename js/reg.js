$(document).ready(function(){
    $("#submit").click(function(e){
        e.preventDefault();

        var email = $("#email").val();
        var firstname = $("#firstname").val();
        var lastname = $("#lastname").val();
        var password = $("#password").val();

        var valid = true;

        if(firstname == "" || !isnamevalid(firstname)){
            valid = false;
            $("#errorfirstname").html("Firstname can't be empty and have to be between 7 and 15 characters!");
        }else{
            $("#errorfirstname").html("");
        }

        if(lastname == "" || !isnamevalid(lastname)){
            valid = false;
            $("#errorlastname").html("Lastname can't be empty and have to be between 7 and 15 characters!!");
        }else{
            $("#errorlastname").html("");
        }

        if(email == "" || !isemailvalid(email)){
            valid = false;
            $("#erroremail").html("Email can't be empty and have to be valid!");
        }else{
            $("#erroremail").html("");
        }

        if(password == "" || !ispasswordvalid(password)){
            valid = false;
            $("#errorpassword").html("Password can't be empty and have to be between 7and 15 characters and must contain at least one lower, one uppercase and one digit!");
        }else{
            $("#errorpassword").html("");
        }

        if(valid == true){
            var form_data = {
                firstname: firstname,
                laststname: lastname,
                email: email,
                password: password
            };

            $.ajax({
                url: "../scripts/insert.php",
                type: "POST",
                data: form_data,
                success: function (data) {

                }
            });
        }
    });
});

function isnamevalid(name){
    return /[A-Z]+/i.test(name) && /[a-z]+/.test(name) && /\S{7,15}/.test(name);
}

function isemailvalid(email){
    var pattern = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:s@"]+)*)|(".+"))@((\[[0-9]{1.3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return pattern.test(email);
}

function ispasswordvalid(password){
    return /[A-Z]+/.test(password) && /[a-z]+/.test(password) && /[\d\W]/.test(password) && /\S{7,15}/.test(password);
}