$(document).ready(function () {
    $('#changeUserPassword').appendTo("body");
    $('#changeUserPasswordButton').on('click', function () {
        $('#changeUserPassword').modal('show');
    });

    $('#saveUserPassword').on('click', function () {
        $.ajax({
            url: "/php/admin/changeUserPasswordController.php",
            type: "POST",
            data: $('#changePassword').serialize(),
            dataType: "html",
            success: function (data) {
                alert(data);

            }

        });


    });