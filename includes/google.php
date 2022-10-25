<?php
global $client, $message, $event, $conn;
//require_once 'vendor/autoload.php';
//require_once 'vendor/model/google/GoogleCalendar.php';
require_once 'vendor/model/google/GoogleCalendar.php';
use Model\Google\GoogleCalendar;
date_default_timezone_set('Asia/Taipei');

$googleCalendar = new GoogleCalendar();
$calendar = $googleCalendar->list();

$data = [];

foreach ($calendar as $value) {
	//$value['start'] = $value['start']->addHours(24);
	$start = strtotime($value['start']);
	$month = date('m', strtotime($value['start']));
	$data[] = [
		'title' => $value['summary'],
		'startMonth' => $month,
		//'startTime' => date('n', strtotime($value['start'])),
		'startDate' => date('d', strtotime($value['start'])),
		'startTime' => date('H:i', $start),
		'endMonth' => date('m', strtotime($value['end'])),
		'endDate' => date('d', strtotime($value['end'])),
		'endTime' => date('H:i', strtotime($value['end'])),
		//'startDate' => date('d', strtotime($value['end'])),
		'timestamp' => $start,
		'start' => $value['start'],
		'location' => $value['location'],
		//'timestamp' => strtotime($value['end']),
	];
}
array_multisort(array_column($data,'timestamp'),SORT_ASC,$data);

$list = [];
foreach ($data as $value) {
	$month = $value['startMonth'];
	$list[$month][] = $value;
}

$out = [];
foreach ($list as $month => $value) {
	$content = [];
	foreach ($value as $data) {
		$detailContent = [];
		$detailContent[] = [
            "type" => "box",
            "layout" => "baseline",
            "spacing" => "sm",
            "contents" => [
                [
                    "type" => "text",
                    "text" => "時間",
                    "color" => "#aaaaaa",
                    "size" => "md",
                    "flex" => 1
                ],
                [
                    "type" => "text",
                    "text" => $data['startTime']."-".$data['endTime'],
                    "wrap" => true,
                    "color" => "#666666",
                    "size" => "md",
                    "flex" => 5
                ]
            ]
        ];
		if($data['location']){
			$detailContent[] = [
                "type" => "box",
                "layout" => "baseline",
                "spacing" => "sm",
                "contents" => [
                    [
                        "type" => "text",
                        "text" => "地點",
                        "color" => "#aaaaaa",
                        "size" => "md",
                        "flex" => 1
                    ],
                    [
                        "type" => "text",
                        "text" => $data['location'],
                        "wrap" => true,
                        "color" => "#666666",
                        "size" => "md",
                        "flex" => 5
                    ]
                ]
            ];
            //unset($place);
		}
		$place = "";
		$detail = [
			[
                "type" => "text",
                "text" => $data['startMonth']."/".$data['startDate']." ".$data['title'],
                "weight" => "bold",
                "size" => "xl"
            ],
            [
                "type" => "box",
                "layout" => "vertical",
                "margin" => "lg",
                "spacing" => "sm",
                "contents" => $detailContent
                    
            ],
            [
                "type" => "separator",
                "margin" => "xxl"
            ]
		];
		$content = array_merge($content, $detail);
	}
	$out[] = [
	    "type" => "bubble",
	    "size" => "kilo",
	    "header" => [
	        "type" => "box",
	        "layout" => "vertical",
	        "contents" => [
	            [
	                "type" => "text",
	                "text" => $month."月",
	                "color" => "#ffffff",
	                "align" => "start",
	                "size" => "xl",
	                "gravity" => "center",
	                "offsetStart" => "md"
	            ]
	        ],
	        "backgroundColor" => "#27ACB2",
	        "paddingTop" => "16px",
	        "paddingAll" => "12px",
	        "paddingBottom" => "10px"
	    ],
	    "body" => [
	        "type" => "box",
	        "layout" => "vertical",
	        "contents" => $content,
	        "spacing" => "md",
	        "paddingAll" => "10px",
	        "paddingStart" => "xxl"
	    ],
	    "styles" => [
	        "footer" => [
	            "separator" => false
	        ]
	    ]
	];
}

//print_r($list);
//print_r($calendar);




$carousel = [
    "type" => "carousel",
    "contents" => $out
];


//echo json_encode($test);

$client->replyMessage(array(
    'replyToken' => $event['replyToken'],
    'messages' => array(
        array(
            'type' => 'flex', //訊息類型 (flex)
            'altText' => '月曆', //替代文字
            'contents' => $carousel //Flex Message 內容
        )
    )
));


?>