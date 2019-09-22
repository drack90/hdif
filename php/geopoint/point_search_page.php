<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/auth/check_auth.php";?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>



<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/requireplugins.php';?> <!-- подключаем все плагины bootstrap and JS-->

    <style>
        .collapse.in { display: inline !important; }
    </style>

    <title><?php print_r ($config['tittle']); ?></title>
</head>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/header.php'; ?> <!-- Подключаем header -->

<main>
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
                        <div class="col-4"></div>
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
        $('button').on('click', function () {
            $.ajax({
                url: "/php/geopoint/search_point.php",
                type: "POST",
                data: $('form').serialize(),
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
