<?php
// Удаление папки.
// Скрипт не выводит ничего на экран.
// Удаление происходит не в корзину, а полное стирание.

// удалить пустую папку
/*
$folder = 'folder_2'; // путь до папки
rmdir($folder);  // удаление папки
*/

// удаление папки со всеми 
// вложенными файлами и подпапками
$folder = 'new_folder'; // имя новой папки
remove_folder($folder); // удаление

// рекурсивная функция
function remove_folder($folder) {
  // получаем все файлы из папки
  if ($files = glob($folder . "/*")) {
    // удаляем по одному
    foreach($files as $file) {
      // если попалась папка, то удаляем ее
      if(is_dir($file)){
        remove_folder($file);
      } else {
        // если попался файл
        unlink($file);
      }
    }
  }
// удаляем пустую папку
rmdir($folder);
}


?>