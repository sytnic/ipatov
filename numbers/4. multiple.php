<?php
// 4. Вывод числа кратного N

// вывод всех чисел до 10, кратных 3

$n = 3;

for($i = 0; $i < 10; $i++){
    if((($i % $n) == 0) AND ($i != 0)){
        echo $i . "<br/>";
    }
}



?>