<?php
// 6. Разница между датами в днях

// первая дата(текущая)
$date_1 = date("Y-m-d");
// вторая дата
$date_2 = "2022-07-07";

// перевод дат в формат timestamp
$date_timestamp_1 = strtotime($date_1);
$date_timestamp_2 = strtotime($date_2);

// разница в секундах
$diff = $date_timestamp_1 - $date_timestamp_2;
// берем модуль, возможно значение с минусом
$diff = abs($diff);

// Высчитываем количество дней
// 3600 сек = 1 час
// и округляем до целых
$diff_day = intval($diff / (3600 * 24));

// вывод количества дней
echo $diff_day;


?>