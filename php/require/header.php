<body id="page-top">
<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-white bg-white fixed-top border" id="mainNav">
    <a class="navbar-brand" href="<?$_SERVER["DOCUMENT_ROOT"];?>/index.php">
        <img src="<?$_SERVER['DOCUMENT_ROOT'];?>/img/icon/icon_blue.svg" width="30" height="30" class="d-inline-block align-top" alt="" >
        How do I fly
    </a>
        <div class="container-fluid text-center">
            <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="<?$_SERVER["DOCUMENT_ROOT"];?>/index.php">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?$_SERVER["DOCUMENT_ROOT"];?>/php/addfpl/findFplpage.php"> FPL </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Добавить FPL</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Геоточки</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="<?$_SERVER["DOCUMENT_ROOT"];?>/php/geopoint/add_point.php">Добавить Геоточку</a>
                        <a class="dropdown-item" href="<?$_SERVER["DOCUMENT_ROOT"];?>/php/geopoint/point_search.php">Поиск геоточки</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Рабочая информация</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="<?$_SERVER["DOCUMENT_ROOT"];?>/php/information/reglament.php">Регламенты</a>
                        <a class="dropdown-item" href="<?$_SERVER["DOCUMENT_ROOT"];?>/php/information/telephone.php">Телефоны</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
            </ul>
        </div>

            <a class="text-left" href="<?$_SERVER["DOCUMENT_ROOT"];?>/index.php">
                <img src="<?$_SERVER['DOCUMENT_ROOT'];?>/img/icon/notice_blue.svg" width="30" height="30" class="" alt="" >
            </a>

        <form class="form-inline my-2 my-md-0" >
            <a role="button" href="<?$_SERVER["DOCUMENT_ROOT"];?>/php/require/logout.php" class="btn btn-primary">Выход</a>
        </form>


</nav>



<br><br><br>

<!-- Модальное окно добавления FPL-а в БД -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="addArticleModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title h3 mb-3 font-weight-normal" id="exampleModalLongTitle">Добавить новый FPL</h3>
                <button type="button" class="close right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class="modal-body">
                <form class="col 10 center" id="add_article_form" method="post" action="<?$_SERVER["DOCUMENT_ROOT"];?>/php/addfpl/addfpl.php"> <!-- TODO сделть обработчик-->


                    <div class="form-group">
                        <label for="text__area" id="FPL_name"  class="h5" required>Название плана</label>
                        <textarea class="form-control" id="FPL_name" rows="1" name="FPL_name"required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exempleCategory">Тип ВС</label>
                        <select class="form-control form-control-sm" id="helicopter_model" name="helicopter_model">
                            <option>MI8</option>
                            <option>AS-50</option>
                            <option>AS-55</option>
                            <option>MI-26</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="text__area" id="departure"   required>Пункт Вылета(ИКАО)</label>
                                <textarea class="form-control" id="departure" name="departure" rows="1" maxlength="4" required></textarea>
                            </div>
                            <div class="col-3">
                                <label for="text__area" id="timetogo"  >Время вылета</label>
                                <textarea class="form-control" id="timetogo" name="timetogo" rows="1" maxlength="4" ></textarea>
                            </div>
                        </div>
                    </div> <!-- departure это "отправление" по английски -->

                    <div class="form-group">
                        <label for="text__area" id="speed"   required>Высота и скорость</label>
                        <textarea class="form-control" id="speed" name="speed" rows="1" placeholder="K0190M0090"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="text__area" id="route"  required> Маршурт </label>
                        <textarea class="form-control" id="route" name="route" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-3">
                                <label for="text__area" id="arrival"   required>Пункт прибытия</label>
                                <textarea class="form-control" id="arrival" name="arrival" rows="1" maxlength="4" required></textarea>
                            </div>
                            <div class="col-3">
                                <label for="text__area" id="endtime"  required>Истекшее время</label>
                                <textarea class="form-control" id="endtime" name="endtime" rows="1" maxlength="4" required></textarea>
                            </div>
                            <div class="col-3">
                                <label for="text__area" id="alternative1"  required>Запасной аэродром1</label>
                                <textarea class="form-control" id="alternative1" name="alternative1" rows="1" maxlength="4" required></textarea>
                            </div>
                            <div class="col-3">
                                <label for="text__area" id="alternative2"  required>Запасной аэродром2</label>
                                <textarea class="form-control" id="alternative2" name="alternative2" rows="1" maxlength="4" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="text__area" id="reg"  required>Регистрационный номер</label>
                            <textarea class="form-control" id="reg" name="reg" rows="1" maxlength="12" required></textarea>
                        </div>
                        <div class="col-6">
                            <label for="text__area" id="dof"  required>Дата</label>
                            <textarea class="form-control" id="dof" name="dof" rows="1" maxlength="12" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text__area" id="remark"  required> RMK </label>
                        <textarea class="form-control" id="remark" name="remark" rows="4" required></textarea>
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
                    <div class="row justify-content-between"">
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                    </div>
                    <div class="col-6-right">
                        <button type="button" class="btn btn-secondary center" data-dismiss="modal">Закрыть</button>
                    </div>

            </div>

            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>

