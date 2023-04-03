<?php
// 10. Определение количества подстрок 

// исходная строка
$string = "исходная строка для примера подсчета
подстрок";
// искомая подстрока
$substr = "стр";
// подсчет вхождений
// обе функции работают корректно
$count = substr_count($string, $substr);
$mb_count = mb_substr_count($string, $substr, "UTF8");
echo "count: $count<br/>";          // 2
echo "mb_count: $mb_count<br/>";    // 2



?>