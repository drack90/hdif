<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php'; ?>

<?php

$reglament = new reglaments();
print_r($reglament->viewsReglament());


?>