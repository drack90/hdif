<?php session_start(); ?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/requireplugins.php'; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php'; ?>



<?php

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
    $sqlReq .= ' LIMIT 50';
    $complete_sql = $sqlReq;

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
                <p><h2>Имя FPL: <? print_r($row['fplName']) ?> </h2></p>
                <p></p>
                <p>
                    <?//15 поле
                    print_r($row['field15']);

                    ?> <br>

                                <p><b><?//комментарий из базы
                        print_r($row['commentaries']);
                        ?></b></p>
            </div>


        <?php }
            ?>

<div id="<?php print_r($row['id'])?>-FPL"><?php
    //создаем кнопку редактированя или удаления
    if($authorRequest == $_SESSION['user_login']){
        ?>

        <div class="">
            <div class="more">
                <button id="more-btn" class="more-btn">
                    <span class="more-dot"></span>
                    <span class="more-dot"></span>
                    <span class="more-dot"></span>
                </button>
                <div class="more-menu">
                    <div class="more-menu-caret">
                        <div class="more-menu-caret-outer"></div>
                        <div class="more-menu-caret-inner"></div>
                    </div>
                    <ul class="more-menu-items" tabindex="-1" role="menu" aria-labelledby="more-btn" aria-hidden="true">
                        <li class="more-menu-item" role="presentation">
                            <button type="button" class="more-menu-btn" role="menuitem">Share</button>
                        </li>
                        <li class="more-menu-item" role="presentation">
                            <button type="button" class="more-menu-btn" role="menuitem">Copy</button>
                        </li>
                        <li class="more-menu-item" role="presentation">
                            <button type="button" class="more-menu-btn" role="menuitem">Embed</button>
                        </li>
                        <li class="more-menu-item" role="presentation">
                            <button type="button" class="more-menu-btn" role="menuitem">Block</button>
                        </li>
                        <li class="more-menu-item" role="presentation">
                            <button type="button" class="more-menu-btn" role="menuitem">Report</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

       <?php
        } ?>

<div id="<?php print_r($row['id']); ?>" name="<?php print_r($row['id']); ?>">
    <p><h2>Имя FPL: <? print_r($row['fplName']) ?> </h2></p>
    <p></p>
    <p><?php print_r($row['field1']); ?> <br>

        -<?//7 поле

        print_r($row['field7']); ?> <br>


        -<?//13 поле
        print_r($row['field13']);
        print_r($row['timeDeparture']); ?><br>


        -<?//16 поле
        print_r($row['field15']);

        ?> <br>

        -<? //17 поле
        print_r($row['field16']);
        print_r($row['timeArrival']); ?> <? print_r($row['alternative1']); ?> <? print_r($row['alternative2']); ?>
        <br>
        -<?//18 поле
        print_r($row['field18']); ?>

    </p>

    <p><b><?//комментарий из базы
            print_r($row['commentaries']);
            ?></b></p>
</div>




<?php
endwhile;
?>


