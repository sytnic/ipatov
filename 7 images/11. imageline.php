<?php
// Рисование линии. Стиль, цвет, толщина

$width  = 200; // ширина изображения
$height = 200; // высота изображения
// создаем изображение, на котором будем рисовать 
$img = imagecreatetruecolor($width, $height);
// цвет заливки фона
$rgb = 0xFFFFFF;
// заливаем холст цветом $rgb
imagefill($img, 0, 0, $rgb);
// создаем цвета
$red   = imagecolorallocate($img, 255, 0, 0);
$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);

// координаты линии
$x1 = 20; $y1 = 50; $x2 = 180; $y2 = 50;
// рисуем обычную линию
imageline ($img, $x1, $y1, $x2, $y2, $black);

// установка стиля линии (пунктир)
// 4 белых пикселя, 4 черных
$style = array(
  $white, $white, $white, $white,
  $black, $black, $black, $black
);
imagesetstyle($img, $style);

// координаты линии
$x1 = 20; $y1 = 150; $x2 = 180; $y2 = 50;
// рисуем пунктирную линию
imageline (
  $img, $x1, $y1, $x2, $y2, IMG_COLOR_STYLED
);

// толщина линии
imagesetthickness($img, 5);

// координаты линии
$x1 = 20; $y1 = 150; $x2 = 180; $y2 = 150;
// рисуем толстую линию
imageline ($img, $x1, $y1, $x2, $y2, $red);

// заголовок для браузера
header("Content-Type: image/png");
// выводим результат в браузер
imagepng($img);

// очищаем память после выполнения скрипта
imagedestroy($img);


?>