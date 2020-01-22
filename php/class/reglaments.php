<?php

//класс отвечает за отображение и изменение регламента

class reglaments
{

    public static function viewsReglament()
    {
        require $_SERVER["DOCUMENT_ROOT"] . '/php/config/config.php';
        $reglamentSql = "SELECT * FROM reglaments WHERE id=1";
        $stmt = $pdo->prepare($reglamentSql);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        return $row['reglament'];



    }

    public static function editReglaments($data){
        require $_SERVER["DOCUMENT_ROOT"] . '/php/config/config.php';
        $updateReglamentsSql = "UPDATE reglaments SET reglament=:reglament WHERE id='1' ";
        $data = [':reglament' => $data];
        $getQuery = $pdo->prepare($updateReglamentsSql);
        $result = $getQuery->execute($data);

        if ($result == false){
          return 'Произошла ошибка при обновлении информации';
        }else{
            return 'Регламенты обновлены';
        }

    }


}