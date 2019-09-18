<?php //require $_SERVER['DOCUMENT_ROOT'] . '/php/auth/check_auth.php';?>

<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/requireplugins.php';?> <!-- подключаем все плагины bootstrap and JS-->

      <style>
        .collapse.in { display: inline !important; }
    </style>

    <title><?php print_r ($config['tittle']); ?></title>
</head>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/header.php'; ?> <!-- Подключаем header -->

    <main>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/journal/view_journal.php';?>
        <br>
        <br>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/info_block/info_collaps.php';?>



    </main>
</html>

