<?php
// 1. Получить текущую дату и время

// вывод текущего года, месяца и дня
echo date("Y-m-d");
echo "<br>";
// вывод текущего часа, минусы и секунды
echo date("H:i:s");
echo "<br>";
// вывод дня недели
echo date("l");
echo "<br>";
// номер дня недели
echo date("w");
echo "<br>";
// номер дня в году
echo date("z");
echo "<br>";
// определение високосного года
if(date("L") == 1) {
    echo "Год високосный";
} else {
    echo "Год не високосный";
}



?>