<?php
namespace App\classes\MyClass;

class GF_time
{

    static function microtime_float()
    {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }

    /**
     * Конвертация даты+время из формата БД в нормальный дата
     * @param string $date
     * @return string
     */
    static function convertDateTimeDBToDate($date)
    {
        $date_new = "";
        if ($date != "0000-00-00 00:00:00" and $date != '0000-00-00' && !empty($date)) {
            $date_new = Date("d.m.Y", strtotime($date));
        }
        return $date_new;
    }

    /**
     * Конвертация даты из нормального в дата в формат БД
     * @param string $date
     * @return string
     */
    static function convertDateToDateTimeDB($date)
    {
        $date_new = "0000-00-00 00:00:00";
        if ($date != "") {
            $date_new = Date("Y-m-d h:m:s", strtotime($date));
        }
        return $date_new;
    }

}
