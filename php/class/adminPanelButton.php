<?php
/**
 *Класс создает ссылку на админ панель в случае если пользователь имеет
 * требуемый параметр в сессии
 */

class adminPanelButton
{
public static function adminButton(){
    if ($_SESSION['admin'] == true){
       //если выполняется условие, то выводим имя с ссылкой
        ?>
            <a href="<?php $_SERVER["DOCUMENT_ROOT"]?>/php/admin/adminpanel.php">
            <? print_r($_SESSION['user_login']); ?></a>


<?php

    }else{
        //если условие ложно - выводим просто имя
        ?>
        <?php require_once $_SERVER["DOCUMENT_ROOT"] . '/php/admin/changeUserPassword.php' ?>
        <a href="#" id="changeUserPasswordButton">
            <? print_r($_SESSION['user_login']); ?></a>
        <script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/js/user/changeUserPassword.js"></script>


<?php
    }
}
}
?>