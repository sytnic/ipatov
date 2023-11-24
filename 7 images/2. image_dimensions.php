<?php
// Проверка масштаба картинки

// файл, который будет проверен
$file = "files/favicon.png";
// массив валидных размеров
$validSize = array(
  'width'  => 100, // ширина в пикселях
  'height' => 100  // высота в пикселях
);
// проверка
$resultSize = checkValidSize($file, $validSize);

if($resultSize){
  echo "Корректный масштаб файла";
} else {
  echo "Некорректный масштаб файла";
}

/**
* Проверка корректности размера файла
* 
* @param string $file - имя файла или путь до файла
* @param array $validSize - массив с 
* корректными размерами.
* array(
* // максимально допустимая ширина
* 'width' => $width, 
* // максимально допустимая высота
* 'heigth' => $heigth
* )
*
* @return boolean - результат проверки
*/
function checkValidSize($file, $validSize){
  // получаем массив размеров картинки
  $sizeImg = @getimagesize($file);
  // если не удалось обработать картинку
  if(!$sizeImg) return false;
  // сравнение размеров картинки с валидными
  if($validSize['width'] >= $sizeImg[0] &&
     $validSize['height']>= $sizeImg[1]) {
      return true;
  }
  return false;
}

?>