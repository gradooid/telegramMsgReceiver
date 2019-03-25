<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$token = '841678027:AAFlwWoWNL7kX0JNZ-j1Wa0SMAZtqSTg_Y8';
$chat_id = '-280089425';
$arr = array(
  'username: ' => $name,
  'phone: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= '<b>'.$key.'</b>'.$value.'%0A';
};

$sendToTelegram = fopen('https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}
  &parse_mode=html&text={$txt}', 'r');

  if ($sendToTelegram) {
    echo '<p>Success</p>';
      return true;
  } else {
    echo '<p>Fail:(</p>';
  }

?>