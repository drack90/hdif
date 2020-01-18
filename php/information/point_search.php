<?php require $_SERVER["DOCUMENT_ROOT"]."/php/require/check_auth.php";?>
<?php require $_SERVER["DOCUMENT_ROOT"]."/php/config/config.php"; ?>
<?php require $_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php"; ?>



<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Bootstrap jQuery-->
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <!--Bootstrap AJAX?-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif:400,400i,600i&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?$_SERVER["DOCUMENT_ROOT"];?>/css/blog.css" rel="stylesheet">
    <link href="<?$_SERVER["DOCUMENT_ROOT"];?>/css/fpl.css" rel="stylesheet">
    <link href="<?$_SERVER["DOCUMENT_ROOT"];?>/css/summernote-bs4.css" rel="stylesheet">
    <script src="<?$_SERVER["DOCUMENT_ROOT"];?>/js/summernote-bs4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>

    <style>
        .collapse.in { display: inline !important; }
    </style>

    <title><?php print_r ($config['tittle']); ?></title>
</head>

<?php require $_SERVER["DOCUMENT_ROOT"]."/php/require/header.php"; ?> <!-- подключаем header-->

<body>
<main>
    <?php //рещил пока оставить, в случае если проверка будет работать плохо - поменяем
    if(isset($_SESSION['user_login']) ){ //проверяется существование суперглобального массива с заданным ключом
        if($_SESSION['user_login'] == false) {

            //если есть массив - проверяется его содержание соответствует ли его содержание требуеому параметру
        }else{
            ;?>

            <br>
            <form id="searchForm" > <!--action="/php/workinformation/search_point.php" method="POST"-->
                <br>
                <div class="form-group my-2 my-md-0">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-3">
                            <input class="form-control" id="geopointName" name="geopointName" placeholder="поиск геоточки">
                        </div>
                        <div class="col-3">
                            <button class="btn btn-primary" id='searchButton' type="submit">Поиск</button>
                        </div>
                    </div>
                </div>
            </form>
            <div id="add_fpl_day_plan" name="add_fpl_day_plan">
                <br>

            </div>
            <div class="row">
                <div class="col-3"></div>
                <div id="searchResult" class="col-6"></div> <!--Блок в который попадет ответ на AJAX pfghjc -->
            </div>

        <?php }?> <!--else проверка авторизации -->
    <?php }else{ ?> <!-- проверка существования массива -->

        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 center_block" >

                    <b> Перейдите на страницу авторизации</b>
                </div>
            </div>
        </div>

    <? } ?>

    <script type="text/javascript">


        $('#searchButton').on('click', function () {
            $.ajax({
                url: "/php/workinformation/search_point.php",
                type: "POST",
                data: $('#searchForm').serialize(),
                //({direction: $('#send_generator_fpl').val(),
                // data: $('#transferData').val()}),
                dataType: "html",
                success: function (data) {
                    $('#searchResult').html(data);
                }
            });
            event.preventDefault();

        });



    </script>
</main>
</body>

<footer>
</footer>

</html>
