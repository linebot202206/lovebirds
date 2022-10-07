<?php
global $client, $message, $event;

$type = explode(" ",$message['text'])[0];

if($type == "#清單"){
    require_once('/toDo.php');
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
            'type' => 'text', //訊息類型 (文字)
            'text' => "第一個文字"
            )
        )
    ));
}

?>
