<?php
// 3. Deleting characters in a string

// исходная строка
$str = "Любой текст";
// символ, который будет удален
$lit = "т";
// удаляем символы
$str = str_replace($lit, "", $str);
// выводим результат
echo $str;  // Любой екс

?>