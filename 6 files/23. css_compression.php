<?php
// Простое сжатие CSS файлов.
// Выполняется работа по созданию сжатого файла,
// на экран выводится bool(...).

// массив с путями до css файлов
$css_array = array(
  'css/bootstrap.css',
  'css/w3.css'
);
// путь, куда будет сохранен сжатый файл
$new_file = "css/compression_file.css";

// вызываем функцию сжатия
$result = compression_files($css_array, $new_file);

var_dump($result); // вывод результата

/**
* Функция для сжатия CSS файлов
* Удаляет комментарии, табуляцию, 
* переходы на новую строку и повторяющиеся пробелы
* А также собирает все файлы в один
*
* @var $files_css array - массив путей
* до css файлов, которые необходимо сжать
*
* @var $new_file string - путь, куда будет
* сохранен сжатый файл
*
* @return bool - результат
*/
function compression_files($files_css, $new_file) {
  // получаем содержимое всех css файлов
  $content_css = "";
  
  foreach($files_css as $one_file){
    $content_css.=@file_get_contents($one_file);
    // если какой-то из файлов не получилось прочитать
    if(!$content_css) return false;
  }
  
  // удаляем комментарии
  $content_css = preg_replace(
    '!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $content_css
  );
  // удаляем табуляции и переходы на новую строку
  $content_css = str_replace(
    array("\r\n", "\r", "\n", "\t"), ' ', $content_css
  );
  // удаляем повторяющиеся пробелы
  $content_css = preg_replace(
    '/ {2,}/', ' ', $content_css
  ); 
 
  // сохраняем результат в файл
  $css_file = fopen ($new_file, "w+"); 
  fwrite($css_file, $content_css); 
  $result_save = fclose($css_file); 
  
  // вернем результат сохранения
  return $result_save;
}


?>