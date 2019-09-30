<?php session_start(); ?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/requireplugins.php'; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php'; ?>



<?php

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


while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):?>


    <p><h2>Имя FPL: <? print_r($row['FPL_name']) ?> </h2></p>
    <p></p>
    <p>(FPL-NFTXXXX-VN <br>

        -<?//9 поле
        //производим замену значения MI8, AS-50, AS55, MI26 на формализованные
        $val = new refactorField9();
        echo $val->refactoringField9($row['helicopter_model']); ?> <br>


        -<?//15 поле
        print_r($row['departure']);
        print_r($row['timetogo']); ?><br>


        -<?//16 поле
        $str = new parceRMK();
        echo $str->parseRMK($row['route']);

        ?> <br>

        -<? //17 поле
        print_r($row['arrival']);
        print_r($row['endtime']); ?> <? print_r($row['alternative1']); ?> <? print_r($row['alternative2']); ?>
        <br>
        -<?//18 поле
        $str1 = $str->deleteDash($row['remark']);
        echo $str->parseRMK($str1); ?>

    </p>

    <p><b><?//комментарий из базы
            echo $str->parseRMK($row['commentaries']);
            ?></b></p>

<?php
endwhile;
?>


