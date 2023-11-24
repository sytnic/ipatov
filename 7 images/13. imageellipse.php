<?php
// Рисование окружностей, эллипсов и дуг

$width  = 200; // ширина изображения
$height = 250; // высота изображения
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
$black = imagecolorallocate($img, 0, 0, 0);

// координаты центра
$x = 100;
$y = 50;
// радиус
$radius = 30;
// Рисуем красный круг
imageellipse($img, $x, $y, $radius * 2, $radius * 2, $red);

// координаты центра
$x = 100;
$y = 120;
// радиус
$radius = 30;
// Рисуем закрашенный зеленый круг
imagefilledellipse($img, $x, $y, $radius * 2, $radius * 2, $green);

// координаты центра
$x = 100;
$y = 175;
// ширина
$width = 60;
// высота
$height = 30;
// Рисуем закрашенный синий эллипс
imagefilledellipse($img, $x, $y, $width, $height, $blue);

// координаты центра
$x = 100;
$y = 200;
// ширина
$width = 100;
// высота
$height = 60;
// угол начала дуги
$degree_start = 0;
// угол окончания дуги
$degree_end = 180;
// рисуем черную дугу
imagearc($img, $x, $y, $width, $height,
$degree_start, $degree_end, $black
);

// заголовок для браузера
header("Content-Type: image/png");

// выводим результат в браузер
imagepng($img);

// очищаем память после выполнения скрипта
imagedestroy($img);



?>