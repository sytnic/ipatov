<?php
// 8. Универсальные функции создания и сохранения картинок

$source = "files/020.jpg";
// $source = "test.jpeg"; 
// $source = "test.png"; 
// $source = "test.gif"; 

// получаем функцию, для создания изображения
$imageCreateFunc = get_image_create_func($source);
// получаем функцию, для сохранения/вывода изображения
$imageSaveFunc = get_image_save_func($source);
// загружаем исходную картинку
$pic = $imageCreateFunc($source);
// заголовок для браузера
header("Content-Type: image/jpeg");

// выводим результат в браузер
$imageSaveFunc($pic);
// очищаем пямять
imagedestroy($pic);

// получаем функцию, для создания изображения
function get_image_create_func($source) {
    // получаем данные о файле
    $size = @getimagesize($source);
    // если ни чего не получили
    if(!$size) return false;
    // определяем формат картинки
    $format = strtolower(substr
        ($size['mime'], 
        strpos($size['mime'], '/') + 1)
    );
    // при необходимости, меняем jpg на jpeg
    if($format == "jpg") $format = "jpeg";
    // создаем функцию, для полученного 
    // формата изображения
    $func = "imagecreatefrom" . $format;
    // проверяем существование полученной функции
    if(!function_exists($func)) return false;
    // возвращаем результат
    return $func;
}

// получаем функцию, для сохранения/вывода изображения
function get_image_save_func($source){
    $size = @getimagesize($source);
    if(!$size) return false;
    $format = strtolower(
        substr($size['mime'], strpos($size['mime'], '/')+1)
    );
    if($format == "jpg") $format = "jpeg";
    $func = "image" . $format;
    if(!function_exists($func)) return false;
    return $func;
}

