<?php
// 2. Заполнение массива случайными числами

// создаем пустой массив
$array = array();
$array2 = array();
// количество элементов в массиве
$len = 10;
// минимальное значение элемента
$min = 0;
// максимальное значение элемента
$max = 100;
// заполняем массив 1
for($i = 0; $i < $len; $i ++){
$array[] = mt_rand($min, $max);
}
// заполняем массив 2
for($i = 0; $i < $len; $i ++){
$array2[] = rand($min, $max);
}

// вывод массива
echo "<pre>";
print_r($array);
echo "</pre>";

echo "<pre>";
print_r($array2);
echo "</pre>";

?>