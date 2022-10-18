<?php
// 2. Отправка письма нескольким получателям

// массив получателей письма
$arrayTo = array(
    'test1@test.com',
    'test2@test.com',
    'test3@test.com'
);
// переводим массив в строку
// и разделяем адреса запятыми
$strTo = implode(",", $arrayTo);
// Тема письма
$subject = "Тестовое письмо";
// Текст письма.
// Тут может быть как просто текст, так и html код
$message = '
<html>
<head>
<title>Тестовое письмо</title>
</head>
<body>
<p>Текст письма</p>
</body>
</html>
';
// заголовок письма
$headers= "MIME-Version: 1.0\r\n";
// кодировка письма
$headers .= "Content-type: text/html; charset=utf-8\r\n";
// от кого письмо
$headers .= "From: Тестовое письмо <noreply@test.com>\r\n";
// отправляем письмо
$result = mail($strTo, $subject, $message, $headers);
// результат отправки письма
if($result){
    echo "Письмо успешно отправлено";
  } else {
    echo "Письмо не отправлено";
}



?>