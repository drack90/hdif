<?php
/**
 * Class refactorField9
 * This class refactor field 9 and return value
 * класс производит изменение поля 9 и возвращает формализированное значение
 */

class refactorField9
{
    public static function refactoringField9($val)
    {
        switch ($val) {
            case 'MI8':
                $val = 'MI8/M-S/N';
                break;
            case 'AS-50':
                $val = 'AS-50/L-NH/N';
                break;
            case 'AS-55':
                $val = 'AS-55/L-NH/N';
                break;
            case 'MI-26':
                $val = 'MI26/M-S/N';
        }
        return $val;
    }
}



