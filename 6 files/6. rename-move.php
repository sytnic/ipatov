<?php
// Перемещение файлов

// расположение файла,
// файл должен быть изначально создан
$file = 'folder_1/1.txt';

// куда будет перемещен,
// папка должна быть изначально создана
$new_file = 'folder_2/1.txt';
if (rename($file, $new_file)) {
    echo "Файл успешно перемещен!";
} else {
    echo "Файл не удалось переместить!";
}


?>