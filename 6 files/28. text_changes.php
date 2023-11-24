<?php 
// 28. Массовая замена текста в файлах.
// Ничего не выводится на экран.

$oldText = 'old text'; // что меняем
$newText = 'new text'; // на что меняем
$folderName = "change_text"; // в какой папке меняем
replace_txt($folderName, $oldText, $newText);


/**
* Функция замены текста во всех файлах папки
* 
* @param string $folderName - пусть до папки
* @param string $oldText - искомый текст
* @param string $newText - на что меняем текст
*/
function replace_txt($folderName, $oldText, $newText){
    // открываем текущую папку
    $dir = opendir($folderName);
    // перебираем папку
    // перебираем пока есть файлы
    while (($file = readdir($dir)) !== false){
    // если это не папка
        if($file != "." && $file != ".."){
          // если файл
          if(is_file($folderName."/".$file)){
            // открываем файл
            $contentFile = file_get_contents($folderName."/".$file);
             
            // для работы с файлами в кодировке windows-1251
            //$contentFile = iconv("windows-1251","utf-8",$contentFile); 
              
            // делаем замену в тексте
            $contentFile = str_replace($oldText, $newText, $contentFile);
            // сохраняем изменения 
            file_put_contents($folderName."/".$file,$contentFile);
          }
          
          // если папка, то рекурсивно вызываем replace_txt
          if(is_dir($folderName."/".$file)){
            replace_txt($folderName."/".$file, $oldText, $newText);
          }
        }
    }
    
    // закрываем папку
    closedir($dir);
}


?>