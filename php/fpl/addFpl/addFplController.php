<?php session_start(); ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php'; ?>

<?php



$addfpl = new postFpl();

$addfpl->addFpl();
