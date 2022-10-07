<?php
global $client, $message, $event;
//require_once('./connection.php');

$client->replyMessage(array(
	'replyToken' => $event['replyToken'],
	'messages' => array(
	    array(
		'type' => 'text', //訊息類型 (文字)
		'text' => "第一個文字"
		//'text' => 'Hello, world!'.$profile['displayName'] //回覆訊息
	    )
	)
));
/*
$name = explode(" ",$message['text']);
$sql = "SELECT * FROM `toDoList` WHERE `name` = '".$name."'";
//$toDo = mysqli_query( $conn, $sql );
if($toDo) {
	$list = mysqli_fetch_array($toDo, MYSQLI_ASSOC);

	if($list){
		$id = $list['id'];
		$sql = "SELECT * FROM `toDoList_detail` WHERE `id` = ".$id;
		$detail = mysqli_query( $conn, $sql );
		$data = [];
		while ($res = mysqli_fetch_array($detail, MYSQLI_ASSOC)) {
			$data[] = $res;
		}
		if($data){
			$icon = ["❎","✅"];
			$contents = [];
			foreach ($data as $value) {
				$contents[] = [
					'type' => "box",
					'layout' => "horizontal",
					'contents' => [
						[
							'type' => "text",
							'text' => $icon[$value['finish']],
							'size' => "sm",
							'color' => "#555555",
							'flex' => 1,
						],
						[
							'type' => "text",
							'text' =>  $value['name'],
							'size' => "sm",
							'color' => "#111111",
							'flex' => 8,
						]
					],
				];
			}

			$title = [
				[
					'type' => "text",
					'text' => "全部",
					'weight' => "bold",
					'color' => "#1DB446",
					'size' => "sm",
				],
				[
					'type' => "text",
					'text' => $list['name'],
					'weight' => "bold",
					'size' => "xxl",
					'margin' => "md",
				],
			];

			$separator = [
				[
					'type' => "separator",
					'margin' => "xxl",
				],
			];

			$time = [
				[
					'type' => "box",
					'layout' => "horizontal",
					'margin' => "md",
					'contents' => [
						[
							'type' => "text",
							'text' => "建立時間",
							'size' => "xs",
							'color' => "#aaaaaa",
							'flex' => 0,
						],
						[
							'type' => "text",
							'text' => date('Y/m/d H:i', $list['creationTime']),
							'size' => "xs",
							'color' => "#aaaaaa",
							'align' => "end",
						],
					],
				],
				[
					'type' => "box",
					'layout' => "horizontal",
					'margin' => "md",
					'contents' => [
						[
							'type' => "text",
							'text' => "更新時間",
							'size' => "xs",
							'color' => "#aaaaaa",
							'flex' => 0,
						],
						[
							'type' => "text",
							'text' => date('Y/m/d H:i', $list['updatenTime']),
							'size' => "xs",
							'color' => "#aaaaaa",
							'align' => "end",
						],
					],
				],
			];

			$box = [
				[
					'type' => "box",
					'layout' => "vertical",
					'margin' => "xxl",
					'spacing' => "sm",
					'contents' => $contents,
				],
			];

			$out = [
				'type' => "bubble",
				'body' => [
					'type' => "box",
					'layout' => "vertical",
					'contents' => array_merge($title, $separator, $box, $separator, $time),
				],
				'style' => [
					'footer' => [
						'separator' => true,
					],
				],
			];
			//echo json_encode($out);
			//print_r($out);
		        $client->replyMessage(array(
		            'replyToken' => $event['replyToken'],
		            'messages' => array(
			        array(
			            'type' => 'text', //訊息類型 (文字)
			            'text' => "第一個文字"
			            //'text' => 'Hello, world!'.$profile['displayName'] //回覆訊息
			        )
		            )
		        ));
		}
	}
}

/*
$sql = "SELECT * FROM `config` WHERE `name` = '".strtolower($message['text'])."'";
$retval = mysqli_query( $conn, $sql );
if($retval) {
  $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
	$config = $row;
}
*/
/*
global $client, $message, $event, $conn;
if (strpos( $message['text'], "#" ) === 0) {
	$type = ($event['source']['type'] == "user")?1:2;
	$id = ($type==1)?$event['source']['userId']:$event['source']['groupId'];
	//$sql = "SELECT * FROM `command` WHERE `cmd` = $message['text'] AND `type` = $type AND `id` = $id";
	//$sql = "SELECT * FROM `command` WHERE `cmd` = '$message['text']'";
	$sql = "SELECT * FROM `command` WHERE `cmd` = '".$message['text']."' AND `type` = ".$type." AND `id` = '".$id."'";
	$retval = mysqli_query( $conn, $sql );
	if($retval) {
	    $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);
	    $client->replyMessage(array(
	        'replyToken' => $event['replyToken'],
	        'messages' => array(
	            array(
	                'type' => 'text', //訊息類型 (文字)
	                'text' => $row['text']
	                //'text' => 'Hello, world!'.$profile['displayName'] //回覆訊息
	            )
	        )
	    ));
	}
}else{
	$command = explode(" ",$message['text']);

	$sql = "SELECT * FROM `config`";
	$retval = mysqli_query( $conn, $sql );
	if($retval) {
	    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
	        $data[$row['name']] = $row;
	    }

	    $type = $data[$command[0]]['type'];
		$name = isset($command[1])?$command[1]:$command[0];
	}

}
*/
?>
