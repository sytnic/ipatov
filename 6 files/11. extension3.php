<?php
// получение расширения файла - 3

$fileName = 'file.docx';
echo getFormat_3($fileName);

// способ 3
function getFormat_3($fileName) {
    $info = pathinfo($fileName);
    return $info['extension'];
}

?>