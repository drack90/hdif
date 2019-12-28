<?php

$config = array(
    'title' => 'How do I fly',
    'db' => array(
        'server' => 'localhost',
        'username' => 'root',
        'password' => '',
        'db_name' => 'default_fpl'
    )
);

require "db.php"; //подключаемся файл покдлючения к базе,
// благодаря чему, при каждой подгрузке конфига на страницу
// будет присходить подключение так же файла с базой.
?>