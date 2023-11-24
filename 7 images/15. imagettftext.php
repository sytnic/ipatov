<?php
// Нанесение текста на изображение. 2 способ

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
$text = "Текст кир\n иллица";
$textColor = 0x000000; // цвет шрифта
// нанесение текста
imagettftext($img, $fontSise, 0, $x, $y,
$textColor, $fontName, $text
);

// заголовок для браузера
header("Content-Type: image/png");
// выводим результат в браузер
imagepng($img);

// очищаем память после выполнения скрипта
imagedestroy($img);


?>