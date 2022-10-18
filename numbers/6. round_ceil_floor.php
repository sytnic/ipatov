<?php
// 6. Округление чисел с плавающей точкой до целых

$number = 1.2345;
$number_2 = 1.5678;

// округление числа
$round = round($number);
echo "round: $round<br/>";     // 1

$round_2 = round($number_2);
echo "round_2: $round_2<br/>"; // 2

// округление числа в большую сторону
$ceil = ceil($number);
echo "ceil: $ceil<br/>";       // 2

// округление числа в меньшую сторону
$floor = floor($number_2);
echo "floor: $floor<br/>";     // 1


?>