<?php
// mail by SMTP
// Отправка писем через SMTP протокол


// имя пользователя
$smtp_username = 'username@yandex.ru';
// пароль
$smtp_password = 'password';
// адрес smtp сервера
$smtp_host = 'ssl://smtp.yandex.ru';
// порт для обращения к smtp серверу
$smtp_port = 465;
// тема письма
$subject = "Тема письма";
// текст письма
$message = "Текст письма";
// e-mail получателя письма
$mailTo = "zhenikipatov@yandex.ru";
// заголовок письма
$headers = "MIME-Version: 1.0\r\n";
// кодировка письма
$headers .= "Content-type: text/html; " .
 "charset=utf-8\r\n";
// от кого письмо
$headers .= "From: Evgeniy <admin@vk-book.ru>\r\n";
// тело письма
$contentMail = "Date: " . date("D, d M Y H:i:s")
. " UT\r\n";
$contentMail .= 'Subject: =?UTF-8?B?' .
base64_encode($subject) .
"=?=\r\n";
$contentMail .= $headers . "\r\n";
$contentMail .= $message . "\r\n";
// соединение с почтовым сервером через сокет
if(!$socket = @fsockopen(
    $smtp_host,
    $smtp_port,
    $errorNumber,
    $errorDescription,
    30)
)  {
    // если произошла ошибка
    die($errorNumber.".".$errorDescription);
}
// проверяем ответ сервера, если код 220
// значит все прошло успешно
if (!parseSocketAnswer($socket, "220")){
    die('Ошибка соединения');
}
// представляемся почтовому серверу,
// передаем ему адрес своего хоста
$server_name = $_SERVER["SERVER_NAME"];
fputs($socket, "HELO $server_name\r\n");
// проверяем ответ сервера, если код 250
// значит все прошло успешно
if (!parseSocketAnswer($socket, "250")){
    fclose($socket);
    die('Ошибка при приветствии');
}
// начинаем авторизацию на почтовом сервере
fputs($socket, "AUTH LOGIN\r\n");
// проверяем ответ сервера, если код 334
// значит все прошло успешно
if (!parseSocketAnswer($socket, "334")){
    fclose($socket);
    die('Ошибка авторизации');
}
// отправляем почтовому серверу логин,
// через который будем авторизовываться
fputs($socket, base64_encode($smtp_username)."\r\n");
// проверяем ответ сервера, если код 334
// значит все прошло успешно
if (!parseSocketAnswer($socket, "334")){
    fclose($socket);
    die('Ошибка авторизации');
}
// отправляем почтовому серверу пароль
fputs($socket, base64_encode($smtp_password)."\r\n");
// проверяем ответ сервера, если код 235
// значит все прошло успешно
if (!parseSocketAnswer($socket, "235")){
    fclose($socket);
    die('Ошибка авторизации');
}
// сообщаем почтовому серверу e-mail отправителя
fputs($socket, "MAIL FROM: <".$smtp_username.">\r\n");
// проверяем ответ сервера, если код 250
// значит все прошло успешно
if (!parseSocketAnswer($socket, "250")){
    fclose($socket);
    die('Ошибка установки отправителя');
}
// сообщаем почтовому серверу e-mail получателя
fputs($socket, "RCPT TO: <" . $mailTo . ">\r\n");
// проверяем ответ сервера, если код 250
// значит все прошло успешно
if (!parseSocketAnswer($socket, "250")){
    fclose($socket);
    die('Ошибка установки получателя');
}
// сообщаем почтовому серверу,
// что сейчас начнем передавать данные письма
fputs($socket, "DATA\r\n");
// проверяем ответ сервера, если код 354
// значит все прошло успешно
if (!parseSocketAnswer($socket, "354")){
    fclose($socket);
    die('Ошибка при передачи данных письма');
}
// передаем почтовому серверу данные письма
fputs($socket, $contentMail."\r\n.\r\n");
// проверяем ответ сервера, если код 250
// значит все прошло успешно
if (!parseSocketAnswer($socket, "250")){
  fclose($socket);
  die("Ошибка при передачи данных письма");
}
// сообщаем почтовому серверу,
// что закрываем соединение
fputs($socket, "QUIT\r\n");
// закрываем соединение
fclose($socket);
// результат отправки
echo "Письмо успешно отправлено";

// функция, которая будет анализировать ответ
// почтового сервера
// Ищет в ответе сервера необходимый код
function parseSocketAnswer($socket, $response) {
    while (@substr($responseServer, 3, 1) != ' ') {
        if (!($responseServer = fgets($socket, 256))){
            return false;
        }
    }
    
    if (!(substr($responseServer, 0, 3) == $response)) {
        return false;
    }
    
    return true;
}




?>