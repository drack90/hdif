    $('button#editFplInBD').on('click', function () { //при нажатии на кнопку с классом close
        var buttonValue = { //создается переменная которая хранит значение value кнопки
            'buttonValue': this.value
        };
        var datastr = $('#editFplForm').serialize();
        var databd = datastr + buttonValue;

        $.ajax({
            url: "/php/fpl/editFpl/editFplProcessor.php",
            type: "POST",
            data: datastr,
            dataType: "html",
            success: function (data) {
                console.log(data);
                alert(data);

                $('#editFPLModal').modal('hide');
                // $('#editFPLModal').modal('dispose');

            }
        });


        //     var buttonValue = { //создается переменная которая хранит значение value кнопки
        //         'buttonValue': this.value
        //     };
        //     var r = confirm('точно удалить?'); //функция confirm производит запрос у порльзователя о удалении данных
        //
        //     if(r == true) {
        //
        //         $.ajax({
        //             data: buttonValue,
        //             url: "/php/fpl/deleteFpl/deleteFplProcessor.php",
        //             type: "POST",
        //             dataType: "html",
        //             success: function (html) {
        //                 console.log(buttonValue);
        //                 alert(html);
        //                 //после удаления запись, производит повторную загрузку данных из БД
        //                 $.ajax({
        //                     url: "/php/fpl/findFpl/findFplProcessor.php",
        //                     type: "POST",
        //                     data: $('#findFpl').serialize(),
        //                     dataType: "html",
        //                     success: function (data) {
        //                         $('#results').html(data);
        //                     }
        //                 });
        //             }
        //         });
        //     } else{
        //         console.log('отмена удаления');
        //     }
        // });


    });
