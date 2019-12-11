<?php session_start();?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/auth/check_auth.php"; ?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/requireplugins.php';?> <!-- подключаем все плагины bootstrap and JS-->



    <title><?php print_r ($config['tittle']); ?></title>
</head>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/header.php'; ?> <!-- Подключаем header -->

<main>

<div class="row">
    <div class="col-1"></div>
    <div class="col-3">
        <br>
        <h3>Поиск FPL </h3>
        <div class="fplfind">
            <div class="form-group">
                <form method="POST" id="findFpl">
                    <div>
                        <label for="fplName">Имя FPL</label>
                        <input class="form-control" id="fplnName" name="fplName">
                    </div>

                    <div class="form-group">
                        <label for="field13">Взлет</label>
                        <input class="form-control" id="field13" name="field13">
                    </div>

                    <div class="form-group">
                        <label for="field16">Посадка</label>
                        <input class="form-control" id="field16" name="field16">
                    </div>

                    <div class="form-group">
                        <label for="field15">Маршурт</label>
                        <input class="form-control" id="field15" name="field15">
                    </div>
                    <div class="form-group">
                        <label for="field18">Поиск по 18 полю</label>
                        <input class="form-control" id="field18" name="field18">
                    </div>
                    <div class="form-group">
                        <label for="commentaries">Поиск по комментарию</label>
                        <input class="form-control" id="commentaries" name="commentaries">
                    </div>


                        <div class="row">
                            <div class="col-6 ">
                                        <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="author" name="author">
                                        <label class="custom-control-label" for="author" >Только Мои</label>
                                    </div>
                            </div>

                            <div class="col-6 flex-row ">
                                <input id="searchFpl" type="submit" class="btn btn-primary">
                            </div>
                        </div>



                </form>
            </div>
        </div>

    </div>
    <div class="col-6">
        <div class="results" id="results"></div></div>
</div>


<script src="<?$_SERVER['DOCUMENT_ROOT'];?>/js/findFpl/findFplAJAX.js"></script>
<script src="<?$_SERVER['DOCUMENT_ROOT'];?>/js/findFpl/editFplAJAX.js"></script>
</main>
<footer>

</footer>