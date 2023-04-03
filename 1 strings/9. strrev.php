<?php
// 9. Вывод строки в обратном порядке

// исходная строка
$string = "text latin";
// переворачиваем строку задом на перед
$strrev = strrev($string);
// вывод результата
echo "strrev: $strrev<br/>"; // nital txet

echo "<hr>";
// исходная строка
$string = "исходная строка";
// переворачиваем строку в кодировке UTF-8
// задом на перед
$mb_strrev = "";
for($i = mb_strlen($string, "UTF-8"); $i >= 0; $i--){
$mb_strrev .= mb_substr($string, $i, 1, "UTF-8");
}
// вывод результата
echo "mb_strrev: $mb_strrev"; // акортс яандохси

?>