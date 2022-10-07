<?php
global $client, $message, $event;
//require_once('./connection.php');

$client->replyMessage(array(
    'replyToken' => $event['replyToken'],
    'messages' => array(
        array(
        'type' => 'text', //訊息類型 (文字)
        'text' => "第一個文字"
        )
    )
));

?>
