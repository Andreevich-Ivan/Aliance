<?php 
$user_name = htmlspecialchars($_POST["username"]);
$user_phone =  htmlspecialchars($_POST['userphone']);

$token = "6710782929:AAGnZR30E8WliqJpc8DCRPQSFF1bGPD1QjU";
$chat_id = "-4017484993";

$formData = array(
    "Клиент" => $user_name,
    "Телефон" => $user_phone
);

foreach($formData as $key => $value) {
    $text .= $key . "<b>" . urlencode($value). "</b>" . "%0A";
}

$sendToTelegram = fopen("http://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
    echo "success";
} else {
    echo "error";
}
