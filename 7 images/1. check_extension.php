<?php
// Проверка расширения

// файл, который будет проверен
// $file = "files/test.pdf";
$file = "files/test.png";
// массив валидных форматов
$validFormat = array('jpg', 'jpeg', 'gif', 'png');

// проверка файла на корректный формат
$resultFormat = checkValidFormat($file, $validFormat);

if($resultFormat) {
    echo "Корректный формат";
} else {
    echo "Некорректный формат";
}

/**
* Проверка корректности формата файла
* 
* @param string $file - имя файла или путь до файла
* @param array $validFormat - массив с 
* корректными форматами
*
* @return boolean - результат проверки
*/
function checkValidFormat($file, $validFormat) {
    // определяем формат файла
    $format = end(explode(".", $file));
    
    if(in_array(strtolower($format), $validFormat)) {
        return true;
    }
    
    return false;
}

?>