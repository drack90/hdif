<?php
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";

$userID = $_POST['userID'];


$sql = 'DELETE FROM users WHERE id = :id';
$params = [ ':id' => $userID];


$stmt = $pdo->prepare($sql);
$stmt->execute($params);

echo "Запись удалена.";


?>

