<?php
//Сбор данных из полей формы. 
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['phone']; // Берём данные из input c атрибутом name="phone"
$email = $_POST['message']; // Берём данные из input c атрибутом name="mail"

$token = "6906926433:AAEOExwdK5zdUfBAu38sCZKN5ExQd6XaxPM"; // Тут пишем токен
$chat_id = "-4007883847"; // Тут пишем ID группы, куда будут отправляться сообщения
$sitename = "web-ayusha.ru"; //Указываем название сайта

$arr = array(

  'Заказ с сайта: ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Почта' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>