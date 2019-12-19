   $(document).ready(function() {


    $('#accessButtonJournal').on('click', function () {
        //данная строка объеденяет обе формы в одну переменную после чего сериализует перед отправкой через AJAX
        var dataString = $("#authorID, #textPost, #priorityLevel").serialize();
        $.ajax({
            url: "/php/journal/addPostInDB.php",
            type: "POST",
            processData: false,
            data: dataString,

            dataType: "html",
            success: function (html) {
                $('#addJournalPostModal').modal('hide'); //происходит закрытие модального окна
                alert('Запись добавлена'); //всплывающее окно о том что запись добавлена
                //производит обновление блока с записями
                $.ajax({
                    url: "php/journal/view_journal.php",
                    cache: false,
                    success: function (html) {
                        $("#journal_content").html(html);
                        $('#addJournalPostModal').modal('hide');
                    }
                });
            }
        });

    });
        //при нажатии кнопки "читать далее" произвдет загрузку страницы в основной блок
        $('#readMoreJournal').on('click', function () {
            $.ajax({
                url: "/php/journal/view_all_journal.php",
                cache: false,
                success: function (html) {
                    $('#content_block').html(html);
                }
            });
        });

    //скрипт который производит отправку ID строки котрую пользователь решил удалить
       $('button.close').on('click', function () { //при нажатии на кнопку с классом close
           var buttonValue = { //создается переменная которая хранит значение value кнопки
               'buttonValue': this.value
           };
           var r = confirm('точно удалить?'); //функция confirm производит запрос у порльзователя о удалении данных

               if(r == true) {

                   $.ajax({
                       data: buttonValue,
                       url: "/php/journal/deletePostInJournal.php",
                       type: "POST",
                       dataType: "html",
                       success: function (html) {
                           //location.reload(); //производит перезагрузку страници.
                           $("#content_block").load("/php/journal/view_all_journal.php"); //загружает в центральный DOM данные из файла.
                           alert(html);
                       }
                   });
               } else{
                   console.log('отмена удаления');
               }

       });

    //скрипт который производит get ajax запрос для пагинации

$('a.page-link').on('click',function () {
    var numberPage = {
        'page': this.id
    };

    $.ajax({
        data: numberPage,
        url: "/php/journal/view_all_journal.php",
        type: "GET",
        success: function (html) {
            //location.reload(); //производит перезагрузку страници.
            $("#content_block").html(html); //загружает в центральный DOM данные из файла.
        }
    });
});






    //сделать обновление раз в 30 минут
});