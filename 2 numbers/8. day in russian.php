<?php
// 8. Вывод слов в разной форме (1 день, 2 дня, 5 дней)

// функция
function numForm($number, $forma1, $forma2, $forma3){
    if(($number == "0")
        or (($number >= "5")
        and ($number <= "20"))
        or preg_match("|[056789]$|", $number)
    )  {
     return "$number $forma3";
    }

    if(preg_match("|[1]$|",$number)){
        return "$number $forma1";
    }

    if(preg_match("|[234]$|",$number)){
        return "$number $forma2";
    }
}

// пример использования
$array = array(1, 2, 5);

foreach($array as $num){
    echo numForm($num, "день", "дня", "дней") . "<br/>";
}



?>