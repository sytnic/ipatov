<?php
// 3. Проверка корректности e-mail адреса

// e-mail адрес, который будем проверять
$email = "admin@test_site.com";
// Проверка e-mail адреса
if(preg_match(
    "|^[-0-9a-z_\.]+@[-0-9a-z_^\.]+\.[a-z]{2,6}$|i"
    , $email
   )) {
     echo "e-mail корректный";
} else {
     echo "e-mail не корректный";
}

?>