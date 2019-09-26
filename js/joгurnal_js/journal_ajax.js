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

        $('a').on('click', function () {



                   var li_id = this.id;


            console.log(li_id);

            $.ajax({
                   url: li_id,
                   cache: false,
                   success: function (html) {
                       $('#content_block').html(html);
                   }
               });
        });

            event.preventDefault();






    //сделать обновление раз в 30 минут
});