<?php session_start(); ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php';?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>

<?php


//Формируем Имя плана
$fplName = $_POST['FPL_name']; //имя ФПЛ
$author = $_SESSION['user_login']; //Имя автора
$commentaries = $_POST['commentaries']; //комментарий к ФПЛ
$id = $_POST['bdid'];

    //если переключатель не стандартных FPL включен, то выполняется скрипт:
    if (isset($_POST['notStsndartFPL1'])){
        //все поля ввода назначаем переменной $fullFPL
        $fullFPL = new parceRMK();
        $fullFPL = parceRMK::ParseRMK($_POST['field15']);
        $notFPL = 1;

        //формируем запрос в базу. 15 поле - используем как хранилище информации добавленной пользователем
        $sqlAddFPL = 'UPDATE default_fpl SET fplName=:fplName, 
                                              field15=:field15, 
                                              author=:author,
                                              commentaries=:commentaries 
                                        WHERE id=:id';


        $data = [':fplName' => $fplName,
                ':field15' => $fullFPL,
                ':author' => $author,
                ':commentaries' => $commentaries,
                ':id' => $id,
        ];


        $stmt = $pdo->prepare($sqlAddFPL);
        $stmt->execute($data);

        echo 'Данные обновленны';
        exit;

    }else{
        extract($_POST); //раскладываем пост на переменные с именем $key

        $field15 = parceRMK::ParseRMK($field15); //заменяем символ возврата коретки на <br>
        $field18 = parceRMK::ParseRMK($field18);

        $sqlEditFPL = 'UPDATE default_fpl SET fplName=:fplName,
                                              field1=:field1,
                                              field7=:field7,
                                              field13=:field13,
                                              field15=:field15,
                                              field16=:field16,
                                              alternative=:alternative,
                                              direction=:direction,
                                              commentaries=:commentaries,
                                              field18=:field18 
                                          WHERE id=:id';

    $params = [ ':fplName' => $fplName,
        ':field1' => $field1,
        ':field7' => $field7,
        ':field13' => $field13,
        ':field15' => $field15,
        ':field16' => $field16,
        ':alternative' => $alternative,
        ':direction' => $direction,
        ':commentaries' => $commentaries,
        ':field18' => $field18,
        ':id' => $id];



    $stmt = $pdo->prepare($sqlEditFPL);
    $stmt->execute($params);

    echo 'Данные обновлены';

    }

