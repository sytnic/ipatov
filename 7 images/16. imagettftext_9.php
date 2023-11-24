<?php
// Нанесение на изображение текста с обводкой

$width  = 200; // ширина изображения
$height = 100; // высота изображения
// создаем изображение, на котором будем рисовать 
$img = imagecreatetruecolor($width, $height);
// цвет заливки фона
$rgb = 0xFFFFFF;
// заливаем холст цветом $rgb
imagefill($img, 0, 0, $rgb);

// путь к шрифту
$fontName = "C:\Windows\Fonts\impact.ttf";
// размер шрифта
$fontSise = 18;
$x = 50; // отступ слева
$y = 50; // отступ справа
// текст, который будем наносить на картинку
// \n обозначает переход на новую строку
$text = "Текст кир\nиллица";
$textColor   = 0xFFFFFF; // цвет шрифта
$aroundColor = 0x000000; // цвет обводки

// обводка текста
// смещение вправо
imagettftext(
$img, $fontSise, 0, $x+2, $y,
$aroundColor, $fontName, $text
);
// смещение влево
imagettftext(
$img, $fontSise, 0, $x-2, $y,
$aroundColor, $fontName, $text
);
// смещение вниз
imagettftext(
$img, $fontSise, 0, $x, $y+2,
$aroundColor, $fontName, $text
);
// смещение вверх
imagettftext(
$img, $fontSise, 0, $x, $y-2,
$aroundColor, $fontName, $text
);
// смещение вправо и вниз
imagettftext(
$img, $fontSise, 0, $x+1, $y+1,
$aroundColor, $fontName, $text
);
// смещение вправо и вверх
imagettftext(
$img, $fontSise, 0, $x+1, $y-1,
$aroundColor, $fontName, $text
);
// смещение влево и вверх
imagettftext(
$img, $fontSise, 0, $x-1, $y-1,
$aroundColor, $fontName, $text
);
// смещение влево и вниз
imagettftext(
$img, $fontSise, 0, $x-1, $y+1,
$aroundColor, $fontName, $text
);
// вывод самого текста
imagettftext(
$img, $fontSise, 0, $x, $y,
$textColor, $fontName, $text
);

// заголовок для браузера
header("Content-Type: image/png");
// выводим результат в браузер
imagepng($img);

// очищаем память после выполнения скрипта
imagedestroy($img);


?>