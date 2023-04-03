<?php
// 4. Получить дату ближайшего понедельника

// Дата ближайшего прошедшего понедельника
echo date("Y-m-d", strtotime("last monday"))."<br>";
// Дата ближайшего следующего понедельника
echo date("Y-m-d", strtotime("next monday"));

?>