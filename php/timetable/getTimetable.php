<?php
session_start();
require $_SERVER["DOCUMENT_ROOT"] . "/php/auth/check_auth.php";
require $_SERVER["DOCUMENT_ROOT"] . "/php/require/requireplugins.php";
require $_SERVER['DOCUMENT_ROOT'] . '/php/class/autoloadClass.php';
require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";
?>
<style type="text/css">
    TABLE {
        border-collapse: collapse; /* Убираем двойные линии между ячейками */
        /*  width: 600px; Ширина таблицы */
    }
    TH, TD {
        font-size: 12px;
        border: 1px solid black; /* Параметры рамки */
        text-align: center; /* Выравнивание по центру */
        padding: 4px;/* Поля вокруг текста */
        min-height: 15px;
        min-width: 15px;
    }
    TH {
        height: 40px; /* Высота ячеек */
        vertical-align: bottom; /* Выравнивание по нижнему краю */
        padding: 0; /* Убираем поля вокруг текста */
    }
</style>
<?php
//открываем таблицу
echo '<table>
  <tr>';

//URL на publish в google spreedsheet https://script.google.com/macros/s/AKfycbwLJcZZlJZJYj4R3rER2NTk7L8nNqbNWVwS7xykyzO7SlvpOmMo/exec
$url = 'https://script.googleusercontent.com/macros/echo?user_content_key=HyULrIOCWSInBGgsOoNCFyDI1Rz13Hn8h1nqKJzTq2W4lLazWBLrsl0A3G-qAvT39gSYypaPyLckghJaB4p8eHL2ZR10xwvsm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnK4ly8N7pSYRAUujASiwaTzZ9VaZVX9KFEQVCwsYzENkmWVyoL4bPVwl4vWl6zNiZZNyBHloQ6QB&lib=MQRtKUcLmF94k7evAep7sFgBCt-0dLl1R';
$result = file_get_contents($url);

$result = json_decode($result, true);
echo '<br>';
$_SESSION['lastName'] = 'Заводов'; //берем зна  чения из переменной сесии

// убираем месяц из масива

$month = $result['result'][0];
unset($result['result'][0]);
//выводим только месяц
echo '<div class="h2 text-primary text-center"><b>';
print_r($month[0]);
echo '</b></div>';
//производим выборку даты

$dataLine = $result['result'][1];
unset ($result['result'][1]);
//print_r($dataLine);

foreach ($dataLine as $val) {


    if ($val == date('j')){
                    echo '<td bgcolor= #E4E533>';
                    echo '<b>'.$val.'</b>';
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


exit;

//фориач резултс 12

//и напоследок выведем информацию о переменной с помощью var_dump

//var_dump($result);

?>
