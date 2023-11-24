<?php
// Рисование прямоугольников и квадратов

$width  = 200; // ширина изображения
$height = 300; // высота изображения
// создаем изображение, на котором будем рисовать 
$img = imagecreatetruecolor($width, $height);
// цвет заливки фона
$rgb = 0xFFFFFF;
// заливаем холст цветом $rgb
imagefill($img, 0, 0, $rgb);
// определяем цвета
$red   = imagecolorallocate($img, 255, 0, 0);
$green = imagecolorallocate($img, 0, 255, 0);
$blue  = imagecolorallocate($img, 0, 0, 255);
// толщина линий
imagesetthickness($img, 3);

// рисуем прямоугольник красными линиями
$x1 = 20; $y1 = 40; $x2 = 150; $y2 = 90;
imagerectangle($img, $x1, $y1, $x2, $y2, $red);

// рисуем закрашенный зеленый прямоугольник
$x1 = 20; $y1 = 110; $x2 = 150; $y2 = 160;
imagefilledrectangle($img, $x1, $y1, $x2, $y2, $green);

// рисуем синий квадрат
$x1 = 60; $y1 = 180; $x2 = 110; $y2 = 230;
imagefilledrectangle($img, $x1, $y1, $x2, $y2, $blue);

// заголовок для браузера
header("Content-Type: image/png");
// выводим результат в браузер
imagepng($img);

// очищаем память после выполнения скрипта
imagedestroy($img);


?>