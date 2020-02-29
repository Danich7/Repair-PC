<html>
<head>
<title>Форма заявки с сайта</title>
</head>
<body>
<?php
if(!isset($_POST['name']) and !isset($_POST['phone'])){
  ?> <form action="send.php" method="POST">
  <input class="name" type="text" name="name" placeholder="Ваше имя" required>
  <input class="phone" type="text" name="phone" placeholder="Телефон" required>
  <input class="order__button" type="submit" value="Отправить">     <!---СДЕЛАТЬ ОТПРАВКУ НА ПОЧТУ-->
</form> <?php
} else {
$name = $_POST['name'];
$phone = $_POST['phone']; 
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$name = urldecode($name);
$phone = urldecode($phone);
$name = trim($name);
$phone = trim($phone);
if (mail("Danich132@yandex.ru", "Заказ с сайта", "ФИО:".$name.". Phone: ".$phone ,"From: info@danich7.github.io \r\n"))
 {
    echo "сообщение успешно отправлено";
  } else {
    echo "при отправке сообщения возникли ошибки";
  }
}
?>
</body>
</html>
