<?php
// 5. Перевод чисел в разные системы исчисления

$dec = 123;
echo "dec: $dec<br/>";  // 123

// перевод из десятичной системы счисления в двоичную
$bin = decbin($dec);
echo "bin: $bin<br/>";  // 1111011

// перевод из двоичной системы счисления в десятичную
$dec = bindec($bin);
echo "dec: $dec<br/>";  // 123

// перевод из десятичной системы счисления
// в восьмеричную
$oct = decoct($dec);
echo "oct: $oct<br/>";  // 173

// перевод из восьмеричной системы счисления в десятичную
$dec = octdec($oct);
echo "dec: $dec<br/>";  // 123

// перевод из десятичной системы счисления в шестнадцатеричною
$hex = dechex($dec);
echo "hex: $hex<br/>";  // 7b

// перевод из шестнадцатеричной системы счисления в десятичную
$dec = hexdec($hex);
echo "dec: $dec<br/>";  // 123


?>