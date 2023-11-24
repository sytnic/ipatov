<?php
// Распаковка архивов

// путь к папке, в которую будет распакован архив
$pathdir = 'files_unzip/';
//название архива
$nameArhive = 'files.zip';
// класс для работы с архивами
$zip = new ZipArchive;
// открываем архив
if ($zip->open($nameArhive) === true){
    // распаковываем архив
    $zip->extractTo($pathdir);
    // закрываем архив.
    $zip->close();
    echo 'Архив распакован в ' . $pathdir;
} else {
    die ('Произошла ошибка при распаковке архива');
}

?>