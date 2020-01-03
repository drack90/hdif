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

    //функиця производит сверку пароля и если пароль совпадает возвращает true
    public function verifyPassword()
    {
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

    }

    public function changePassword()
    {
        if ($this->verifyPassword() == true) {
            //sql PDO запрос на замену пароля в MD HASH
            
        }

    }


}