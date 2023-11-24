<?php
// Нанесение на изображение текста с подчеркиванием

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
$text = "Любой текст";
// цвет шрифта
$textColor = 0x000000;

// отступ линии от начала текста
$paddingLine = 3;
// выводим текст
imagettftext($img, $fontSise, 0, $x, $y,
$textColor, $fontName, $text);
// определяем размер текста
$textbox = imagettfbbox($fontSise, 0, $fontName, $text);
// вычисляем ширину текста
$text_width = $textbox[2] - $textbox[0];
// толщина линии
imagesetthickness($img, 3);
// рисуем линию
imageline($img, $x, $y + $paddingLine, $x + $text_width,
$y + $paddingLine, $textColor);

// заголовок для браузера
header("Content-Type: image/png");
// выводим результат в браузер
imagepng($img);
// очищаем память после выполнения скрипта
imagedestroy($img);


?>