<?php
// Создание картинки из текста. Защите e-mail от спама

// шрифт
$font = 'C:\Windows\Fonts\impact.ttf';
// размер текста
$fontSize = 12;
// текст. e-mail
$imgText = "admin@vk-book.ru";

// определяем размер картинки в зависимости 
// от длины и размера текста
$boxText = ImageTTFBBox($fontSize, 0, $font,$imgText);
// размер будущей картинки
$widthImg  = $boxText[2] - $boxText[0];
$heightImg = $boxText[1] - $boxText[7];

// создаем полотно
$img = imagecreatetruecolor($widthImg, $heightImg);
// задаем цвет фона
$fonColor = imagecolorallocate($img, 255, 255, 255);
// заливаем фон
imagefill($img, 0, 0, $fonColor);
// цвет текста
$textColor = imagecolorallocate ($img, 0, 0, 0);

// наносим текст
imagettftext (
$img, $fontSize, 0, 0, $fontSize,
$textColor, $font, $imgText
);

// выводим картинку в браузере
header("Content-type: image/png");
imagePng($img);

// очищаем память
imageDestroy($img);



?>