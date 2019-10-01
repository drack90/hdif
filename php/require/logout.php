<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";

//логоут - что происходит: обнуляем сессию, после чего обнуляем куки и задаем им
// старое время жизни(прошедшее) соответствено они самоуничтожутся при следующей проверке
//и производим уничтожение сессии с последующим перекидыванием на главную страницу.


$_SESSION = [];
if (isset($_COOKIE[session_name()] )) {
    setcookie(session_name(), '', time() - 3600, '/');
        }
        session_destroy();

header ('location: ../../index.php');

?>