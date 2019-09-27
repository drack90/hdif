<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/requireplugins.php'; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/refactorField9.php'; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/parceRMK.php'; ?>

<?php
//получаем данные из строк поиска
/* Задача: требуется осуществлять поиск по БД FPL поиск должен осуществляться как по
отдельным элементам базы, так и по всем введеным параметрам.**/


$remark = htmlspecialchars($_POST['remark']);
$arrival = htmlspecialchars($_POST['arrival']);
$route = htmlspecialchars($_POST['route']);
$comment = htmlspecialchars($_POST['comment']);
$fplname = htmlspecialchars($_POST['name']);
$percent = '%';


//добавляем символ % с двух сторон переменной для того что бы поиск происходил
// по всем данным имеющий подобный порядок символов

$arrival .= $percent . $arrival . $percent;
$route = $percent . $route . $percent;
$comment = $percent . $comment . $percent;
$fplname = $percent . $comment . $percent;
$remark = $percent . $remark . $percent;


$sql = "SELECT * FROM default_fpl ";
$where = '';


//данный цикл должен производить генерацию запроса как и первый, но с учетом того
// что запрос будет передаваться в PDO
//финальная строка получится такая
// SELECT * FROM default_fpl WHERE departure LIKE :departure AND route LIKE :route LIMIT 50

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
    $sql .= ' WHERE ' . $where;
    $sql .= ' LIMIT 50';
    $fsql = $sql;

}
//в цикле формируем массив params который используется для PDO

foreach ($_POST as $key => $val) {
    if (!empty($val)) {
        $params[':' . $key] = '%' . $val . '%';
    }
}


$stmt = $pdo->prepare($fsql);
$stmt->execute($params);
$executeRow = $stmt->rowCount();

if ($executeRow == 0) {
    ?>
    <div class="text-center">
        <br><br><br>
        <h3><b>Данных в базе не найденно, измените запрос</b></h3></div>
    <?

}
//  как сделать так что бы можно было использовать IF в данном месте т.е. если база не вернула ответов
// то выводилось бы сообщение.

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {


    ?>


    <p><h2>Имя FPL: <? print_r($row['FPL_name']) ?> </h2></p>
    <p></p>
    <p>(FPL-NFTXXXX-VN <br>

        -<? //производим замену значения MI8, AS-50, AS55, MI26 на формализованные
        $val = new refactorField9();
        echo $val->refactoringField9($row['helicopter_model']); ?> <br>

        -<? print_r($row['departure']);
        print_r($row['timetogo']); ?><br>


        -<? $str = new parceRMK();
        echo $str->parseRMK($row['route']);

        ?> <br>

        -<? print_r($row['arrival']);
        print_r($row['endtime']); ?> <? print_r($row['alternative1']); ?> <? print_r($row['alternative2']); ?>
        <br>
        -<? $str1 = $str->deleteDash($row['remark']);
        echo $str->parseRMK($str1); ?>

    </p>

    <p><b><?
            echo $str->parseRMK($row['commentaries']);
            ?></b></p>

    <?php

}

?>


