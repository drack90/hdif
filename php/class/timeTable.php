<?php


class timeTable
{
    public $result;
    public $lastName;
    public $month;
    public $numberMonth;




    public function __construct()
    {

        $url = 'https://script.googleusercontent.com/macros/echo?user_content_key=HyULrIOCWSInBGgsOoNCFyDI1Rz13Hn8h1nqKJzTq2W4lLazWBLrsl0A3G-qAvT39gSYypaPyLckghJaB4p8eHL2ZR10xwvsm5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnK4ly8N7pSYRAUujASiwaTzZ9VaZVX9KFEQVCwsYzENkmWVyoL4bPVwl4vWl6zNiZZNyBHloQ6QB&lib=MQRtKUcLmF94k7evAep7sFgBCt-0dLl1R';


        $this->result = file_get_contents($url);
        $this->result = json_decode($this->result, true);
        $this->lastName = $_SESSION['lastName'];



    }

    //назначаем переменную месяца
    public function setMonth()
    {
        $this->month = $this->result['result'][0];
        unset($this->result['result'][0]);
        return $this->month;
    }

    //получаем номер заданного месяца
    public function setNumberMonth($month)
    {

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
        $this->numberMonth = $this->month[0];
        $this->numberMonth = trim($this->numberMonth);
        //назначаем номер ключа в массив $numberMonth
        $this->numberMonth =  array_search($this->numberMonth, $setMonth);
        return $this->numberMonth;
    }







}