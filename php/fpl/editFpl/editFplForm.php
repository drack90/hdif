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

    ?>



<div class="modal fade bd-example-modal-lg" id="editFPLModal" tabindex="-1" role="dialog" aria-labelledby="editFPLModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h3 class="modal-title h3 mb-3 font-weight-normal" id="exampleModalLongTitle" >Редактирование FPL</h3>
                <button type="button" class="close right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class="modal-body">

                <form class="col 10 center" id="editFplForm">


                    <div class="form-group">
                        <label for="FPL_name" id="FPL_name"  class="h5">Название плана</label>
                        <textarea class="form-control" id="FPL_name" rows="1" name="FPL_name"><?php print_r(strip_tags($row['fplName']));?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="field1" id="field1__label" class="h6">Первая Строка </label>
                        <textarea class="form-control" id="field1" name="field1" rows="1" ><?php print_r(strip_tags($row['field1'])); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="field7" id="field7__label" class="h6" >Поле 7 </label>
                        <textarea class="form-control" id="field7" name="field7" rows="1" ><?php print_r(strip_tags($row['field7'])); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="field13" id="field13__label" class="h6" >Поле 13 (точка вылета) </label>
                        <textarea class="form-control" id="field13" name="field13" rows="1" ><?php print_r(strip_tags($row['field13'])); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="field15" id="field15__label" class="h6">Поле 15 (маршурт) </label>
                        <textarea class="form-control" id="field15" name="field15" rows="5"><?php print_r(strip_tags($row['field15'])); ?></textarea>
                    </div>

                    <div class="row">

                        <div class="col-auto">
                            <div class="form-group">
                                <label for="field16" id="field16__label" class="h6" >Поле 16 (точка окончания полета) </label>
                                <textarea class="form-control" id="field16" name="field16" rows="1"><?php print_r(strip_tags($row['field16'])); ?></textarea>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-group">
                                <label for="alternative1" id="alternative1__label" class="h6" >Запасной 1 </label>
                                <textarea class="form-control" id="alternative1" name="alternative1" rows="1" ><?php print_r(strip_tags($row['alternative1'])); ?></textarea>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="form-group">
                                <label for="alternative2" id="alternative2__label" class="h6" >Запасной 2 </label>
                                <textarea class="form-control" id="alternative2" name="alternative2" rows="1"><?php print_r(strip_tags($row['alternative2'])); ?></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="field18" id="field18__label" class="h6" >Поле 18 (прочая информация) </label>
                        <textarea class="form-control" id="field18" name="field18" rows="5" ><?php print_r(strip_tags($row['field18'])); ?></textarea>
                    </div>

                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="notStsndartFPL" name="notStandartFPL">
                        <label class="custom-control-label" for="notStsndartFPL">Не стандартный FPL</label>
                    </div>

                    <div class="form-group">
                        <label for="commentaries" id="commentaries" class="h6" > <b>Комментарий</b> </label>
                        <textarea class="form-control" id="commentaries" name="commentaries" rows="1" ></textarea>
                    </div>


                    <hr>


                <div class="row justify-content-between">
                    <div class="col-6">
                        <button type="submit" id="editFplInBD" class="btn btn-primary" value="<?php print_r($row['id']); ?>">Отправить</button>
                    </div>
                    <div class="col-6-right">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
 <script src="<?$_SERVER['DOCUMENT_ROOT'];?>/js/findFpl/editFplAJAX.js"></script>




<?php
endwhile;
?>

