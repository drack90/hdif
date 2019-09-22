<?php session_start(); ?>
<html lang="ru">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href=<?$_SERVER['DOCUMENT_ROOT'];?>"css/bootstrap.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href=<?$_SERVER['DOCUMENT_ROOT'];?>"css/signin.css" rel="stylesheet">

<style>
    .img{
        background: no-repeat center/100% url("../../../howifly/img/mi8.png");
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>

<body class="text-center img">

<div class="form-signin">





    <form class="form-signin" method="POST" action="<?php $_SERVER["DOCUMENT_ROOT"]; ?>/php/auth/auth.php">
        <img class="mb-4" src="../../img/icon/icon.svg" alt="" width="72" height="72">
        <p class="h2" style="color: white;">Авторизируйтесь</p>
    <br />
        <div class="form-group"><!--Форма авторизации -->
            <label for="login" class="sr-only">login</label>
            <input type="login" id="login" name="login" class="form-control" placeholder="login" required autofocus>
            <br>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-block" >Отправить</button>
            </div>
        </div>
    </form>

</div>

</body>
</head>
</html>