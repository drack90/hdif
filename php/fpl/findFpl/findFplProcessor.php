<?php session_start(); ?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php'; ?>




<?php
include_once $_SERVER["DOCUMENT_ROOT"].'/php/class/pagination.php';

$_GET['page'] = $_POST['page'];

        $limit = 10; //количество записей на страницу
        $offset = !empty($_GET['page'])?(($_GET['page']-1)*$limit):0;
        unset($_POST['page']);



            // получаем общее количество записей в БД
            // это требуется для правильной работой с лимитом. класса pagination

//проверяем, переданы ли вообще данные в POST запросе
$i=0;

foreach ($_POST as $key => $val){
    if(!empty($val)){
        $i++;
    }
}
    //если не заполнено не одно поле - просить ввести данные
    if ($i<= 0){
    ?>
    <div class="text-center">
        <br><br><br>
        <h3><b>Недостаточно данных для отображения информации</b></h3></div>
    <?
    exit;
}
        //проверяем - если стоит только галочка "только мои" всё равно требовать "больше информации"
        if ($i == 1 and $_POST['author'] =='on'){
            ?>
            <div class="text-center">
                <br><br><br>
                <h3><b>Недостаточно данных для отображения информации</b></h3></div>
            <?
            exit;
        }
/** $sql - обязательный параметр
 * который требуется задавать для запроса - т.е. первая часть запроса.
 */


$sql = "SELECT * FROM default_fpl ";
$sqlCountReq = "SELECT COUNT(*) FROM default_fpl";
$where = '';


/**данный цикл должен производить генерацию запроса как и первый, но с учетом того
 * что запрос будет передаваться в PDO
 * финальная строка получится такая
 * SELECT * FROM default_fpl WHERE departure LIKE :departure AND route LIKE :route LIMIT 50*/


//если передаётся значение "только мои" то, удаляем ключь из POST запроса что бы исключить его из цикла foreach
if ($_POST['author'] == 'on') {
    unset($_POST['author']);
    $authorRequest = $_SESSION['user_login'];

}
//проходимся по массиву, и добавляем ключь-значение в запрос
foreach ($_POST as $key => $val) {
    if (!empty($val)) {
        if (!empty($where))
            $where .= ' && ';
        $column = trim($key, ':');
        $key = ':' . $key;
        $where .= "$column LIKE $key";

    }
}


if (!empty($where)) {
    $sqlReq = '';
    $sqlReq .= ' WHERE ' . $where;
    //если стоит галочка "только мои" то переменой $_POST['author'] назначается идентификатор логина
    // и добавляется строка в запрос
    if (isset($authorRequest)) {
        $sqlReq .= ' AND author = :author';
    }

    $sqlCount = $sqlReq; //задаём переменную содержащую сгенерированную строку с запросом
                        // для того что бы использовать её в запросе COUNT
    $sqlReq .= ' LIMIT ';

    $complete_sql = $sqlReq;

    //добавляем данные которые позволят Нам изменять их из конфига в начале скрипта.
    $complete_sql .= $offset;
    $complete_sql .= ',';
    $complete_sql .= $limit;

}


//в цикле формируем массив params который используется для PDO
foreach ($_POST as $key => $val) {
    if (!empty($val)) {
        $params[':' . $key] = '%' . $val . '%';
    }
}
//если был передан параметр "только мои" и была создана переменная $authorRequest - то создаем новый пунк в
//params для обработки методом execute() PDO
if (isset($authorRequest)) {
    $params[':author'] = $authorRequest;
}

$sqlCountReq .= $sqlCount;
$queryNum = $pdo-> prepare($sqlCountReq);
$queryNum->execute($params);
$resultNum = $queryNum->fetch(PDO::FETCH_ASSOC);

$rowCount = $resultNum['COUNT(*)'];



$pagConfig = array(
    'baseURL'=>'http://hdif/php/fpl/findFpl/findFplPage.php',
    'totalRows'=>$rowCount,
    'perPage'=>$limit
);

$pagination = new Pagination($pagConfig);

//формируем полный запрос
$sql .= $complete_sql;

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$executeRow = $stmt->rowCount();




//если PDO вернул 0 строк - вывести запись о том что строк не найдено

if ($executeRow == 0) {
    ?>
    <div class="text-center">
        <br><br><br>
        <h3><b>Данных в базе не найденно, измените запрос</b></h3></div>
    <?

}



while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):

    //если параметр "notFPL" = true то формируем данные по другому:

        if ($row['notFPL']== 1 ){
    ?>


<div id="<?php print_r($row['id']); ?>" name="<?php print_r($row['id']); ?>">
               <div class="row">

                   <div class="col-9"><h2>Имя FPL: <span id="fplName"><? print_r($row['fplName']) ?></span> </h2>
                       <div id="<?php print_r($row['id'])?>-FPL"></div></div>
                       <div class="col-3 text-right"><?php
                           //создаем кнопку редактированя или удаления
                           if($authorRequest == $_SESSION['user_login']){
                               ?>


                               <div class="dropdown show">
                                   <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Меню
                                   </a>

                                   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                       <button class="dropdown-item editFpl" id="editFpl" value="<?php print_r($row['id'])?>" href="#">Редактировать</button>
                                       <button class="dropdown-item deleteFpl" id="deleteFpl" value="<?php print_r($row['id'])?>" href="#">Удалить</>

                                   </div>
                               </div>


                               <?php
                           } ?>
                       </div>
               </div>

                <p></p>
                <p id="fplBody">
                    <?//15 поле
                    print_r($row['field15']);

                    ?> <br>

                                <p id="commentaries"><b><?//комментарий из базы
                        print_r($row['commentaries']);
                        ?></b></p>
            </div>



    <?php }else{

    ?>

<div id="<?php print_r($row['id']); ?>" name="<?php print_r($row['id']); ?>">
    <div class="row">

        <div class="col-9"><h2>Имя FPL: <span id="fplName"><? print_r($row['fplName']) ?></span> </h2>
            <div id="<?php print_r($row['id'])?>-FPL"></div></div>
        <div class="col-3 text-right"><?php
            //создаем кнопку редактированя или удаления
            if($authorRequest == $_SESSION['user_login']){
                ?>


                <div class="dropdown show">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Меню
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <button class="dropdown-item editFpl" id="editFpl" value="<?php print_r($row['id'])?>" href="#">Редактировать</button>
                        <button class="dropdown-item deleteFpl" id="deleteFpl" value="<?php print_r($row['id'])?>" href="#">Удалить</>

                    </div>
                </div>


                <?php
            } ?>
        </div>
    </div>

    <p id="fplBody"><?php print_r($row['field1']); ?> <br>
        -<?php //7 поле
        print_r($row['field7']); ?> <br>
        -<?php //13 поле
        print_r($row['field13']);
        print_r($row['timeDeparture']); ?><br>
        -<?php //16 поле
        print_r($row['field15']);
        ?> <br>
       -<?php //17 поле
        print_r($row['field16']);
        print_r($row['timeArrival']); ?> <?php print_r($row['alternative']); ?>
        <br>
        -<?php //18 поле
        print_r($row['field18']); ?>

    </p>

    <p id="commentaries"><b><?//комментарий из базы
            print_r($row['commentaries']);
            ?></b></p>
</div>




<?php }
endwhile;
?>

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

<div id="fplmodaledit"></div>
<script src="<?$_SERVER['DOCUMENT_ROOT'];?>/js/findFpl/findFplAJAX.js"></script>



