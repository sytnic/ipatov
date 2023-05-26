<?php
// parse_ini_file

// 1. есть config.ini

echo "<pre>";
echo 
'; файл config.ini

[db]
login = root
pass = 12345

[email]
admin = admin@test.com
support = support@test.com
';
echo "</pre>";
echo "<hr>";

//2. Парсинг в массив с разделами

// Получаем все параметры конфига вместе с разделами
$arrayAllConfig = parse_ini_file("config.ini", true);

// Выводим массив, в котором хранится login и pass
var_dump($arrayAllConfig['db']);
// array(2) { ["login"]=> string(4) "root" ["pass"]=> string(5) "12345" }
echo "<hr>";

// Выводим login
var_dump($arrayAllConfig['db']['login']);
// string(4) "root"
echo "<hr>";

//3. Парсинг в массив подряд, без разделов

// Получаем все параметры без разделов
$arrayAllConfig = parse_ini_file("config.ini");

// Выводим pass
var_dump($arrayAllConfig['pass']);
// string(5) "12345"


?>