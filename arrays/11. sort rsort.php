<?php
// 11. Сортировка массивов

echo "sort";
// исходный массив
$array = array(5, 1, 7, 2, 6, 3, 8, 4);
// сортировка по возрастанию
sort($array);
// вывод результата
echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";

echo "rsort";
// исходный массив
$array = array(5, 1, 7, 2, 6, 3, 8, 4);
// сортировка по убыванию
rsort($array);
// вывод результата
echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";

echo "shuffle";
// исходный массив
$array = array(5, 1, 7, 2, 6, 3, 8, 4);
// перемешивает элементы в случайном порядке
shuffle($array);
// вывод результата
echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";

echo "array_reverse";
// исходный массив
$array = array('a'=>5, 'b'=>1, 7, 'c'=>3, 4);
// сортировка в обратном порядке
$array = array_reverse($array);
// вывод результата
echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";

echo "asort";
// исходный массив
$array = array('b' => 1, 'a' => 3, 2, 'c' => 4);
// сортировка ассоциативного массива по возрастанию
// перемешивает и значения вместе с ключами(индексами)
asort($array);
// вывод результата
echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";

echo "arsort";
// исходный массив
$array = array('b' => 1, 'a' => 3, 2, 'c' => 4);
// сортировка ассоциативного массива по убыванию
// перемешивает и значения вместе с ключами(индексами)
arsort($array);
// вывод результата
echo "<pre>";
print_r($array);
echo "</pre>";

echo "<hr>";

echo "ksort";
$array = array('b' => 1, 'a' => 3, 'c' => 2);
// сортировка ассоциативного массива
// по возрастанию ключей(индексов)
// перемешивает и ключи(индексы) и значения
ksort($array);
// вывод результата
echo "<pre>";
print_r($array);
echo "</pre>";

?>