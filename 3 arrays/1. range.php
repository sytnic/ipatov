<?php
// 1. Заполнение массива элементами из заданного диапазона

// заполнение массива элементами от 1 до 10
echo "<pre>";
$array = range(1, 10);
print_r($array);
echo "</pre>";

echo "<pre>";
// заполнение массива элементами от 5 до -5 с шагом 2
$array = range(5, -5, 2);
print_r($array);
echo "</pre>";

echo "<pre>";
// заполнение массива элементами от a до f
$array = range('a', 'f');
print_r($array);
echo "</pre>";

echo "<pre>";
// заполнение массива элементами от z до a с шагом 3
$array = range('z', 'a', 3);
print_r($array);
echo "</pre>";
?>