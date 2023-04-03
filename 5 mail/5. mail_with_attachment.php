<?php
// файл
$file = "files/file.txt";
// кому письмо
$mailTo = "autocatalogues@mail.ru";
// от кого письмо
$from = "test@files.com";
// тема письма
$subject = "Test file";
// текст письма
$message = "Тестовое письмо с вложением";
// разделитель в письме
$separator = "---";
// Заголовки для письма
$headers = "MIME-Version: 1.0\r\n";
// задаем от кого письмо
$headers .= "From: $from\nReply-To: $from\n";
// в заголовке указываем разделитель
$headers .= "Content-Type: multipart/mixed;" .
"boundary=\"$separator\"";
// начало тела письма, выводим разделитель
$bodyMail = "--$separator\n";
// кодировка письма
$bodyMail .= "Content-type: text/html;" .
 "charset='utf-8'\n";
// задаем конвертацию письма
$bodyMail .= "Content-Transfer-Encoding: quotedprintable";
// задаем название файла
$bodyMail .= "Content-Disposition: attachment;"
. "filename==?utf-8?B?" .
base64_encode(basename($file))."?=\n\n";
$bodyMail .= $message."\n"; // добавляем текст письма
$bodyMail .= "--$separator\n";
// тип контента и имя файла
$bodyMail .= "Content-Type: application/octet-stream;"
 . "name==?utf-8?B?" .
base64_encode(basename($file))."?=\n";
// кодировка файла
$bodyMail .= "Content-Transfer-Encoding: base64\n";
$bodyMail .= "Content-Disposition: attachment;" .
"filename==?utf-8?B?" .
base64_encode(basename($file))."?=\n\n";
// считываем файл
$contentFile = file_get_contents($file);
// кодируем и прикрепляем файл
$bodyMail .=
chunk_split(base64_encode($contentFile))."\n";
$bodyMail .= "--".$separator ."--\n";
// отправка письма
$result = mail($mailTo, $subject, $bodyMail,
$headers);
if($result){
echo "Письмо успешно отправлено";
}else{
echo "Письмо не отправлено";
}



?>