<?php require $_SERVER['DOCUMENT_ROOT'] . "/php/config/config.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/auth/check_auth.php';?>

<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html">
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

<body>
<main>
</h3>
<div class="row">
        <div class="col-3"></div>
        <div class="col-6">
<br>
            <h3>Добавление новой геоточки: </h3>
            <div class="form-group">
                <form id="addPoint">
                    <label for="name">Название геоточки</label>
                    <textarea class="form-control" id="name" name="name" rows="1"></textarea>
                    <div class="form-group">
                        <label for="geopoint">Координата</label>
                        <textarea class="form-control" id="geopoint" name="geopoint" rows="1"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="comment">Комментарий или описание</label>
                        <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
                    </div>
                    <button class="btn btn-primary" id='searchButton' type="submit">Добавить</button>

                </form>
            </div>
            <div class="results" id="results"></div>
        </div>
</div>

    <script type="text/javascript">
        $('button').on('click', function () {
            $.ajax({
                url: "/php/geopoint/add_point.php",
                type: "POST",
                data: $('form').serialize(),
                dataType: "html",
                success: function (data) {
                    $('#results').html(data);
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


