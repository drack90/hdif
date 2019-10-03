//отрисовывает страницу поиска в DOM 'content_block' файла index.php

$('#findFplPage').on('click', function () {

    $.ajax({
        url: "php/fpl/findFpl/findFplPage.php",
        cache: false,
        success: function (data) {
            $("#content_block").html(data);

        }
    });
});

