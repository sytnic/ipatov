<?php
// 8. Управление регистром

// для кириллицы нужно использовать функции mb_...

// исходная строка
$string = "строка из ЧЕТЫРЕХ слов";
// перевод всех символов в нижний регистр
$mb_lower = mb_strtolower($string, "utf-8");
$lower = strtolower($string);
echo "mb_lower: $mb_lower<br/>";    // "...из четырех..."
echo "lower: $lower<br/>";          // "...из ЧЕТЫРЕХ..."

echo "<hr>";
// исходная строка
$string = "строка из ЧЕТЫРЕХ слов";
// перевод всех символов в нижний регистр
$mb_upper = mb_strtoupper($string, "utf-8");
$upper = strtoupper($string);
echo "mb_upper: $mb_upper<br/>";    // "СТРОКА ИЗ..."
echo "upper: $upper<br/>";          // "строка из..."

echo "<hr>";
// для кириллицы лучше использовать mb_convert_case
// вместо ucfirst и ucwords

// исходная строка
$string = "text latin";
// перевод в верхний регистр первого символа строки
$ucfirst = ucfirst($string);
// вывод результата
echo "ucfirst: $ucfirst<br/>"; // Text latin

// перевод первых символов каждого слова
// в верхний регистр
$ucwords = ucwords($string);
// вывод результата
echo "ucwords: $ucwords<br/>"; // Text Latin

// исходная строка
$string = "строка из ЧЕТЫРЕХ слов";
// перевод всех символов в верхний регистр.
// Кодировка UTF-8
$upper = mb_convert_case($string, MB_CASE_UPPER, "UTF8");
// вывод результата
echo "upper: $upper<br/>"; // СТРОКА ИЗ ЧЕТЫРЕХ СЛОВ

// перевод всех символов в нижний регистр.
// Кодировка UTF-8
$lower = mb_convert_case($string, MB_CASE_LOWER, "UTF-8");
// вывод результата
echo "lower: $lower<br/>"; // строка из четырех слов

// перевод первых символов каждого слова
// в верхний регистр. Кодировка UTF-8
$case_title = mb_convert_case($string, MB_CASE_TITLE, "UTF-8");
// вывод результата
echo "case_title: $case_title<br/>"; // Строка Из Четырех Слов

// перевод в верхний регистр первого символа строки
// получаем первый символ строки
$first_char = mb_substr($string, 0, 1, 'UTF-8');
// переводим первый символ в верхний регистр
$first_upper = mb_convert_case($first_char, MB_CASE_TITLE, 'UTF-8');
// берем от строки все символы, кроме первого
$all_characters = mb_substr($string, 1, mb_strlen($string), 'UTF-8');
// соединяем первый символ и все остальные
$result = $first_upper . $all_characters;
// вывод результата
echo "result: $result<br/>"; // Строка из ЧЕТЫРЕХ слов



?>