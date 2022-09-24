$(function (){
    $("#submit").click(function () {
        var password = $("#password").val();
        var confirmPassword = $("#cpassword").val();
        if (password != confirmPassword) {

            return false;
        }
        return true;
    });
});


