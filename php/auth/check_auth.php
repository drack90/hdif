<?php
session_start();

if(isset($_SESSION['user_login']) ) { //проверяется существование суперглобального массива с заданным ключом
    if ($_SESSION['user_login'] == false) {
        header('location: php/require/login.php');
    }

}else{
    header('location: php/require/login.php');
}
?>
