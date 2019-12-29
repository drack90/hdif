<?php session_start(); ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php'; ?>

<?php

//вырезаем имя изображения и переносим его в папку
//забираем информацию о файл PATHINFO_EXTENSION (4) забирает только информацию о формате файла

//
//    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
//    //генерируется уникальное имя + формат файла
//    $imageName =uniqid().".".$extension;
//    //переносим файл из папки temp в папку uploads
//    move_uploaded_file($_FILES['image']['tmp_name'],
//            $_SERVER['DOCUMENT_ROOT'] . '/img/fpl_image/' . $imageName);
//    var_dump($_FILES);
//
//exit;

$addfpl = new postFpl();

$addfpl->addFpl();
