<?php
// 10. Сравнение массивов

// первый массив
$array_1 = array(10, 20, 30, 40);
// второй массив
$array_2 = array(10, 50, 20, 60);
// ищем отличия первого массива от второго
$array_diff = array_diff($array_1, $array_2);
// вывод результата
print_r($array_diff);
// Array ( [2] => 30 [3] => 40 )

// ищем схожие элементы первого массива
// с элементами второго
$array_intersect = array_intersect($array_1,
$array_2);
// вывод результата
print_r($array_intersect);
// Array ( [0] => 10 [1] => 20 )




?>