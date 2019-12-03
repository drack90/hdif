<?php
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";

$login = $_POST['login'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$telephone = $_POST['telephone'];
$admin = '0'; //даже при том что в MySQL булевое значение, все равно параметр false - не воспринимает.

$sql_add_user = 'INSERT INTO users(login, firstName, lastName, telephone, admin) 
                           VALUES (:login, :firstName, :lastName, :telephone, :admin)';
$params = [ ':login' =>$login ,
    ':firstName' => $firstName,
    ':lastName' => $lastName,
    ':telephone' => $telephone,
    ':admin' => $admin
];

$stmt = $pdo->prepare($sql_add_user);
$stmt->execute($params);

echo "Пользователь добавлен";
?>