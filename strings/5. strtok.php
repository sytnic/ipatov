<?php
// 5. Разбить предложение на слова

// исходная строка
$string = "Любой\tтекст\nдля примера";
// массив, в котором будут записаны слова
$array_words = array();
// разбиваем строку
// разделителем выступает 
// пробел, табуляция и перенос строки
$tok = strtok($string, " \t\n");
// разбиваем строку, пока не кончится предложение
while($tok) {
 $array_words[] = $tok;
 $tok = strtok(" \t\n");
}
// вывод результата
var_dump($array_words);




?>