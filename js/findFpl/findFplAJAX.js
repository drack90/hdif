//отправляет данные на обработчик из файла findFpl
$('#searchFpl').on('click', function () {
    $.ajax({
        url: "/php/fpl/findFpl/findFplProcessor.php",
        type: "POST",
        data: $('#findFpl').serialize(),
        //({direction: $('#send_generator_fpl').val(),
        // data: $('#transferData').val()}),
        dataType: "html",
        success: function (data) {
            $('#results').html(data);
        }
    });
    event.preventDefault();

});