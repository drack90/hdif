//производит отправку данных на файл addFplProcessor и закрытие модального окна


$('#addUserButton').on('click', function () {
    $.ajax({
        url: "/php/admin/addUser.php",
        type: "POST",
        data: $('#addUserForm').serialize(),
        success: function (data) {
                switch (data){
                    case 'Пользователь добавлен':
                        alert(data);
                        $('#add_user').modal('hide'); //закрывает модальное окно
                        $('#addUserForm')[0].reset();
                        $('#userTable').load('/php/admin/userTable.php');

                        break;
                    case 'Пользователь с таким Логином уже существует':
                        alert(data);
                        break;
                    case 'пароль должен содержать больше 4-х символов':
                        alert(data);
                        break;
                    case 'Пароль и проверка пароля - не совпадают':
                        alert(data);
                        break;
                    default:
                        alert(data);
                        break;
                }
        }
    });
});



