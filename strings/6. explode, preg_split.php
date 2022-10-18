<?php
// 6. Разбить строку на подстроки

// исходная строка
$string = "Строка,разделенная,запятыми";

// разбиваем строку по разделителю - запятой
$array_words_1 = explode(',', $string);
// вывод результата
var_dump($array_words_1); // array(3) { ... }
echo "<br>";

// исходная строка
$string = "Строка1разделенная2числами3еще текст";
// разбиваем строку по регулярному выражению
// '/\d/' – является регулярным выражением
$array_words_2 = preg_split('/\d/', $string);
// вывод результата
var_dump($array_words_2); // array(4) { ... }

?>