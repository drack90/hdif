//отправляет данные на обработчик из файла findFpl

$('#searchFpl').on('click', function () {
    $.ajax({
        url: "/php/fpl/findFpl/findFplProcessor.php",
        type: "POST",
        data: $('#findFpl').serialize(),
        dataType: "html",
        success: function (data) {
            $('#results').html(data);

        }

    });

    event.preventDefault();

});

//тоже самое что и первное, только на нажатие кнопки enter на клавиатуре

$('html').keydown(function(e){ //отлавливаем нажатие клавиш
    if (e.keyCode == 13) { //если нажали Enter, то true
        $.ajax({
            url: "/php/fpl/findFpl/findFplProcessor.php",
            type: "POST",
            data: $('#findFpl').serialize(),
            dataType: "html",
            success: function (data) {

                $('#results').html(data);

            }

        });
    }
});




        //Обработчик для удаления FPL из БД


$('button.deleteFpl').on('click', function () { //при нажатии на кнопку с классом close
    var buttonValue = { //создается переменная которая хранит значение value кнопки
        'buttonValue': this.value
    };
    var r = confirm('точно удалить?'); //функция confirm производит запрос у порльзователя о удалении данных

    if(r == true) {

        $.ajax({
            data: buttonValue,
            url: "/php/fpl/deleteFpl/deleteFplProcessor.php",
            type: "POST",
            dataType: "html",
            success: function (html) {
               console.log(buttonValue);
                alert(html);
                //после удаления запись, производит повторную загрузку данных из БД
                $.ajax({
                    url: "/php/fpl/findFpl/findFplProcessor.php",
                    type: "POST",
                    data: $('#findFpl').serialize(),
                    dataType: "html",
                    success: function (data) {
                        $('#results').html(data);
                    }
                });
            }
        });
    } else{
        console.log('отмена удаления');
    }
});




//сделать AJAX обработчик для редактирования FPL
$('button.editFpl').on('click', function () {
    var buttonValue = { //создается переменная которая хранит значение value кнопки
        'buttonValue': this.value
    };
    $.ajax({
        url: "/php/fpl/editFpl/editFplForm.php",
        type: "POST",
        data: buttonValue,
        dataType: "html",
        success: function (data) {
            $('#fplmodaledit').html(data);
            $('#editFPLModal').modal('show');
        }
    });

    console.log(buttonValue);


});


//

$('a.page-link').on('click',function () {
    var numberPage = {
        name: 'page',
        value: this.id
    };
    var dataForm = $('#findFpl').serializeArray();
    dataForm.push(numberPage);
    $.ajax({
        data: dataForm,
        url: "/php/fpl/findFpl/findFplProcessor.php",
        type: "POST",
        success: function (html) {
            //location.reload(); //производит перезагрузку страници.
            $("#results").html(html); //загружает в центральный DOM данные из файла.
        }
    });
});

