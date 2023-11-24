<?php
// Поиск файла в папке

// пример использования
$folderName = "files"; // в какой папке ищем
$fileName = "w3.css"; // что ищем

$result = search_file($folderName, $fileName);

if($result) {
    echo $result;
} else {
    echo "Нет такого файла";
}

/**
* Поиск файла по имени во всех папках и подпапках
* 
* @param string $folderName - пусть до папки
* @param string $fileName - искомый файл
*/
function search_file($folderName, $fileName) {
  // открываем текущую папку
  $dir = opendir($folderName);
  // перебираем папку
  // перебираем пока есть файлы
  while (($file = readdir($dir)) !== false) {
    if($file != "." && $file != "..") {
      
      // если файл проверяем имя
      if(is_file($folderName . "/" . $file)) {
        // если имя файла искомое, 
        // то вернем путь до него
        if($file == $fileName) {
          return $folderName."/".$file;
        }
      }
      
      // если папка, то рекурсивно
      // вызываем search_file
      if(is_dir($folderName . "/" . $file)) {
        return search_file($folderName . "/" . $file, $fileName);
      }
    }
  }
 
  // закрываем папку
  closedir($dir);
}