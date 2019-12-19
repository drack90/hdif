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
                $('#accessButtonJournal').off('click');
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
       $('button.deletePost').on('click', function () { //при нажатии на кнопку с классом close
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
                           $('button.deletePost').off('click');
                           location.reload(); //производит перезагрузку страници.
                           //$("#journal_content").load("/php/journal/view_journal.php");
                           alert(html);
                       }
                   });
               } else{
                   console.log('отмена удаления');
               }

       });







    //сделать обновление раз в 30 минут
});