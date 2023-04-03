<?php 
// Скачать и сохранить файл с сайта.
// Выполняется скрипт без сообщений на экран.

// два примера использования
getAndSaveFile("http://vk-book.ru/img/favicon.png", './files/');
getAndSaveFile("http://vk-book.ru/img/favicon.png", './files/', 'name_file.png');

/**
* Получить и сохранить файл
*
* @param string $url - ссылка на файл
* @param string $path - путь для сохранения файла
* @param string $fileName - не обязательный параметр, имя файла для сохранения
*
* @return bool - результат
*/
function getAndSaveFile($url, $path, $fileName=false)
{
  // открываем содержимое файла
  //  @ - подавление Warning при возвращении ошибки  
  $file = @file_get_contents($url);
  
  // если не удалось получить файл, вернем false
  if(!$file) return false;

  // получаем имя файла, если не задано, то берем из урла
  if(!$fileName) $fileName = basename($url);

  // сохраняем файл
  $resultSave = @file_put_contents($path.$fileName, $file);
  // проверяем результат сохранения
  if ($resultSave || $resultSave > 0) return true;

  return false;
}

?>