//производит отправку данных на файл addFplProcessor и закрытие модального окна
 $('#addFplInBD').on('click', function () {
     $.ajax({
         url: "/php/fpl/addFpl/addFplProcessor.php",
         type: "POST",
         data: $('#addFplForm').serialize(),
         success: function (data) {
             alert(data);
             console.log('kokoko');
             $('#addFPLModal').modal('hide'); //закрывает модальное окно
         }
     });
 });
