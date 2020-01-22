<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . "/php/auth/check_auth.php";
require $_SERVER["DOCUMENT_ROOT"] . "/php/require/requireplugins.php";
require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php';
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";
?>

<?php
//открываем таблицу
echo '<table>
  <tr>';

$data = new timeTable();
$month = $data->setMonth();
$numberMonth = $data->setNumberMonth($month);

echo $month . "   " . $numberMonth;

exit;
//URL на publish в google spreedsheet https://script.google.com/macros/s/AKfycbwLJcZZlJZJYj4R3rER2NTk7L8nNqbNWVwS7xykyzO7SlvpOmMo/exec
$url = 'https://script.googleusercontent.com/macros/echo?user_content_key=HyULrIOCWSInBGgsOoNCFyDI1Rz13Hn8h1nqKJzTq2W4lLazWBLrsl0A3G-qAvT39gSYypaPyLckghJaB4p8eHL2ZR10xwvsm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnK4ly8N7pSYRAUujASiwaTzZ9VaZVX9KFEQVCwsYzENkmWVyoL4bPVwl4vWl6zNiZZNyBHloQ6QB&lib=MQRtKUcLmF94k7evAep7sFgBCt-0dLl1R';
$result = file_get_contents($url);

$result = json_decode($result, true);
echo '<br>';
$_SESSION['lastName'] = 'Заводов'; //берем зна  чения из переменной сесии

// убираем месяц из масива

$month = $result['result'][0];
unset($result['result'][0]);
//массив сдержащий все названия месяцов
$setMonth = [1 =>   "Январь",
             2 =>   "Февраль",
             3 =>   "Март",
             4 =>   "Апрель",
             5 =>   "Май",
             6 =>   "Июнь",
             7 =>   "Июль",
             8 =>   "Август",
             9 =>   "Сентябрь",
             10 =>   "Октябрь",
             11 =>   "Ноябрь",
             12 =>   "Декабрь"];

//убираем все что может нам по мешать.
$month1 = $month[0];
$month1 = trim($month1);
//назначаем номер ключа в массив $numberMonth
$numberMonth =  array_search($month1, $setMonth);


//выводим только месяц
echo '<div class="h2 text-primary text-center"><b>';
print_r($month[0]);
echo '</b></div>';


//производим выборку даты


$dataLine = $result['result'][1];
unset ($result['result'][1]);
//print_r($dataLine);
//Проверяем массив с датами
$year = date('Y');

foreach ($dataLine as $val) {

    //если дата равняется дате "сегодня" отмечаем её красным цветом
    if ($val == date('j')){
                    echo '<td bgcolor= #ff0000>';
                    echo '<b>'.$val.'</b>';
                    echo '</td>';
     //определяем день недели каждой даты и если они входят в викенд - отмечаем желтым.
    }elseif(date('N', mktime(0,0,0, $numberMonth, (int)$val, $year)) == 6
            or
            date('N', mktime(0,0,0, $numberMonth, (int)$val, $year)) ==7){
                    echo "<td bgcolor= #E4E533>";
                    echo $val;
                    echo '</td>';
    }else{
        echo "<td>";
        echo $val;
        echo '</td>';
    }

}
echo '</tr>';




//перебираем ФИО и график
foreach($result as $value){




    foreach($value as $value){


        if ($value[1] == $_SESSION['lastName']){
            echo '<tr bgcolor="cyan">';
        }else{
            echo '<tr>';
        }
        foreach($value as $val){


            // if ($_SESSION['lastName'] == $value  ){
            //     echo '<td bgcolor= #3ee664>';
            //                          echo $value;
            //                          echo '</td>';


            // }else{
            //      echo "<td>";
            //                          echo $value;
            //                       echo '</td>';
            // }

            switch ($val) {
                case $_SESSION['lastName'] :
                    echo '<td bgcolor= #3ee664>';
                    echo $val;
                    echo '</td>';
                    break;

                default:
                    echo "<td>";
                    echo $val;
                    echo '</td>';
                    break;
            }




        }

        echo '</tr>';


    }
}

echo '<br><br>';



//фориач резултс 12

//и напоследок выведем информацию о переменной с помощью var_dump

//var_dump($result);

?>
