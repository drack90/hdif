<? session_start(); ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php';?>


<body id="page-top">
<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top border" id="mainNav">
    <a class="navbar-brand" href="<?php $_SERVER["DOCUMENT_ROOT"];?>/index.php">
        <img src="<?php $_SERVER['DOCUMENT_ROOT'];?>/img/icon/icon_blue.svg" width="30" height="30" class="d-inline-block align-top" alt="" >
        How do I fly
    </a>
        <div class="container-fluid text-center">
            <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="<?php $_SERVER["DOCUMENT_ROOT"];?>/index.php">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="findFplPage" href="<?php $_SERVER['DOCUMENT_ROOT'];?>/php/fpl/findFpl/findFplPage.php"> FPL </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" href="#addFPLModal">Добавить FPL</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Геоточки</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="<?php $_SERVER["DOCUMENT_ROOT"];?>/php/geopoint/geopoint.php">Добавить Геоточку</a>
                        <a class="dropdown-item" href="<?php $_SERVER["DOCIMENT_ROOT"];?>/php/geopoint/point_search_page.php">Поиск геоточки</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Рабочая информация</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="<?php $_SERVER["DOCUMENT_ROOT"];?>/php/info_block/reglaments.php">Регламенты</a>
                        <a class="dropdown-item" href="<?php $_SERVER["DOCUMENT_ROOT"];?>/php/information/telephone.php">Телефоны</a>
                    </div>
                </li>
            </ul>
        </div>
            <div class="text-left" style="margin-right: 2rem">
                <div class="text-left h6 text-primary"><?php new adminPanelButton();
                                                                adminPanelButton::adminButton();?></div>
            </div>
            

        <form class="form-inline my-2 my-md-0" >
            <a role="button" href="<?php $_SERVER["DOCUMENT_ROOT"];?>/php/require/logout.php" class="btn btn-primary">Выход</a>
        </form>


</nav>



<br><br><br>

<!-- Модальное окно добавления FPL-а в БД -->
<div class="modal fade bd-example-modal-lg" id="addFPLModal" tabindex="-1" role="dialog" aria-labelledby="addFPLModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title h3 mb-3 font-weight-normal" id="exampleModalLongTitle">Добавить новый FPL</h3>
                <button type="button" class="close right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class="modal-body">

                <form class="col 10 center" id="addFplForm" >


                    <div class="form-group">
                        <label for="text__area" id="FPL_name"  class="h5" required>Название плана</label>
                        <textarea class="form-control" id="FPL_name" rows="1" name="FPL_name"required></textarea>
                    </div>


                    <!-- departure это "отправление" по английски -->

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="notStsndartFPL" name="notStandartFPL">
                        <label class="custom-control-label" for="notStsndartFPL">Не стандартный FPL</label>
                    </div>

                    <div class="form-group">
                        <label for="text__area" id="FPL"  required> FPL </label>
                        <textarea class="form-control" id="FPL" name="FPL" rows="15" required></textarea>
                    </div>


                    <div class="form-group">
                        <label for="exempleCategory">Дирекция</label>
                        <select class="form-control form-control-sm" id="direction" name="direction">
                            <option>Тюмень</option>
                            <option>Сургут</option>
                            <option>Игарка</option>
                            <option>Хабаровск</option>
                            <option>Иркутск</option>
                            <option>Ноябрьск</option>
                            <option>Омск</option>
                            <option>Усинск</option>
                            <option>Уфа</option>
                            <option>Тобольск</option>

                        </select>
                    </div>

                            <div class="form-group">
                                <label for="text__area" id="commentaries"  required> комментарий </label>
                                <textarea class="form-control" id="commentaries" name="commentaries" rows="1" required></textarea>
                            </div>







                    <div class="form-group">
                        <div class="row justify-content-between">
                            <div class="col-10">
                                <label class="h6" for="add_file" >Загрузить изображение</label>

                                <textarea class="form-control" id="image" name="image" rows="1"></textarea>
                            </div>
                            <div class="col-2">
                                <p class="h6" style="opacity: 0.0;"> space</p>
                                <button class="btn btn-primary" >загрузить</button>
                            </div>
                        </div>
                    </div>

                    <hr>
            </form>

                <div class="row justify-content-between">
                    <div class="col-6">
                        <button type="submit" id="addFplInBD" class="btn btn-primary">Отправить</button>
                    </div>
                    <div class="col-6-right">
                        <button type="button" class="btn btn-secondary center" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>


<!--модальное окно редактирования FPL-->



<script src="<?php $_SERVER['DOCUMENT_ROOT'];?>/js/findFpl/findFplAJAX.js"></script>
<script src="<?php $_SERVER['DOCUMENT_ROOT'];?>/js/addFPL/addFplAJAX.js"></script>


</body>

