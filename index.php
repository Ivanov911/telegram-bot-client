<?php
require_once ('./vendor/autoload.php');
use Ivanov911\TelegramBotClient\Service\TelegramBotClient;

$telegramBotClient = new TelegramBotClient('6201295676:AAGLTkQUJJk5NAQ8XYFDAjdtsbCUHUo3iSw');


// var_dump($telegramBotClient->getUpdates());
$str = (string) readline('Enter text: ');
print_r($telegramBotClient->sendMessage(699873958, $str));


// echo $telegramBotClient->getUpdates()['result'][0]['message']['chat']['id']; чтоб узнать ID

// for ($i=1; $i<100; $i++) {
//     print_r($telegramBotClient->sendMessage(699873958, $str));
// }