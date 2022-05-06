<?php

define('TELEGRAM_TOKEN', 'PUT YOUR TELEGRAM TOKEN HERE');

function message_to_telegram($chat_id, $text)
{
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => $chat_id,
                'text' => $text,
            ),
        )
    );
    curl_exec($ch);
}

//Самара
$cfg[0]['url'] = 'https://wttr.in/Samara?format=1';
$cfg[0]['channel'] = '-1001512238839';

//Москва
$cfg[1]['url'] = 'https://wttr.in/Moscow?format=1';
$cfg[1]['channel'] = '-1001536412539';

//Питер
$cfg[2]['url'] = 'https://wttr.in/spb?format=1';
$cfg[2]['channel'] = '-1001723105002';

?>
