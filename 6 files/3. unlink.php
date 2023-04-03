<?php
// удаление файла

// путь до файла и его название
$file_name = "file.txt";

if (is_readable($file_name)) {
    $result = unlink($file_name);
    if ($result) {
        echo "Файл удален!";
    } else {
        echo "Файл НЕ удален!";
    }
} else {
    echo 'Файл не существует или нет к нему доступа.';
}

?>