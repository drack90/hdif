<?php session_start(); ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php'; ?>

<?php

$image = new addImage();
$imageName = $image->uploadImage($_FILES['image']);

