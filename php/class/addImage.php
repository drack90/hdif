<?php


class addImage
{

    //в данную функцию требуется передавать переменую содержащую файл с изображением

    function uploadImage($image)
    {

        //забираем информацию о файл PATHINFO_EXTENSION (4) забирает только информацию о формате файла
        $extension = pathinfo($image['image'], PATHINFO_EXTENSION);
        //генерируется уникальное имя + формат файла
        $imageName = uniqid() . "." . $extension;
        //переносим файл из папки temp в папку uploads
        move_uploaded_file($image['tmp_name'],
            $_SERVER['DOCUMENT_ROOT'] . '/img/fpl_image/' . $imageName);

        $_SESSION['imageName'] = $imageName;

        return $imageName;
    }


}