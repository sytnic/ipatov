<?php
// Получить письма. Пример работы с IMAP протоколом
// Должно быть включено расширение imap в настройках php.ini

// логин
$email = "username@yandex.ru";
// пароль
$password = "password";
// соединяемся с почтовым сервером,
// в случае ошибки выведем ее на экран
$connect_imap = imap_open("
    {imap.yandex.ru:993/imap/ssl}INBOX",
    $email,
    $password
) or die("Error:" . imap_last_error());
// проверим ящик на наличие новых писем
$mails = imap_search($connect_imap, 'NEW');
// если есть новые письма
if ($mails) {
    // перебираем все письма
    foreach($mails as $num_mail){
        // получаем заголовок
        $header = imap_header(
        $connect_imap, $num_mail
        );
    // достаем ящик отправителя письма
    $mail_from = $header->sender[0]->mailbox .
    "@" . $header->sender[0]->host;

    echo "От кого: $mail_from <br/>";
    // получаем тему письма
    $subject = $header->subject;
    echo "Тема письма: $subject <br/>";
    // получаем содержимое письма
    $text_mail = imap_fetchbody(
        $connect_imap, $num_mail, 1
    );
    echo "Тело письма: $text_mail <br/>";
    echo "<hr/>";
    }
} else {
    echo "Нет новых писем";
}
// закрываем соединение
imap_close($connect_imap);

?>