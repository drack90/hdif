<?php

require_once "config.php"; //подключаем файл с конфигом

$connection = mysqli_connect(
    $config['db']['server'], //получаем значение из массивов, и вводим их в ф-ункцию согласно шаблону заполненя функции
    $config['db']['username'], //переменная $config, а точнее массив создается в подключаемом файле
    $config['db']['password'],
    $config['db']['db_name']
);

//mysqli_connect('имя сервера', 'имя пользователя', 'пароль', 'название базы данных');

if ($connection == false)
{
    echo 'Не удалось подключиться к базе данных';
    echo mysqli_connect_error();                 //выводиит ошибку mysql
    exit();
}


$driver = 'mysql';
$host = 'localhost';
$db_name = 'hdif';
$db_user = 'root';
$db_password = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
//ERRMODE_EXCEPTION - ошибки будут вызывать исключения и остановку скрипта
//данный режим полезен при отладке т.к. сразу понятно где в программе произошла ошибка


//конструкция try скрипт не просто остановится, а выполнит команду после catch
try{
    $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_password, $options);

}catch (PDOException $e){
    die ("Не могу подключиться к базе данных");
}

?>