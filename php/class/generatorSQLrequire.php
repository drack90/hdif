<?php
/**
 * Created by PhpStorm.
 * User: Zavodovs
 * Date: 29.09.2019
 * Time: 0:22
 * this class formalising search fly plan for findFplProcessor.php
 * Данный класс формализирует поиск флай планов для страницы findFplProcessor
 */

class generatorSQLrequire
{

    /**
     * данный цикл производит генерацию запроса как и первый, но с учетом того
     * что запрос будет передаваться в PDO
     * финальная строка получится такая
     * SELECT * FROM default_fpl WHERE departure LIKE :departure AND route LIKE :route LIMIT 50
     */
    public static function generateSQLRequest()
    {

        //проходимся по массиву $_POST и проверяем элементы массива
        //если элементы пустые - пропускаем, если элементы имеют какое то значение добавляем к ним ключ и добавляем к переменной $where
        foreach ($_POST as $key => $val) {
            if (!empty($val)) {
                if (!empty($where))
                    $where .= ' && ';
                $column = trim($key, ':');
                $key = ':' . $key;
                $where .= "$column LIKE $key";

            }
        }

        if (!empty($where)) {
            $sql = '';
            $sql .= ' WHERE ' . $where;
            $sql .= ' LIMIT 50';
            $complete_sql = $sql;

        }


        return $complete_sql;

    }

    //в цикле формируем массив params который используется для PDO
    public static function generateParamsFromPDO()
    {
        foreach ($_POST as $key => $val) {
            if (!empty($val)) {
                $params[':' . $key] = '%' . $val . '%';

            }
        }

        return $params;

    }

}