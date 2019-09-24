<?php
//включаем файл класса pagination
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";

//включаем файл конфигурации базы данных

$limit = 5;
$offset = !empty($_GET['page'])?(($_GET['page']-1)*$limit):0;
//получаем количество записей
$queryNum = ("SELECT COUNT(*) as id FROM journal");
$queryNum = $pdo-> prepare($queryNum);
$queryNum->execute();
$resultNum = $queryNum->fetch(PDO::FETCH_ASSOC);
$rowCount = $resultNum['postNum'];

$pagination =  new Pagination($pagConfig);
//получаем записи
$query = ("SELECT * FROM journal ORDER BY id DESC LIMIT $offset,$limit");
$query = $pdo-> prepare($query);
$query->execute();
?>
    <div class="posts_list">
        <?php while($row = $query->fetch(PDO::FETCH_ASSOC)){ ?>
            <div class="list_item"><a href="javascript:void(0);"><?php echo $row['text']; ?> ну или что то ещё</a></div>
        <?php } ?>
    </div>
    <!-- отображаем ссылки на страницы -->
    <?php echo $pagination->createLinks(); ?>
