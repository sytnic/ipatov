<?php
// Получение размера файла

// размер файла
// путь до файла и его название
$file_name = "file.txt";
// получение размера файла
$size = filesize($file_name);
echo $size;


?>