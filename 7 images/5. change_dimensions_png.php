<?php
// Изменение масштаба PNG картинки

// исходное изображение
$source = "files/404.png";

// путь для сохранения новой картинки
$new_file = "files/404_new.png";
$width  = 200; // новая ширина
$height = 200; // новая высота

//узнаем размеры исходной картинки
$size = getimagesize($source);

//пропорция ширины
$x_ratio = $width / $size[0];
//пропорция высоты
$y_ratio = $height / $size[1];
// определяем соотношения ширины к высоте
$ratio = min($x_ratio, $y_ratio);
$use_x_ratio = ($x_ratio == $ratio);
// высчитываем новую ширину картинки
$new_width = $use_x_ratio ? $width : floor($size[0] * $ratio);
// высчитываем новую высоту картинки
$new_height = !$use_x_ratio ? $height : floor($size[1] * $ratio);
// расхождение с заданными параметрами по ширине
$new_left = $use_x_ratio ? 0 : floor(($width - $new_width) / 2);
// расхождение с заданными параметрами по высоте
$new_top = !$use_x_ratio ? 0 : floor(($height - $new_height) / 2);

// создаем холст пропорциональное сжатой картинке
$img = imagecreatetruecolor($width,$height);
// делаем его прозрачным
imagealphablending($img, false);
imagesavealpha($img, true);

// загружаем исходную картинку
$photo = imagecreatefrompng($source);
// копируем на холст сжатую картинку
// с учетом расхождений
imagecopyresampled($img, $photo, $new_left, $new_top,
0, 0, $new_width, $new_height, $size[0], $size[1]);

// сохраняем результат
imagepng($img, $new_file);

// очищаем память после выполнения скрипта
imagedestroy($img);
imagedestroy($photo);

?>