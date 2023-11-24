<?php
// 7. Вывод изображения в браузере

$width  = 200; // ширина изображения
$height = 200; // высота изображения
// создаем изображение
$img = imagecreatetruecolor($width, $height);
// цвет заливки фона. зеленый
$rgb = 0x00ff00;
// заливаем холст цветом $rgb
imagefill($img, 0, 0, $rgb);
// заголовок для браузера
header("Content-Type: image/jpeg");
// выводим результат в браузер
imagejpeg($img);
// очищаем память после выполнения скрипта
imagedestroy($img);
imagedestroy($pic);


?>