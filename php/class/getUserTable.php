<?php
/**
 * Данный класс производит поиск и отображение всех пользователей
 */

class getUserTable

{



    public static function getDataUserInDb(){

        require $_SERVER["DOCUMENT_ROOT"] . '/php/config/config.php';
        $reqSql = "SELECT * FROM users";
        $stmt = $pdo->prepare($reqSql);
        $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                ?>
                <tr>
                <th scope="row"><?php print_r($row['id']);?></th>
                <td class="text-left"><?php print_r($row['login']);?></td>
                <td><?php print_r($row['firstName']);?></td>
                <td><?php print_r($row['lastName']);?></td>
                <td><?php print_r($row['telephone']);?></td>
                <td><button type="button" class="deleteUser close_red " data-dismiss="alert" aria-label="Close"
                            data-toggle="Close" data-placement="top" title="закрыть"
                            value="<?php print_r($row['id']); ?>">
                        <span aria-hidden="true">&times;</span>
                    </button></td>
                </tr>

                <?php

            }
        }


public static function lookData(){
    $obj = new getUserTable();
    $obj ->getDataUserInDb();




}
}