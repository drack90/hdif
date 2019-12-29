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

//при нажатии на кркестик с напротив имени пользователя
        $("button.deleteUser").on('click', function(){
           var userID = { //создается переменная которая хранит значение value кнопки
               'userID': this.value
           };
            var requestDeleteUser = confirm('точно удалить?'); //функция confirm производит запрос у порльзователя о удалении данных

            if(requestDeleteUser == true) {

                $.ajax({
                    url: "/php/admin/deleteUser.php",
                    type: "POST",
                    data: userID,
                    success: function (data) {
                        console.log(data);
                        userID = null;
                        //перезагружаем таблицу после изменений
                        $('#userTable').load('/php/admin/userTable.php');
                        $('#script').load('/ #script');

                    }
                });
                }else{
                console.log('отмена удаления');
            }
        });



