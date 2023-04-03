<?php
// Генерация уникального имени файла.
// Генерируется только имя, а не сам файл.

// пример использования
print_r(getUniqName('./files/', 'test_file.txt'));
// при существовании test_file.txt 
// результат будет - 1_test_file.txt

/**
* Получение уникального имени для файла
*
* @param string $path - путь к папке, где будет проверка*
* @param string $fileName - исходное имя файла
*
* @return string - уникальное имя файла
*/
function getUniqName($path, $fileName){ 
	$num = 1; // счетчик
	
	// проверяем, существует ли файл с таким именем
	if(file_exists($path . $fileName)) { 
	    // добавляем префикс и проверяем 
	    // наличие файла с таким именем
	    while(file_exists($path.$num.'_'.$fileName)){
	        $num ++;
	    }
		
	    return $num . '_' . $fileName;
	
	} else {
	    return $fileName;
	}
}

?>