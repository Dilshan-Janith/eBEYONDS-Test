$(document).ready(function () {
    $('#form-submit').on('click', function (e) {
        e.preventDefault();
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#email').val();

        if (first_name == '') {
            $('#first_name_error').css('display', 'block');
        } else {
            $('#first_name_error').css('display', 'none');

        }
        if (last_name == '') {

            $('#last_name_error').css('display', 'block');
        } else {
            $('#last_name_error').css('display', 'none');

        }
        if (email == '') {
            $('#email_error').css('display', 'block');
        } else {
            $('#email_error').css('display', 'none');

        }
    });
});
