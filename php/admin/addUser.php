<?php
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";

$login = $_POST['login'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$telephone = $_POST['telephone'];
$password = $_POST['password'];
$verifyPassword = $_POST['verifyPassword'];

//проверяем совпадение строки пароля и "повторите пароль"
if($password != $verifyPassword){
    echo 'Пароль и проверка пароля - не совпадают';
    exit;
}

$password = htmlspecialchars($password);
$password = trim($password);
$login = htmlspecialchars($login);


    //проверка логина пользователя производится по БД через ПДО - удобнее вынести в отдельный класс

    $reqLogin = 'SELECT * FROM users WHERE login = :login';
        $params = [':login' => $login];
            $query = $pdo->prepare($reqLogin);
            $query->execute($params);
            $executeRow = $query->rowCount();
                if ($executeRow != 0) {

                    echo 'Пользователь с таким Логином уже существует';
                    exit;

                }





        if (strlen($password <  4)){
            unset($password);
            echo 'пароль должен содержать больше 4-х символов';
            exit;
        }

$password = password_hash($password,  PASSWORD_DEFAULT);
$admin = '0'; //даже при том что в MySQL булевое значение, все равно параметр false - не воспринимает.

$sql_add_user = 'INSERT INTO users(login, firstName, lastName, telephone, admin, password) 
                           VALUES (:login, :firstName, :lastName, :telephone, :admin, :password)';
$params = [ ':login' =>$login ,
    ':firstName' => $firstName,
    ':lastName' => $lastName,
    ':telephone' => $telephone,
    ':admin' => $admin,
    ':password' => $password
];

$stmt = $pdo->prepare($sql_add_user);
$stmt->execute($params);

echo "Пользователь добавлен";
?>