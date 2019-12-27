<?php

class postFpl extends parceRMK
{
    public $fplName;
    public $author;
    public $commentaries;
    public $direction;
    public $fullFpl;

    public function __construct()
        {
            $this->fplName=$_POST['FPL_name'];
            $this->author = $_SESSION['user_login'];
            $this->commentaries = $_POST['commentaries'];
            $this->direction = $_POST['direction'];
        }

        //класс определяет какой тип Fpl был передан
    public function defineTypeFpl()
        {
            if (isset($_POST['notStandartFPL'])){
                $this->postNotStandartFpl();
            }else{
                $this->postStandartFpl();
            }
        }

            //подготавливается текст для передачи в БД
        public function prepareNotStandartFpl()
        {
            $fullFpl = $_POST['FPL'];
            $fullFpl = new parceRMK();
            $fullFpl = parceRMK::ParseRMK($this->fullFpl);
            return $fullFpl;
        }

            //производит запись не формализованного FPL в БД
        private function postNotStandartFpl()
        {
            //вызываем метод подготовки нестандартного ФЛП.
            $fullFPL = $this->prepareNotStandartFpl();
            require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";


            //формируем запрос в базу. 15 поле - используем как хранилище информации добавленной пользователем
            $sqlAddFPL = 'INSERT INTO default_fpl(fplName,field15,author,direction,commentaries,notFPL) 
                                    VALUES (:fplName,:field15,:author,:direction,:commentaries,:notFPL)';

            $params = [':fplName' => $this->fplName,
                ':field15' => $fullFPL,
                ':author' => $this->author,
                ':direction' => $this->direction,
                ':commentaries' => $this->commentaries,
                ':notFPL' => '1',
            ];


            $stmt = $pdo->prepare($sqlAddFPL);
            $stmt->execute($params);

            echo 'Данные добавлены в БД.';

        }

            //Производит разбиение текста на формализованный массив, для того, что бы записать в БД
        public function prepareStandartFpl ()
        {
            //раскладываем FPL на составные - разделителем является "-"
            $fplArray = explode('-',$_POST['FPL']);

            /** проверяем количество эллементов массива - если массив, сформировался с меньшим количеством элементов
            скоре всего это либо неформализованный FPL либо - в FPL изначально допущена ошибка. */

                if (count($fplArray) < 7 or count($fplArray) >9 ){
                    die('Требуется отметить параметр "не стандартный ФПЛ", для корректного добавления информации в базу.');
                }

            //формируем первую строку FPL в БД
            $field1 = $fplArray[0].'-'.$fplArray[1].'-'.$fplArray[2];

            //формируем поле7 (опозновательный индекс ВС)
            $field7 = $fplArray[3].'-'.$fplArray[4];

            /**формируем 13 поле (пункт вылета - время вылета
             * т.к. документ формализированный и других данных в поступить не может - то,
             * мы используем метод по буквенной разбивки и назначение данных переменным
             * */
            $str13 = preg_split('//', $fplArray[5], 0, PREG_SPLIT_NO_EMPTY);
            $field13 = $str13[0].$str13[1].$str13[2].$str13[3];
            $timeDeparture = $str13[4].$str13[5].$str13[6].$str13[7];

            //формируем поле 15, используем класс ParseRMK что бы заменить все символы возврата каретки на символы <br>
            new parceRMK();
            $field15 = parceRMK::ParseRMK($fplArray[6]);


            //формирование поля 16

            //разбиваем на составные части по пробелу
            $str16 = preg_split('/ /', $fplArray[7], 0, PREG_SPLIT_NO_EMPTY);
            //фильтруем массив с 4 буквы и 4 цифры и назначаем цифры переменной "timeArrival" получаем время взлёта
            $timeArrival1 = preg_split('/[^0-9\-\/]/', $str16[0], 0, PREG_SPLIT_NO_EMPTY);
            $timeArrival = $timeArrival1[0];
            //фильтруем массив и назначаем 4 буквы переменной "field16" - получаем Пункт вылета
            $field16 = preg_split('/[^A-Z\-\/]/', $str16[0], 4, PREG_SPLIT_NO_EMPTY);
            $field16 = $field16[0];
            //назначаем альтернативные аэропорты

            //проверяется если строики пустые, то заменяем NULL на пробел для корректного отображения.
            if ($str16[1] == '') {
                $str16[1] = ' ';
            }
            if ($str16[2] == '') {
                $str16[2] = ' ';
            }
            $alternative = $str16[1].' '.$str16[2];

            //формируем 18 поле
            $field18 = $fplArray[8];
            new parceRMK();
            $field18 = parceRMK::ParseRMK($field18);


            $fplArray = ['field1' => $field1,
                'field7' => $field7,
                'field13' => $field13,
                'field15' => $field15,
                'field16' => $field16,
                'field18' => $field18,
                'timeDeparture' => $timeDeparture,
                'timeArrival' => $timeArrival,
                'alternative' => $alternative];

            return $fplArray;
        }

            //производит запись формализированного FPL в БД
    private function postStandartFpl()
        {
            $fplArray = $this->prepareStandartFpl();
            require $_SERVER["DOCUMENT_ROOT"] . "/php/config/config.php";
            //раскладываем полученный массив на переменные
            extract($fplArray, EXTR_OVERWRITE);



            $sqlAddFPL = 'INSERT INTO default_fpl(fplName,field1,field7,field13,timeDeparture,field15,field16,
                                                timeArrival,alternative,author,direction,commentaries,field18) 
                                        VALUES (:fplName,:field1,:field7,:field13,:timeDeparture,:field15,:field16,
                                        :timeArrival,:alternative,:author,:direction,:commentaries,:field18)';

            $params = [ ':fplName' => $this->fplName,
                ':field1' => $field1,
                ':field7' => $field7,
                ':field13' => $field13,
                ':timeDeparture' => $timeDeparture,
                ':field15' => $field15,
                ':field16' => $field16,
                ':timeArrival' => $timeArrival,
                ':alternative' => $alternative,
                ':author' => $this->author,
                ':direction' => $this->direction,
                ':commentaries' => $this->commentaries,
                ':field18' => $field18];




            $stmt = $pdo->prepare($sqlAddFPL);
            $stmt->execute($params);

            echo 'Данные добавлены в Базу.';
        }
            //записать FPL
        public function addFpl()
        {
            $this->defineTypeFpl();

        }
    }