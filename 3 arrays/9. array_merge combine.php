<?php
// 9. Объединение массивов

// массив, значения которого будут использованы
// как ключи
$array_keys = array('key_0', 'key_1', 'key_2');
// массив, значения которого будут использованы
// как значения
$array_values = array('val_0', 'val_1', 'val_2');

// создаем новый массив
$array_combine = array_combine($array_keys,
$array_values);
// вывод результата
echo "<pre>";
print_r($array_combine);
echo "</pre>";

echo "<hr>";

// первый массив
$array_1 = array(10, 20, 30);
// второй массив
$array_2 = array(40, 50, 60, 70);

// объединяем два массива
$array_merge = array_merge($array_1, $array_2);
// вывод результата
echo "<pre>";
print_r($array_merge);
echo "</pre>";


?>