<?php
// 5. Сравнение дат

// текущая дата на сервере
$date_1 = date("Y-m-d");
// вторая дата, с которой будет сравнение
$date_2 = "2014-10-21";
// перевод дат в формат timestamp
$date_timestamp_1 = strtotime($date_1);
$date_timestamp_2 = strtotime($date_2);
echo "date_timestamp_1: $date_timestamp_1<br>";
echo "date_timestamp_2: $date_timestamp_2<br>";
// сравниваем
if ($date_timestamp_1 > $date_timestamp_2) {
    echo "Первая дата больше";
    } else if ($date_timestamp_1 < $date_timestamp_2) {
    echo "Вторая дата больше";
    } else {
    echo "Даты равны";
}
?>