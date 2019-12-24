<?php
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; 




$sql = "SELECT * FROM telephone_zc";

//$stmt->bindValue(':name', '%' . $geopointName . '%');
$stmt = $pdo->prepare($sql);
$stmt->execute();
echo '<table class="table table-striped ">' .
    '<thead class="thead-light">' .
    '<tr>' .
        '<th width="30%">Имя</th>' .
        '<th width="30%">Телефон</th>' .
        '<th width="40%">Комментарий</th>' .
    '</tr>' .
    '</thead>';

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>' .

        '<td><a href="#" class="people-editable" data-name="name" data-type="text" data-title="Имя" data- data-pk="' . $row['id'] . '" >' . $row['name'] . '</a></td>' .
        '<td><a href="#" class="people-editable" data-name="number" data-type="text" data-pk="' . $row['id'] . '" >' . $row['number'] . '</td>' .
        '<td><a href="#" class="people-editable" data-name="comment" data-type="text" data-pk="' . $row['id'] . '" >' . $row['comment'] . '</td>' .
        '</tr>';
}
echo '</table>';
    ?>









