<?php

$searchGeopointSql = "SELECT * FROM information";
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
 * id
 * text
 * name
 * comments
 *
 */
?>


