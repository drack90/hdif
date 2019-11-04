<!-- Данный блок должен отображаться посредством php с пометкой о новом сообщении и новой новости. -->
<div id="journal_content">
<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>

<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/class/priorityColor.php"; ?>

<?php

    $sqljournal = "SELECT * FROM journal ORDER BY id DESC LIMIT 5";

    //$stmt->bindValue(':name', '%' . $geopointName . '%');
    $stmt = $pdo->prepare($sqljournal);
    $stmt->execute();
?>

<div class="row">
    <div class="col"></div>

    <div class="col-10">
        <div class="card-title text-center text-primary"><span class="h3">Журнал изменений</span>
        </div><?php



        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $priority = $row['priority'];
    ?>


            <div class="card <? $val = new priorityColor;
                             echo $val->colorSelect($priority);

            ?> " id="lending"> <!-- анимация появления -->
                <div class="media">
                    <div class="media-body" id="post_<?php print_r($row['id']);?>">
                        <a class="text-black-50"><?php print_r($row['date']);?></a>
                        <span><? print_r($row["text"]);?></span>
                        <!-- Если параметр 'admin' в сессии прописан - то показывать кнопку удаления текста-->
                        <?php
                        if(isset($_SESSION['user_login'])){
                        if($_SESSION['admin'] == true){
                            ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                data-toggle="Close" data-placement="top" title="закрыть"
                                name="deleteButton" id="deleteButton" value="<?php print_r($row['id']); ?>">
                            <span aria-hidden="true">&times;</span>
                        </button>
                       <?php }
                       }
                        ?>

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
                <form class="form-inline my-2 my-md-2">
                    <button type="button" class="btn btn-sm btn-primary" id="readMoreJournal" >Читать далее</button>
                </form>


                        <!-- button 2 -->
                <form class="form-inline my-2 my-md-2">
                    <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#addJournalPostModal">Добавить запись </button>

            </div>
            <div class="col"></div>
        </div>

</div>
    <div class="col"></div>


</div>
<!-- modal -->
<div class="modal fade" id="addJournalPostModal" tabindex="-1" role="dialog" aria-labelledby="addJournalPostLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Добавить запись</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addJournalPost" name="addJournalPost">
                <div class="modal-body" id="modalBody">

                        <textarea class="form-control" id="textPost" rows="3" name="textPost" data-focus="modal" required></textarea>

                        <div class="form-group">
                            <label for="priorityLevel">Уровень важности информации</label>
                            <select class="form-control" id="priorityLevel" name="priorityLevel">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>


                    <div class="hide">
                        <textarea class="text-hide" id="authorID" name="authorID"><?echo $_SESSION['user_login']; ?></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary" id="accessButtonJournal">Отправить</button>
                </div>
            </form>
        </div>
    </div>

</div>
</div>
<div id="results"></div>

    <script src="/js/joгurnal_js/journal_ajax.js"></script>
    <script src="/js/joгurnal_js/journal_refresh.js"></script>




