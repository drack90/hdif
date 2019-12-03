<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . "/php/auth/check_auth.php";
require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php';
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";
require $_SERVER["DOCUMENT_ROOT"] . "/php/require/requireplugins.php";

//после подключения всех страниц производим проверку наличия требуемых прав у пользователя
if ($_SESSION['admin'] == true){ ?>


    <!doctype html>
    <html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<head>
<?php    require $_SERVER["DOCUMENT_ROOT"] . "/php/require/header.php";
echo '<br/><br/>';
?>
</head>
    <main>
        <div class="text-center h2 text-primary "><b>Список пользователей</b></div>
        <div class="row">

            <div class="col-1"></div>
            <div class="col-10">

                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Логин</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Телефон</th>
                        <th scope="col"><i class="fas fa-check"></i></th>
                    </tr>
                    </thead>
                    <tbody class="table-striped">
                        <?php //динамически выводим данные пользователей.
                        new getUserTable();
                        getUserTable::getDataUserInDb();
                        ?>
                    </tbody>
                </table>

            </div>
            <div class="col-1"></div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10 text-right">
                <button type="button" class="btn btn-success" style="margin-top: 10px">Добавить</button>
                <br>
                <button type="button" class="btn btn-danger" style="margin-top: 10px">Удалить</button>

            </div>
            <div class="col-1"></div>
        </div>

    </main>
    <?php






}else{

    ?>

    <div id="notAuth">
        <div class="text-center h1">Нет доступа, вернитесь на <a href="<?php $_SERVER['DOCUMENT_ROOT']?>/index.php">главную страницу </a></div>
    </div>

<?php
}



?>
    <script src="https://kit.fontawesome.com/ca023ea9fc.js" crossorigin="anonymous"></script>

