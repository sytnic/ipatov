<?php
// 9. Генерация случайных чисел.
// rand использует библиотеку ОС.
// mt_rand - генератор PHP.

// минимальное число
$min = -100;
// максимальное число
$max = 100;

$rand = rand($min, $max);
$mt_rand = mt_rand($min, $max);

echo "rand: $rand<br/>";
echo "mt_rand: $mt_rand";


?>