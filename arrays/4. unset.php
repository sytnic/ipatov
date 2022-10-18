<?php
// 4. Удаление элементов массива

// исходный массив
$array = array(10, 20, 30, 40, 50);

// удаляем элемент с индексом 2
unset($array[2]);

// выводим массив
echo "<pre>";
print_r($array);
echo "</pre>";

// переиндексируем массив
$array = array_values($array);

// еще раз выводим массив
echo "<pre>";
print_r($array);
echo "</pre>";



?>