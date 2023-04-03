<?php
// 17. Сохранение файла на компьютер пользователя

// имя файла, с которым он будет сохранен
$file_name = "pic.png";
// путь до файла
$file_path = "images/pic.png";

// код 200, все хорошо
header("HTTP/1.1 200 OK");
header("Content-type: image/png"); // тип файла
// дата по Гринвичу
header('Expires: '.gmdate('D, d M Y H:i:s').' GMT');
// определяем браузер
$ua = (isset($_SERVER['HTTP_USER_AGENT']))? $_SERVER['HTTP_USER_AGENT'] : '';
$isMSIE = preg_match('@MSIE ([0-9].[0-9]{1,2})@', $ua);
if ($isMSIE) {
// если это Internet Explorer, 
// объясняем браузеру, что выводим файл
    header('Content-Disposition: attachment; filename="'.$file_name.'"');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
} else {
// если это НЕ Internet Explorer, 
// объясняем браузеру, что выводим файл
    header('Content-Disposition: attachment; filename="'.$file_name.'"');
    header('Pragma: no-cache');
}
// вывод файла в браузере
readfile($file_path);


?>