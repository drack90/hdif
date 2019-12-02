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

        <? print_r($_SESSION['user_login']); ?>
<?php
    }
}
}
?>