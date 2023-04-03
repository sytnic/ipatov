<?php
// массовое удаление файлов 
// в указанной папке

// путь до папки с временными файлами
$folderPath = "./tmp";
$count = 0; // счетчик файлов

// проверяем существование 
if (is_dir($folderPath)) {
  // открываем папку
  if ($dir = opendir($folderPath)) {
    // перебираем все файлы
    while (($file = readdir($dir)) !== false) {
      // если это файл
      if($file !='.' && $file !='..') {
        // то удаляем его
        if(unlink($folderPath.'/'.$file)) {
          // вывод имени удаленного файла
          echo "File: $file removed<br/>"; 
          $count ++;
        }
      }
    }
  // закрываем папку
  closedir($dir);
  }
}
// выводим количество удаленных файлов
echo "Count remove: $count";

?>