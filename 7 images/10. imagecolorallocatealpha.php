<?php
// Поворот PNG изображения с сохранением прозрачности

// картинка
$source = "files/404.png";
// угол, на который будет осуществлен поворот
$degree = 45;
// Загрузка изображения
$img = imagecreatefrompng($source);
// создаем прозрачный фон
$bg = imagecolorallocatealpha($img, 0, 0, 0, 127);
// поворот на нужный угол
$rotate_img = imagerotate($img, $degree, $bg);
// задаем прозрачность для повернутой картинки
imagesavealpha($rotate_img, true);

// заголовок для браузера
header("Content-Type: image/png");

// выводим результат в браузер
imagepng($rotate_img);

// очищаем пямять
imagedestroy($img);
imagedestroy($rotate_img);


?>