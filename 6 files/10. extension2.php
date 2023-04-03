<?php
// Получить расширения файла

// получение имени файла
$fileName = 'file.docx';

echo getFormat_2($fileName);

// способ 2
function getFormat_2($fileName) {
    return preg_replace('/^.*\.(.*)$/U', '$1',
    $fileName);
}


?>