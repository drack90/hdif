<?php
/**
 * Created by PhpStorm.
 * User: drack
 * Date: 13.11.2019
 * Time: 12:29
 */

class viewFpl
{
    public static function compileFpl($row){

?>
        <?php print_r($row['field1']); ?>
        -<?//7 поле
        print_r($row['field7']); ?>
        -<?//13 поле
        print_r($row['field13']);
        print_r($row['timeDeparture']); ?>
        -<?//16 поле
        print_r($row['field15']);
        ?>
       -<? //17 поле
        print_r($row['field16']);
        print_r($row['timeArrival']); ?> <? print_r($row['alternative1']); ?> <? print_r($row['alternative2']); ?>
        -<?//18 поле
        print_r($row['field18']); ?>

     <?php

    }

}
?>