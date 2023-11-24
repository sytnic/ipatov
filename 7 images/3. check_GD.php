<?php
// Проверка наличия библиотеки GD

if(isset_GD()) {
    echo "Библиотека установлена!";
} else {
    echo "Библиотека НЕ установлена!";
}

function isset_GD() {
// extension_loaded определяет, загружено расширение или нет 
// dl загружает расширение

/* oem  version   
    if (!extension_loaded('gd')) {
        if (!dl('gd.so')) {
            return false;
        }
    }
*/

// mine version
    if (!extension_loaded('gd') && !dl('gd.so')) {
        return false;
    }
    
    return true;
}

?>