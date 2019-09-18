<?php session_start(); ?>
<?php

$config = array(
    'title' => 'How do I fly',
    'db' => array(
        'server' => 'localhost',
        'username' => 'cb39858_hdif',
        'password' => 'JinsUd6ottyu',
        'db_name' => 'cb39858_hdif'
    )
);

require "db.php"; //подключаемся файл покдлючения к базе,
// благодаря чему, при каждой подгрузке конфига на страницу
// будет присходить подключение так же файла с базой.
?>