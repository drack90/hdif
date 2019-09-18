<?php
require '../config/config.php';

$geopoint = $_POST['geopoint'];
$name = $_POST['name'];
$comment = $_POST['comment'];

    $sql_add_fpl = 'INSERT INTO geopoint(geopoint, name, comment) 
                                             VALUES (:geopoint, :name, :comment)';
    $params = [ ':geopoint' =>$geopoint ,
        ':name' => $name,
        ':comment' => $comment
    ];


        $stmt = $pdo->prepare($sql_add_fpl);
        $stmt->execute($params);

echo "Геоточка добавлена";
?>