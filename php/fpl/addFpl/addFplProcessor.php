<?php session_start(); ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php';?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php"; ?>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/php/require/requireplugins.php'; ?>

<?php
//Формируем Имя плана
$fplName = $_POST['FPL_name']; //имя ФПЛ
$author = $_SESSION['user_login']; //Имя автора
$commentaries = $_POST['commentaries']; //комментарий к ФПЛ
$direction = $_POST['direction']; // Дирекция



//раскладываем FPL на составные - разделителем является "-"
    $fplArray = explode('-',$_POST['FPL']);

//формируем первую строку FPL в БД
    $field1 = $fplArray[0].'-'.$fplArray[1].'-'.$fplArray[2];

//формируем поле7 (опозновательный индекс ВС)
    $field7 = $fplArray[3].' '.$fplArray[4];

/**формируем 13 поле (пункт вылета - время вылета
 * т.к. документ формализированный и других данных в поступить не может - то,
 * мы используем метод по буквенной разбивки и назначение данных переменным
 * */
    $str13 = preg_split('//', $fplArray[5], 0, PREG_SPLIT_NO_EMPTY);
    $field13 = $str13[0].$str13[1].$str13[2].$str13[3];
    $timeDeparture = $str13[4].$str13[5].$str13[6].$str13[7];

//формируем поле 15, используем класс ParseRMK что бы заменить все символы возврата каретки на символы <br>
    $field15 = new parceRMK();
    $field15 = parceRMK::ParseRMK($fplArray[6]);

//формирование поля 16

    //разбиваем на составные части по пробелу
    $str16 = preg_split('/ /', $fplArray[7], 0, PREG_SPLIT_NO_EMPTY);
    //фильтруем массив с 4 буквы и 4 цифры и назначаем цифры переменной "timeArrival" получаем время взлёта
    $timeArrival = preg_split('/[^0-9\-\/]/', $str16[0], 0, PREG_SPLIT_NO_EMPTY);
    //фильтруем массив и назначаем 4 буквы переменной "field16" - получаем Пункт вылета
    $field16 = preg_split('/[^A-Z\-\/]/', $str16[0], 4, PREG_SPLIT_NO_EMPTY);
    //назначаем альтернативные аэропорты
    $alternative1 = $str16[1];
    $alternative2 = $str16[2];

//формируем 18 поле
    $field18 = $fplArray[8];
    $field118 = new parceRMK();
    $field18 = parceRMK::ParseRMK($field18);

/**элемент тестирования будет использован для вывода ФПЛ из базы.
echo $field1;
echo '<br>';
echo '-'.$field7;
echo '<br>';
echo '-'.$field13.$timeDeparture;
echo '<br>';
echo '-'.$field15;
echo '<br>';
echo '-'.$field16[0].$timeArrival[0].' '.$alternative1.' '.$alternative2;
echo '<br>';
echo '-'.$field18;
*/
    $sqlAddFPL = 'INSERT INTO default_fpl(fplName,field1,field7,field13,timeDeparture,field15,field16,
                                            timeArrival,alternative1,alternative2,author,direction,commentaries) 
                                    VALUES (:fplName,:field1,:field7,:field13,:timeDeparture,:field15,:field16,
                                    :timeArrival,:alternative1,:alternative2,:author,:direction,:commentaries)';

    $params = [ ':fplName' => $fplName,
                ':field1' => $field1,
                ':field7' => $field7,
                ':field13' => $field13,
                ':timeDeparture' => $timeDeparture,
                ':field15' => $field15,
                ':field16' => $field16,
                ':timeArrival' => $timeArrival,
                ':alternative1' => $alternative1,
                ':alternative2' => $alternative2,
                ':author' => $author,
                ':direction' => $direction,
                ':commentaries' => $commentaries];
    
    
    $stmt = $pdo->prepare($sqlAddFPL);
    $stmt->execute($params);

    echo 'Fly plan добавлен в базу';
    


