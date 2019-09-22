<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/auth/check_auth.php";?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>

<?php
	$geopointName = $_POST['geopointName'];
    $percent = '%';
    $geopointName = $percent.$geopointName.$percent;
//function searchGeopoint($pdo){


	if(!empty($_POST['geopointName'])) {

        $searchGeopointSql = "SELECT * FROM geopoint WHERE name LIKE :name LIMIT 50";
        $params = [':name' => $geopointName];
        //$stmt->bindValue(':name', '%' . $geopointName . '%');
        $stmt = $pdo->prepare($searchGeopointSql);
        $stmt->execute($params);



        ?>

        <table class="table table-striped table-bordered table-hover">

            <thead>
            <tr>
                <th scope="col-1">ID</th>
                <th scope="col-2">Имя</th>
                <th scope="col-3">Координата</th>
                <th scope="col-6">Комментарий</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {


                ?>

                <div class="label-default">

                    <tr>
                        <th scope="row"><? print_r($row['id']); ?></th>
                        <td><? print_r($row['name']); ?></td>
                        <td><? print_r($row['geopoint']); ?></td>
                        <td>
                            <label for="<? print_r($row['comment']); ?>" class="label-default"></label>
                            <? print_r($row['comment']); ?>
                        </td>
                    </tr>
                </div>


                <?php

            }
            ?>

            </tbody>
        </table>

        <?php
    }else{
            echo '<h3>Введите запрос</h3>';

    }

	// catch(PDOException $e) {
	//     print $e->getMessage();
	// }


//searchGeopoint($pdo);

	?>
	
