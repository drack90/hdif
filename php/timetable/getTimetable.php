<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . "/php/auth/check_auth.php";
require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php';
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";
?>

<?php
//открываем таблицу


$data = new timeTable();
$month = $data->setMonth();
$numberMonth = $data->setNumberMonth($month);
$dataString = $data->getDataString($numberMonth);
$nameAndGradic = $data->getNameAndGrafic();



exit;