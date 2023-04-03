<?php
// 10. Определить возраст по дате рождения

/*
* Получение возраста
* $day - день
* $mouth - месяц
* $year - год
*/
function getAge($day, $mouth, $year) {
    // если в этом году уже был день рождения
    if ( $mouth > date('m') ||
        $mouth == date('m') &&
        $day > date('d') ) {
        return (date('Y') - $year - 1);
    } else {
        // если еще не прошел день рождения
        $result = date('Y') - $year;
    }
    return $result;
}

// пример использования
echo getAge(27, 11, 1982);


?>