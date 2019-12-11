<?php
require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php';
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";
?>

 <div id="userTable">
     <form id="userTable">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Логин</th>
                            <th scope="col">Фамилия</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Удалить</th>
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
            </div>
    </form>
<div id="script">
    <script src="https://kit.fontawesome.com/ca023ea9fc.js" crossorigin="anonymous"></script>
    <script src="<?php $_SERVER['DOCUMENT_ROOT'];?> /js/admin/admin.js" crossorigin="anonymous"></script>
</div>