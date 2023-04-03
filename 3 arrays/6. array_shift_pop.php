<?php
// 6. Получение первого и последнего элементов массива

// исходный массив
$array = array(10, 20, 30, 40, 50);
print_r($array);
echo "<br>";

// получаем первый элемент
$first = array_shift($array);

// получаем последний элемент
$last = array_pop($array);

// вывод результата
echo "array_shift: $first <br/>";
echo "array_pop: $last <br>";


print_r($array);

?>