<?php
/**
 *This class change color class from css bootstrap 4
 *Класс выбора цвета для css
 */

class priorityColor
{

    public function colorSelect($val){

                if ($val == '2'){
            return 'alert-primary';

            }elseif ($val == '3') {
                return'alert-danger';

            }elseif ($val == '1') {
                return 'alert-success';
    }

}

}