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

        $stmt = null;


    }


}