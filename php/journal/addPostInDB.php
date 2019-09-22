<?php
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";


$textPost = $_POST['textPost'];
$authorID  = $_POST['authorID'];
$priorityLevel =  $_POST['priorityLevel'];


        $sql = 'INSERT INTO journal(text, priority, author) VALUES (:text, :priority, :author)';
        $params = [ ':text' =>$textPost,
                    ':priority' => $priorityLevel,
                    ':author' => $authorID
        ];


        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);



?>