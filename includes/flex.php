<?php
global $client, $message, $event;

$type = explode(" ",$message['text'])[0];

if($type == "#清單"){
    require_once('./toDo.php');
}

?>
