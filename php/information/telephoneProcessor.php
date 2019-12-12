<?php
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; 


echo 'kekeke';

$sql = "SELECT * FROM telephones";
//$stmt->bindValue(':name', '%' . $geopointName . '%');
$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {


    ?>

        <div class="row">
            <div class="col-1"></div>
            <div class="col-11">
                <b><h3><?php print_r($row['name']); ?></h3></b>
                <br>
                <span><?php print_r($row['number']); ?></span>
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




