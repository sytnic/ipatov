<?php
// Проверка существования удаленных (remote) файлов

// пример использования
$result = isset_file("http://vk-book.ru/img/favicon.png");

var_dump($result); // bool(true)

/**
* Функция определяет существование удаленного файла
*
* @param string $url  ссылка на файл
*
* @return bool
*/
// If you don't want to display Warning 
// when get_headers() function fails, 
// you can simply add at-sign (@) before it.
// https://www.php.net/manual/ru/function.get-headers.php
// Но Здесь знак @ не повлиял на отображение:
// Warning отсутсвует в любом случае.
function isset_file($url) {
    $headers = @get_headers($url);
    // проверяем ответ сервера
    if (preg_match("|200|", $headers[0])) {
      // если ответ с кодом 200
      return true;
    } else {
      return false;
    }
}

?>