<?php
// 1. Посчитать количество символов в строке 

// исходная строка
$str = "Любой текст";
// определяем длину с помощью strlen
$str_len = strlen($str);
// определяем длину с помощью mb_strlen
$mb_str_len = mb_strlen($str, 'utf-8');
// вывод результата
echo "strlen: $str_len<br/>"; // 21, не корректно для кириллицы
echo "strlen: $mb_str_len";   // 11, корректно для кириллицы

?>