<?php
// 7. Объединить элементы массива в строку 

// исходный массив
$array = array(
'Текст',
'который',
'разбит',
'на',
'элементы',
'массива'
);
// собираем элементы массива в строку
// и разделяем каждый элемент пробелом
$string = implode(' ', $array);
// вывод результата
echo $string; // "Текст который ..."





?>