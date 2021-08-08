<?php

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$token = "1522969442:AAH79nV7GekVFx-bupfQF8u-w7fkVhsDdMs";
$chat_id = "-558763204";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Thank you";
} else {
  echo "Error";
}
?>