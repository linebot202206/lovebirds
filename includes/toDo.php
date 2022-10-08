<?php
global $client, $message, $event, $conn;
require_once('connection.php');

$name = "必做清單";
$sql = "SELECT * FROM `toDoList` WHERE `name` = '".$name."'";
$toDo = mysqli_query( $conn, $sql );
if($toDo) {
	$list = mysqli_fetch_array($toDo, MYSQLI_ASSOC);
	if($list){
		$id = $list['id'];
		$sql = "SELECT * FROM `toDoList_detail` WHERE `id` = ".$id;
		
		$sql = "SELECT * FROM `toDoList_detail` WHERE `id` = ".$id;
		$detail = mysqli_query( $conn, $sql );
		$data = [];
		while ($res = mysqli_fetch_array($detail, MYSQLI_ASSOC)) {
			$data[] = $res;
		}
		
		if($data){
			$icon = ["❎","✅"];
			$contents = [];
			/*
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
			*/

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

			/*
			$separator = [
				[
					'type' => "separator",
					'margin' => "xxl",
				],
			];
			*/
			
			/*
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
			*/

			/*
			$box = [
				[
					'type' => "box",
					'layout' => "vertical",
					'margin' => "xxl",
					'spacing' => "sm",
					'contents' => $contents,
				],
			];
			*/

			$out = [
				'type' => "bubble",
				'body' => [
					'type' => "box",
					'layout' => "vertical",
					//'contents' => array_merge($title, $separator, $box, $separator, $time),
					'contents' => $title,
				],
				'style' => [
					'footer' => [
						'separator' => true,
					],
				],
			];
			

	    $client->replyMessage(array(
	        'replyToken' => $event['replyToken'],
	        'messages' => array(
	            array(
	                'type' => 'text', //訊息類型 (文字)
	                'text' => $list['name']
	                //'text' => 'Hello, world!'.$profile['displayName'] //回覆訊息
	            )
	        )
	    ));
			
			
		}
	}
}


?>
