<?php

require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";
require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php';



$post_id = $_POST['buttonValue'];

/**
 * так, мы передаем данные после чего происходит запрос
 */


$sql = 'SELECT * FROM default_fpl WHERE id = :id';
$params = [ ':id' =>$post_id];


$stmt = $pdo->prepare($sql);
$stmt->execute($params);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):

    //TODO сделать на каждый пунк FPL-a отдельную строку для редактирования и обработчик для добавления изменений
    ?>



<div class="modal fade bd-example-modal-lg" id="editFPLModal" tabindex="-1" role="dialog" aria-labelledby="editFPLModalLabel" aria-hidden="true">
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
                        <textarea class="form-control" id="FPL_name" rows="1" name="FPL_name"required><?php print_r($row['fplName']);?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="text__area" id="field1__label"  required>Первая Строка </label>
                        <textarea class="form-control" id="field1" name="field1" rows="1" required><?php print_r($row['field1']); ?></textarea>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="notStsndartFPL" name="notStandartFPL">
                        <label class="custom-control-label" for="notStsndartFPL">Не стандартный FPL</label>
                    </div>

                    <div class="form-group">
                        <label for="text__area" id="FPL"  required> FPL </label>
                        <textarea class="form-control" id="FPL" name="FPL" rows="1" required></textarea>
                    </div>



                    <div class="form-group">
                        <label for="text__area" id="commentaries"  required> комментарий </label>
                        <textarea class="form-control" id="commentaries" name="commentaries" rows="1" required></textarea>
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




<?php
endwhile;
?>

