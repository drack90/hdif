<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"]."/php/config/db.php";

$login =trim($_POST['login']);
$password = trim($_POST['password']);
//проверяем не пустые ли значения нам пере
if(!empty($login) && !empty($password) ) {

    $sql = 'SELECT login, password, telephone, admin, firstName FROM  users  WHERE login = :login';
    $params = [':login' =>$login,];

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_OBJ);

    if($user){
        if(password_verify($password, $user->password)){
            $_SESSION['user_login'] = $user->login;
            $_SESSION['tel'] = $user->telephone;
            $_SESSION['admin'] = $user->admin;
            $_SESSION['lastName'] = $user->firstName;




            //Назначаем суперглобавльному массиву значение login.
                header('location: ../../index.php');
        }else  {
            echo "не верный логин и пароль";
        }
    }else  {
        echo "не верный логин и пароль";
    }
}else  {
    echo "пожалуйста заполните все поля";
}

?>

