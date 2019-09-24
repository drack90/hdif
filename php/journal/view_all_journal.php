<!-- Данный блок должен отображаться посредством php с пометкой о новом сообщении и новой новости. -->
<!--<div id="journal_content">-->
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/requireplugins.php';?>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/php/class/priorityColor.php"; ?>


     <?php
    //
    // $sqljournal = "SELECT * FROM journal ORDER BY id DESC LIMIT 50";
    //
    // $stmt = $pdo->prepare($sqljournal);
    // $stmt->execute();
     ?>

    <?php
    //подключаем файл класса pagination
    include_once $_SERVER["DOCUMENT_ROOT"].'/php/class/pagination.php';
    //инициализируем класс




    $limit = 25; //количество записей на страницу
    $offset = !empty($_GET['page'])?(($_GET['page']-1)*$limit):0;
    //получаем количество записей
    $queryNum = ("SELECT COUNT(*) as id FROM journal");
    $queryNum = $pdo-> prepare($queryNum);
    $queryNum->execute();
    $resultNum = $queryNum->fetch(PDO::FETCH_ASSOC);
    $rowCount = $resultNum['id'];

    $pagConfig = array(
        'baseURL'=>'http://hdif/php/journal/view_all_journal.php',
        'totalRows'=>$rowCount,
        'perPage'=>$limit
    );
    $pagination =  new Pagination($pagConfig);
    //получаем записи
    $query = ("SELECT * FROM journal ORDER BY id DESC LIMIT $offset,$limit");
    $query = $pdo-> prepare($query);
    $query->execute();
   ?>
        <div class="posts_list">
            <div class="row">
                <div class="col"></div>
                <div class="col-10">
                    <div class="card-title text-center text-primary"><span class="h3">Журнал изменений</span>
                    </div><?php



                    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                        $priority = $row['priority'];
                        ?>


                        <div class="card <? $val = new priorityColor;
                        echo $val->colorSelect($priority);

                        ?> " id="lending"> <!-- анимация появления -->
                            <div class="media">
                                <div class="media-body">
                                    <a class="text-black-50"><?php print_r($row['date']);?></a>
                                    <span><? print_r($row["text"]);?></span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"  data-toggle="Close" data-placement="top" title="закрыть">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                </div>
                            </div>
                        </div>
                        <hr>

                        <?php
                    }

                    ?>

                    <div class="row">
                        <div class="col-10"></div>
                        <div class="col-2 float-right flex-column">


                            <!-- button 2 -->
                            <form class="form-inline my-2 my-md-2">
                                <a class="btn btn-success" href="<?$_SERVER['DOCUMENT_ROOT']; ?>/index.php">Главная страница</a>

                        </div>
                        <div class="col"></div>
                    </div>

                </div>
                <div class="col"></div>


            </div>

        </div>

<div id="results"></div>
        </div>
        <!-- отображаем ссылки на страницы -->
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="pagination">
            <nav aria-label="Page navigation example">
                <ul class="pagination">

                    <?php echo $pagination->createLinks(); ?>

                </ul>
            </nav>
        </div>
    </div>
    <div class="col-3"></div>
</div>







<script src="/js/joгurnal_js/journal_ajax.js"></script>
<script src="/js/joгurnal_js/journal_refresh.js"></script>




