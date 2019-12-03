<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . "/php/auth/check_auth.php";
require $_SERVER["DOCUMENT_ROOT"] . "/php/require/requireplugins.php";
require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php';
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";


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
                <button type="button" class="btn btn-success" data-toggle="modal" style="margin-top: 10px" data-target="#add_user">
                    Добавить
                </button>
                <br>
                <button type="button" class="btn btn-danger" style="margin-top: 10px">Удалить</button>

            </div>
            <div class="col-1"></div>
        </div>



            <!-- Modal -->
            <div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="add_user" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Добавить пользователя</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="addUserForm">
                                <label for="login">Логин сотрудника</label>
                                <textarea class="form-control" id="login" name="login" rows="1"></textarea>
                                <div class="form-group">
                                    <label for="firstName">Фамилия</label>
                                    <textarea class="form-control" id="firstName" name="firstName" rows="1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Имя</label>
                                    <textarea class="form-control" id="lastName" rows="1" name="lastName"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="telephone">Личный Номер</label>
                                    <textarea class="form-control" id="telephone" rows="1" name="telephone" required></textarea>
                                </div>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary add_user" >Добавить пользователя</button>
                        </div>
                    </div>
                </div>
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
    <script src="<?php $_SERVER['DOCUMENT_ROOT'];?> /js/admin/admin.js" crossorigin="anonymous"></script>


