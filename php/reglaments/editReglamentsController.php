<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php'; ?>

<?php



$data = $_POST['reglamentCode'];

$sqlQuery = new reglaments();
echo $sqlQuery::editReglaments($data);
