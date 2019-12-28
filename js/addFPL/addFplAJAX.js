var files;
let fpl;
// Вешаем функцию на событие
// Получим данные файлов и добавим их в переменную


$('input[type=file]').change(function () {
    files = this.files;
});

//производит отправку данных на файл addFplProcessor и закрытие модального окна
$('#addFplInBD').on('click', function () {




// Создадим данные формы и добавим в них данные файлов из files
//РАБОТАЕТ -> файл передается, но как передать ещё данные формы?!
    if (files != '') {

        data = new FormData();

        $.each(files, function (key, value) {
            data.append('image', value);
        });


        $.ajax({
            url: "/php/fpl/addFpl/addFplController.php",
            type: "POST",
            processData: false,
            contentType: false, //когда делаю так - перестаёт работать
            data: data,
            success: function (data) {
                //$('#addFPLModal').modal('hide'); //закрывает модальное окно
            }

        });
    }
    $.ajax({
        url: "/php/fpl/addFpl/addFplController.php",
        type: "POST",
        data: $('#addFplForm').serialize(),
        success: function (data) {
            alert(data);
            $('#addFPLModal').modal('hide'); //закрывает модальное окно
        }
    });
});
