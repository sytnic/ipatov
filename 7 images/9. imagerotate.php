<?php
// Поворот изображения

// картинка
$source = "files/020.jpg";
// угол, на который будет осуществлен поворот
$degree = 45;
// Загрузка изображения
$img = imagecreatefromjpeg($source);
// Поворот. Пустые углы заливаем цветом 0xffffff
$rotate_img = imagerotate($img, $degree, 0xffffff);

// заголовок для браузера
header("Content-Type: image/jpeg");
// выводим результат в браузер
imagejpeg($rotate_img);

// очищаем пямять
imagedestroy($rotate_img);


?>