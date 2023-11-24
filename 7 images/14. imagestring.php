<?php
// Нанесение текста на изображение. 1 способ

$width  = 200; // ширина изображения
$height = 200; // высота изображения
// создаем изображение, на котором будем рисовать 
$img = imagecreatetruecolor($width, $height);
// цвет заливки фона
$rgb = 0xFFFFFF;
// заливаем холст цветом $rgb
imagefill($img, 0, 0, $rgb);

// определяем цвет
$red = imagecolorallocate($img, 255, 0, 0);
// координаты начала текста
$x = 30; $y = 30;
// выбираем шрифт, число от 1 до 5
$font = 3;
imagestring($img, $font, $x, $y, 'My first text', $red);

// заголовок для браузера
header("Content-Type: image/png");
// выводим результат в браузер
imagepng($img);
// очищаем память после выполнения скрипта
imagedestroy($img);

?>