//при нажатии на кркестик с напротив имени пользователя
$("button.deleteUser").on('click', function () {
    var userID = { //создается переменная которая хранит значение value кнопки
        'userID': this.value
    };
    var requestDeleteUser = confirm('точно удалить?'); //функция confirm производит запрос у порльзователя о удалении данных

    if (requestDeleteUser == true) {

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
    } else {
        console.log('отмена удаления');
    }
});

