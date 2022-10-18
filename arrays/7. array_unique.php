<?php
// 7. Удалить повторяющиеся элементы в массиве

// исходный массив
$array = array(10, 20, 10, 20, 10, "a", "b", "a");

// удаление. Обычное сравнение элементов
$array_1 = array_unique($array); // 10, 20, a, b
print_r($array_1);

// удаление. Сравнение элементов как чисел
$array_2 = array_unique($array, SORT_NUMERIC);
print_r($array_2);  // 10, 20, a 

// удаление. Сравнение элементов как строк
$array_3 = array_unique($array, SORT_STRING);
print_r($array_3);  // 10, 20, a, b


?>