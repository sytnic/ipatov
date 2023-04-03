<?php
// extension

// получение формата файла
$fileName = 'file.txt';

echo getFormat_1($fileName);

// способ 1
function getFormat_1($fileName) {
    $arr = explode(".", $fileName);
    return end($arr);
}

?>