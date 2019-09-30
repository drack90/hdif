<?php
//Производит автозакгрузку классов

spl_autoload_register(function ($class) {
    $dir = $_SERVER['DOCUMENT_ROOT'] . '/php/class/';
    $class = str_replace('\\', '/', $class);
    require_once($dir . $class . '.php');
});

?>