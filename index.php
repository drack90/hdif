<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/auth/check_auth.php"; ?>



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


    <div id="content_block">
        <div id="journal">
            <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/journal/view_journal.php'; ?>

        </div>
        <br>
        <br>
        <div class=".container " id='timeTable'>
            <div class="row ">

                <div class="col-1">
                </div>
                <div class="col-10 ">
                    <div class="card-title text-center text-primary"><span class="h2">График работы</span>
                    </div>
                    <br>
                    <div class="card-title text-center text-primary"><span class="h2"><?php
                            $data = new timeTable();
                            $month = $data->setMonth();
                            echo $month[0];?></span>
                    </div>
                    <div class="d-flex justify-content-center">
                        <table class="tableTimeTable">
                            <tr>
                        <?php require $_SERVER['DOCUMENT_ROOT'].'/php/timetable/getTimeTable.php';?>
                        </table>
                    </div>
                        <div style="align-content: center;">

                    </div>
                </div>
    <div class="col-1"></div>
</div>
</div>

 <br>
            <div id="info_collaps"><?php// require $_SERVER['DOCUMENT_ROOT'] . '/php/info_block/info_collaps.php';?></div>
<div class="row">
    <div class="col-1"></div>
    <div class="col-5">

    </div>
</div>
    </div>
</main>

<footer>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/footer.php'; ?>

</footer>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/js/reglament/reglament.js"></script>


</html>



