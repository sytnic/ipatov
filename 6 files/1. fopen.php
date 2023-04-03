<?php 
// 1. Создание файлов

// создать файл и записать в него

// путь до файла и его название
$file_name = "file.txt";

// открываем файл, если файл не существует,
//делается попытка создать его
$file = fopen($file_name, "w+");

// записываем в файл текст
$text = "my new text from OSPanel from '1. fopen.php'";
fwrite($file, $text);

// закрываем файл
fclose($file);

?>