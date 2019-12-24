$.fn.editable.defaults.mode = 'popup';

$(document).ready(function() {
    $('.people-editable').editable({
        url: '/php/information/edit_telephone.php',
        //     $.ajax({
        //     data: $('.people-editable').serialize(),
        //     url: "/php/information/edit_telephone.php",
        //     type: "post",
        //     success: function (html) {
        //         //location.reload(); //производит перезагрузку страници.
        //         //$("#content_block").html(html); //загружает в центральный DOM данные из файла.
        //         console.log(data);
        //     }
        // });
    });
});