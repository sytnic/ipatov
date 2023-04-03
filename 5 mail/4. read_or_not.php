<?php  
// генерируем картинку и отдаем ее
// создаем холст 1 на 1 пиксель
$image = imagecreatetruecolor(1,1);
// делаем его белым
imagefill($image, 0, 0, 0xFFFFFF);
// задаем заголовок для вывода картинки
header('Content-type: image/png');
// выводим картинку
imagepng($image);
// очищаем память от картинки
imagedestroy($image);
// проверяем наличие GET параметра
if(isset($_GET['em'])){
// получили email пользователя,
// который открыл письмо
// раскодирем данные
 $email = base64_decode($_GET['em']);

// тут реализуем запись статистики
// в файл или базу данных
  echo $email;
}



?>