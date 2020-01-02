<?php
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";


$telephoneText = $_POST['telephoneText'];
$name = 'ZC number';
$comment = '1';
$telephoneText = htmlspecialchars($telephoneText);


        $sql = 'INSERT INTO telephones(name, number, comment) VALUES (:name, :number, :comment)';
        $params = [ ':number' => $telephoneText,
                    ':name' => $name,
                    ':comment' => $comment
        ];


        $stmt = $pdo->prepare($sql);
        $stmt->execute($params);

echo ' Данные добавлены';

  
exit;

$searchGeopointSql = "SELECT * FROM telephones";
//$stmt->bindValue(':name', '%' . $geopointName . '%');
$stmt = $pdo->prepare($searchGeopointSql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {


    ?>

    <div class="label-default">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-11">
                <b><h3><?print_r($row['comment']); ?></h3></b>
                <br>
                <span><?print_r($row['text']); ?></span>
            </div>
        </div>

    </div>


    <?php

}


/**
 *  Создал таблицу на сервере:
 * Имя:telephones
 *  столбцы:
 *      id
 *      name
 *      number
 *      comment

 */
?>


