<?php session_start();?>

<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/requireplugins.php';?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/class/priorityColor.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php'; ?>



<?php require $_SERVER["DOCUMENT_ROOT"] . '/php/require/header.php';?>
<!--Подключаем CSS X-editable-->
<!--подключаем JS X-editable-->
<script src="<?php $_SERVER['DOCUMENT_ROOT'];?>/js/telephones/bootstrap-editable.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT'];?>/js/telephones/telephones_editable.js"></script>
<link href="<?php $_SERVER['DOCUMENT_ROOT'];?>/css/bootstrap-editable.css" rel="stylesheet">

<main>
<body>
<div class="row">
    <div class="col-1"></div>
    <div class="col-2"> Меню </div>

    <div class="col-8">
        <div class="container">
            <div class="text-center">
                <h1 class="text-primary">Номера телефонов</h1>

            </div>
            <br>

               <div class="data"> <?php require $_SERVER["DOCUMENT_ROOT"]. "/php/information/telephoneProcessor.php";?> </div>
        </div>
    </div>

    <div class="col-1"></div>

</div>
</body>
</main>


