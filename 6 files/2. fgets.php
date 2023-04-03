<?php
// чтение из файла

// путь до файла и его название
// "/file.txt" означало бы корень жёсткого диска
$file_name = "file.txt";

// открываем файл
$file = fopen($file_name, 'r');

$str = "";

// считываем все из файла
while (!feof($file)) {
    $buffer = fgets($file, 1024);
    $str .= $buffer."<br>";
}
fclose($file);

echo $str;

?>