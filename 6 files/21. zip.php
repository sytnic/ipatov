<?php
// Работа с zip архивами. Запаковка файлов.
// Требуется включить в php модуль ZipArchive.

// путь к папке, файлы которой будем архивировать
$pathdir='files/';
//название архива
$nameArhive = 'files.zip';

// класс для работы с архивами
$zip = new ZipArchive;

// создаем архив, если все прошло удачно продолжаем
if ($zip->open($nameArhive, ZipArchive::CREATE) === true){
    // открываем папку с файлами
    $dir = opendir($pathdir);
    // перебираем все файлы из нашей папки
    while($file = readdir($dir)){
        // проверяем файл ли мы взяли из папки
        if (is_file($pathdir.$file)){
            // архивируем
            $zip->addFile($pathdir.$file, $file);
            // выводим название 
            // заархивированного файла
            echo "Заархивирован: ".$pathdir.$file.'<br/>';
        }   
    }
    $zip->close(); // закрываем архив.
    echo 'Архив успешно создан';
} else {
    die ('Произошла ошибка при создании архива');
}

/* output:
Заархивирован: files/favicon.png
Заархивирован: files/name_file.png
Заархивирован: files/test.txt
Заархивирован: files/test_file.txt
Архив успешно создан
*/

?>