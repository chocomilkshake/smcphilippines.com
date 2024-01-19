 // Toggle password visibility
 $(document).ready(function () {
    $("#password-toggle").on('click', function () {
        var passwordInput = $("#password");

        if (passwordInput.attr('type') === 'password') {
            passwordInput.attr('type', 'text');
            $("#password-toggle").removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            passwordInput.attr('type', 'password');
            $("#password-toggle").removeClass('fa-eye-slash').addClass('fa-eye');
        }
    });
});