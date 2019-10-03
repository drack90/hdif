//производит отправку данных на файл addFplProcessor и закрытие модального окна
 $('#addFplInBD').on('click', function () {
     $.ajax({
         url: "/php/fpl/addFpl/addFplProcessor.php",
         type: "POST",
         data: $('#addFplForm').serialize(),
         dataType:"html",
         success: function () {
             alert('запись добавлена');
             $('#addFPLModal').modal('hide'); //закрывает модальное окно
         }
     });
 });
