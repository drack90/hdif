$(document).ready(function() {
    let setValue= '';
    //обработчик события нажатия на кнопку.
    $('#editReglament').on('click', function () {
            $('#reglamentBody').summernote(  {height: 400}); //инициализация плагина summernote
            // $('#editReglament').html('Сохранить'); //меняем имя
             $('#editReglament').prop('value', 'true'); //меняем id
             $('#sendEditableReglament').prop('style', 'display: run-in'); //меняем параметр кнопки на "видимый"

        /** назначаем переменной значение кнопки (true)
        требуется для того что бы работала следующая кнопка. В противном
        случае кнопка не отработает нажатие и будет выведенно сообщение о
        необходимости произвести редактирование регламентов*/

            setValue = $('button#editReglament').val();

    });

    //обработчик повторного нажатия на уже измененную кнопку



        $('#sendEditableReglament').on('click', function () {
          //Производим провкерку значения кнопки, и если кнопка переведена в 'true' обрабатываем событие
            if (setValue == "true") {

                var reglamentCode = $('#reglamentBody').summernote('code'); //копируем html код summernote блока
                reglamentCode = ({"reglamentCode": reglamentCode}); //формируем в массив для корректной обработки скриптом
                $('#reglamentBody').summernote('destroy'); //убираем инициализацию summernote

                //выполняем AJAX запрос.
                $.ajax({
                    url: "/php/reglaments/editReglamentsController.php",
                    type: "POST",
                    data: reglamentCode,
                    success: function (data) {
                        alert(data);
                    }
                });

                $('#editReglament').prop('value', false); //меняем value кнопки обратно
                $('#sendEditableReglament').prop('style', 'display: none'); //прячем кнопку от глаз
                reglamentCode = null; //обнуляем значение переменной (в случае сбоя, что бы всё равно нельзя было отправить данные)
                setValue =  $('#editReglament').val(); //назначаем переменной обновленое значение кнопки.


        }else{
                alert('Сперва требуется редактировать регламенты');
            }
    });
});

