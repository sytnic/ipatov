<?php
// Получить дату первого и последнего дня месяца

// Получение даты первого дня текущего месяца
echo date('Y-m-01') . "<br/>";
// Получение даты последнего дня текущего месяца
echo date('Y-m-t') . "<br/>";
// Получение даты первого дня предыдущего месяца
echo date("Y-m-01", strtotime("-1 month")) . "<br/>";
// Получение даты последнего дня предыдущего месяца
echo date("Y-m-t", strtotime("-1 month")) . "<br/>";
// Получение даты первого дня следующего месяца
echo date("Y-m-01", strtotime("+1 month")) . "<br/>";
// Получение даты последнего дня следующего месяца
echo date("Y-m-t", strtotime("+1 month"));



?>