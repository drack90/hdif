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

    
  


    
    </div>
 <div class="row">
   <div class="col-2"></div>
   <div class="col-8">
     <form class="col 10 center" id="telephoneForm"  >
         <textarea class="form-control" id="telephoneText" rows="3" name="telephoneText"  required></textarea>


     </form>
       <br>
        <div class="row justify-content-between">
                    <div class="col-6-right">
                        <button id="telephoneSubmit" class="btn btn-primary">Отправить</button>
                    </div>
                   
        </div>
   </div>

   <div class="col-2"></div>

  </div>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/information/telephoneProcessor.php';?>
    
</main>
<footer>

</footer>

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

  <script>

      
//производит отправку данных на файл addFplProcessor и закрытие модального окна
 $('#telephoneSubmit').on('click', function () {
     
     $.ajax({
         url: "/php/information/addTelephone.php",
         type: "POST",
         data: $('#telephoneForm').serialize(),
         success: function (data) {
             alert(data);
             console.log(data);
         }
     });
 });

  </script>

