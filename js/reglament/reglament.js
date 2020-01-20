$(document).ready(function() {
    //обработчик события нажатия на кнопку.
    $('#editReglament').on('click', function () {
            $('#reglamentBody').summernote(  {height: 400}); //инициализация плагина summernote
            // $('#editReglament').html('Сохранить'); //меняем имя
             $('#editReglament').prop('value', 'true'); //меняем id
        var setValue = {
            'buttonValue': this.value
        };

        console.log(setValue);
    });

    //обработчик повторного нажатия на уже измененную кнопку
    $('#sendEditableReglament').on('click',function () {
        if ($('#editReglament'.value == 'true')) {
            var reglamentCode = $('#reglamentBody').summernote('code'); //копируем html код summernote блока
            reglamentCode = ({"reglamentCode": reglamentCode});
            $('#reglamentBody').summernote('destroy');


            $.ajax({
                url: "/php/reglaments/editReglamentsController.php",
                type: "POST",
                data: reglamentCode,
                success: function (data) {

                    alert(data);
                }
            });
            // $('#sendEditableReglament').html('Редактировать'); //возвращаем имя
             $('#editReglament').prop('value', false); //возвращаем id
            reglamentCode = null;
            setValue = {
                'buttonValue': $('#editReglament').value
            };
            console.log(setValue);
        }
    });

});

//сделать переключатель через переменную. Т.е. при нажатии на кнопку переменная получает значение тру, после нажатия на вторую
//кнопку переменая получает значение false и это значение так же присваивается кнопке