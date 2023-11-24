<?php
// Получение размера папки

// указываем путь до папки или файла 
$dirname = 'files';

// заносим в переменную размер папки или файла
$size = dir_size($dirname);

echo $size;

// функция для просмотра всех подпапок 
// и всех вложенных файлов
function dir_size($dirname) {
  $totalsize = 0; // общий размер
  
  // открываем папку
  if ($dirstream = @opendir($dirname)) {
    // перебираем все что находится внутри папки
    while(($filename = readdir($dirstream))!==false){
      
      if ($filename != "." && $filename != ".."){
        // если попался файл
        if (is_file($dirname."/".$filename)){
          $totalsize += filesize($dirname."/".$filename);
        }
        
        // если попалась папка
        if(is_dir($dirname."/". $filename)){
          $totalsize += dir_size($dirname."/".$filename);
        }
      }
    }
  }
  
  // закрываем папку
  closedir($dirstream);
  // возвращаем результат
  return $totalsize;
}


?>