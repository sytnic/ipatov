<?php
// 12. Получение ключей и значений ассоциативного массива

// исходный массив
$array = array(
"key_1" => "val_1",
"key_2" => "val_2",
"key_3" => "val_3",
"key_4" => "val_4",
"key_5" => "val_5"
);
// получение всех ключей массива
$keys = array_keys($array);
// вывод результата
echo "<pre>";
print_r($keys);
echo "</pre>";
// получение всех значений массива
$values = array_values($array);
// вывод результата
echo "<pre>";
print_r($values);
echo "</pre>";

?>