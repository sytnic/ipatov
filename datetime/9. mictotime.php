<?php
// 9. Время выполнения скрипта

// засекаем начало выполнения скрипта
$start_time = microtime(true);

// код, время которого нужно замерить
// пример скрипта
for($i = 0; $i<1; $i+=0.000001);

// засекаем завершение выполнения скрипта
$finish_time = microtime(true);

// высчитываем разницу во времени
$result_time = $finish_time - $start_time;

// форматированный вывод результата
printf('Затрачено %.4F сек.', $result_time);




?>