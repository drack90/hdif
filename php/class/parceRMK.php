<?php

/**
 * Class parceRMK
 * class refactor value and refactor 'enter', because MySQL return '\n', php don't read this symbol
 * Класс производит изменение пременной в которой содержится символ возврата коретки в данных возвращаемых из MySQL
 * т.к. php не обрабатывает данный символ автоматически при выводе в html
 */

class parceRMK
{
    /**
     * @param $str
     * @return mixed
     * Function return tag '<br>' instead '\n'
     * Функция производит замену символа возврата коретки на тег <br>
     */
    public static function ParseRMK($str)
    {



//         if(substr($str,0,1) =='-') {
//            $str = (substr($str,1));
//         }

        $search = ["\n"];
        $replace = ["<br>"];
        $str = str_replace($search, $replace, $str);



        return $str;
    }

    /**
     * @param $str
     * @return bool|string
     * this function delete symbol '-' if he copy in BD
     * Фунция производит удаление символа '-' если он был добавлен в БД вместе с данными
     */

    public static function deleteDash($str){

        if(substr($str,0,1) == '-') {
            $str = (substr($str, 1));
            return $str;
        }
        return $str;
    }
}