//производит отправку данных на файл addFplProcessor и закрытие модального окна
$('button.add_user').on('click', function () {
    $.ajax({
        url: "/php/admin/addUser.php",
        type: "POST",
        data: $('#addUserForm').serialize(),
        success: function (data) {
            console.log(data);
            $('#add_user').modal('hide'); //закрывает модальное окно
        }
    });
});
