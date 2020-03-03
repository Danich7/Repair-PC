<?php
$name = $_GET['name'];
$phone = $_GET['phone']; 
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$name = urldecode($name);
$phone = urldecode($phone);
$name = trim($name);
$phone = trim($phone);
if (mail("Danich132@yandex.ru", "Заказ с сайта", "ФИО:".$name.". Phone: ".$phone ,"From: info@danich7.github.io \r\n"))
 {    echo "сообщение успешно отправлено";
  } else {
    echo "при отправке сообщения возникли ошибки";
  }?>
