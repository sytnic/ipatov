<?php
// 7. Округление чисел с плавающей точкой до десятых и сотых

$number = 1.2345;
$number_2 = 1.5678;
// округление числа до десятых
$round = round($number, 1);
echo "round: $round<br/>"; // 1.2

// округление числа до сотых
$round = round($number_2, 2);
echo "round: $round<br/>"; // 1.57


?>