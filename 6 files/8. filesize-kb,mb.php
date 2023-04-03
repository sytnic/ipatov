<?php
// размер файла

// путь до файла и его название
//$file_name = "file.txt";
$file_name = "vk-book.pdf";
$size = filesize($file_name);
// вызываем функцию для форматирования размера файла
echo format_size($size);

// функция форматирует вывод размера файла
function format_size($size) {
	$metrics[0] = 'байт';
	$metrics[1] = 'Кбайт';
	$metrics[2] = 'Мбайт';
	$metrics[3] = 'Гбайт';
	$metrics[4] = 'Тбайт';
	$metric = 0; 

	while (floor($size / 1024) > 0) {
		$metric ++;
		$size /= 1024;
	} 
	
	$result = round($size, 1) . " " .
	    (isset($metrics[$metric]) ? $metrics[$metric] : '???');
		
	return $result;
}


?>