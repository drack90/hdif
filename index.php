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
        <div id="journal"><?php require $_SERVER['DOCUMENT_ROOT'] . '/php/journal/view_journal.php'; ?>

        </div>
        <br>
        <br>
        <div id='timeTable'>
            <div class="row">

                <div class="col-1">
                    <div class="container">
                        <div class="reglaments">
                            <a href="#" class="reglaments__trigger">
                                <div class="bars"></div>
                            </a>

                            <div class="reglaments__content">

                                <?php require $_SERVER['DOCUMENT_ROOT'] . "/php/reglaments/viewsReglaments.php"; ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10">
                    <div class="card-title text-center text-primary"><span class="h2">График работы</span>
                    </div>
                    <br>
                    <?php //require $_SERVER['DOCUMENT_ROOT'].'/php/timetable/getTimeTable.php';?>
                    <div style="align-content: center;">
                        <iframe frameborder="no"
                                src="https://docs.google.com/spreadsheets/d/e/2PACX-1vTURI_HdtdKnpHozeLDpYLbtl_nk9goeqVkewuXGlyhfhBmBeOcJsDnDDRoSHNNPY8vWTdsKozU3KMJ/pubhtml?gid=0&amp;single=true&amp;widget=false&amp;headers=false&amp;chrome=false"
                                width="100%" height="450px"></iframe>
                    </div>
                </div>
    <div class="col-1"></div>
</div>
</div>

 <br>
            <div id="info_collaps"><?php// require $_SERVER['DOCUMENT_ROOT'] . '/php/info_block/info_collaps.php';?></div>


    </div>
</main>

<footer>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/footer.php'; ?>

</footer>
<script src="<?php $_SERVER['DOCUMENT_ROOT']; ?>/js/reglaments.js"></script>


</html>



