<?php

require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";


$post_id = $_POST['buttonValue'];


$sql = 'DELETE FROM default_fpl WHERE id = :id';
$params = [ ':id' =>$post_id];


$stmt = $pdo->prepare($sql);
$stmt->execute($params);

echo "Запись удалена.";


?>

