<?php

if (isset($_POST['name'])) {
    $column = $_POST['name'];
    $newValue = $_POST['value'];
    $id = $_POST['pk'];
    $sql = "UPDATE telephone_zc SET column = :newValue WHERE id = :id";

    $params = [
        ":newValues" => $newValue,
        ":id" => $id
    ];

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    return 'yes';


}else{
    return 'no';
}