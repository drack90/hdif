<?php
//класс который производит замену пароля

class changePassword
{
    public $oldPassword;
    public $newPassword;
    public $verifyPassword;
    public $login;


    public function __construct()
    {
        $this->oldPassword = $_POST['oldPassword'];
        $this->newPassword = $_POST['newPassword'];
        $this->verifyPassword = $_POST['verifyPassword'];
        $this->login = $_SESSION['user_login'];


    }

    //проверка поступающих данных на соответствие.
    public function verifyPostData()
    {
        if ($this->newPassword == $this->verifyPassword) {
            //выбираем хэш пароля
            $this->newPassword = password_hash($this->newPassword, PASSWORD_DEFAULT);
            return true;
        } else {
            return false;
        }
    }

    //функиця производит сверку пароля и если пароль совпадает возвращает true
    public function verifyPassword()
    {
        if ($this->verifyPostData() == true) {

            $sql = 'SELECT login, password, telephone, admin FROM  users  WHERE login = :login';
            $params = [':login' => $this->login,];
            $verifyPassrd = $pdo->prepare($sql);
            $verifyPassrd->execute($params);

            $user = $verifyPassrd->fetch(PDO::FETCH_OBJ);

            if ($user) {
                if (password_verify($this->oldPassword, $user->password)) {
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return "Новый пароль и проверка пароля не совпадают.";
        }
    }

    public function changePassword()
    {

        if ($this->verifyPassword() == true) {
            $sqlChangePassword = 'UPDATE users SET password = :password WHERE login=:login';
            $params = [':login' => $this->login,
                ':password' => $this->newPassword];
            $verifyPassrd = $pdo->prepare($sqlChangePassword);
            $verifyPassrd->execute($params);

        }

    }


}