<?php
global $client, $message, $event;

$type = explode(" ",$message['text'])[0];
if($type == "#清單"){
    require_once('./toDo.php');
}

/*
if (strtolower($message['text']) == "全部 必做清單") {
    /* 注意，Flex Message Simulator 生成並轉換的陣列貼在這邊 */
    $contentsArray = array(
        "type" => "bubble",
        "body" => array(
            "type" => "box",
            "layout" => "vertical",
            "contents" => array(
                array(
                    "type" => "text",
                    "text" => "全部",
                    "weight" => "bold",
                    "color" => "#1DB446",
                    "size" => "sm"
                ),
                array(
                    "type" => "text",
                    "text" => "必做清單",
                    "weight" => "bold",
                    "size" => "xxl",
                    "margin" => "md"
                ),
                array(
                    "type" => "text",
                    "text" => "政偉 & 欣慧",
                    "size" => "xs",
                    "color" => "#aaaaaa",
                    "wrap" => true
                ),
                array(
                    "type" => "separator",
                    "margin" => "xxl"
                ),
                array(
                    "type" => "box",
                    "layout" => "vertical",
                    "margin" => "xxl",
                    "spacing" => "sm",
                    "contents" => array(
                        array(
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => array(
                                array(
                                    "type" => "text",
                                    "text" => "❎",
                                    "size" => "sm",
                                    "color" => "#555555",
                                    "flex" => 1
                                ),
                                array(
                                    "type" => "text",
                                    "text" => "去澎湖看煙火牽手",
                                    "size" => "sm",
                                    "color" => "#111111",
                                    "flex" => 8
                                )
                            )
                        ),
                        array(
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => array(
                                array(
                                    "type" => "text",
                                    "text" => "❎",
                                    "size" => "sm",
                                    "color" => "#555555",
                                    "flex" => 1
                                ),
                                array(
                                    "type" => "text",
                                    "text" => "跟彼此父母吃飯",
                                    "size" => "sm",
                                    "color" => "#111111",
                                    "flex" => 8
                                )
                            )
                        ),
                        array(
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => array(
                                array(
                                    "type" => "text",
                                    "text" => "❎",
                                    "size" => "sm",
                                    "color" => "#555555",
                                    "flex" => 1
                                ),
                                array(
                                    "type" => "text",
                                    "text" => "在彼此家過夜",
                                    "size" => "sm",
                                    "color" => "#111111",
                                    "flex" => 8
                                )
                            )
                        ),
                        array(
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => array(
                                array(
                                    "type" => "text",
                                    "text" => "❎",
                                    "size" => "sm",
                                    "color" => "#555555",
                                    "flex" => 1
                                ),
                                array(
                                    "type" => "text",
                                    "text" => "認識彼此的朋友",
                                    "size" => "sm",
                                    "color" => "#111111",
                                    "flex" => 8
                                )
                            )
                        ),
                        array(
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => array(
                                array(
                                    "type" => "text",
                                    "text" => "❎",
                                    "size" => "sm",
                                    "color" => "#555555",
                                    "flex" => 1
                                ),
                                array(
                                    "type" => "text",
                                    "text" => "穿情侶衣約會",
                                    "size" => "sm",
                                    "color" => "#111111",
                                    "flex" => 8
                                )
                            )
                        ),
                        array(
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => array(
                                array(
                                    "type" => "text",
                                    "text" => "❎",
                                    "size" => "sm",
                                    "color" => "#555555",
                                    "flex" => 1
                                ),
                                array(
                                    "type" => "text",
                                    "text" => "在情人節當天吃貳樓",
                                    "size" => "sm",
                                    "color" => "#111111",
                                    "flex" => 8
                                )
                            )
                        ),
                        array(
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => array(
                                array(
                                    "type" => "text",
                                    "text" => "❎",
                                    "size" => "sm",
                                    "color" => "#555555",
                                    "flex" => 1
                                ),
                                array(
                                    "type" => "text",
                                    "text" => "專屬戒指",
                                    "size" => "sm",
                                    "color" => "#111111",
                                    "flex" => 8
                                )
                            )
                        ),
                        array(
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => array(
                                array(
                                    "type" => "text",
                                    "text" => "❎",
                                    "size" => "sm",
                                    "color" => "#555555",
                                    "flex" => 1
                                ),
                                array(
                                    "type" => "text",
                                    "text" => "買房子",
                                    "size" => "sm",
                                    "color" => "#111111",
                                    "flex" => 8
                                )
                            )
                        ),
                        array(
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => array(
                                array(
                                    "type" => "text",
                                    "text" => "❎",
                                    "size" => "sm",
                                    "color" => "#555555",
                                    "flex" => 1
                                ),
                                array(
                                    "type" => "text",
                                    "text" => "一起出國",
                                    "size" => "sm",
                                    "color" => "#111111",
                                    "flex" => 8
                                )
                            )
                        ),
                        array(
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => array(
                                array(
                                    "type" => "text",
                                    "text" => "❎",
                                    "size" => "sm",
                                    "color" => "#555555",
                                    "flex" => 1
                                ),
                                array(
                                    "type" => "text",
                                    "text" => "為對方下廚",
                                    "size" => "sm",
                                    "color" => "#111111",
                                    "flex" => 8
                                )
                            )
                        ),
                        array(
                            "type" => "box",
                            "layout" => "horizontal",
                            "contents" => array(
                                array(
                                    "type" => "text",
                                    "text" => "❎",
                                    "size" => "sm",
                                    "color" => "#555555",
                                    "flex" => 1
                                ),
                                array(
                                    "type" => "text",
                                    "text" => "一起泡溫泉",
                                    "size" => "sm",
                                    "color" => "#111111",
                                    "flex" => 8
                                )
                            )
                        )
                    )
                ),
                array(
                    "type" => "separator",
                    "margin" => "xxl"
                ),
                array(
                    "type" => "box",
                    "layout" => "horizontal",
                    "margin" => "md",
                    "contents" => array(
                        array(
                            "type" => "text",
                            "text" => "建立時間",
                            "size" => "xs",
                            "color" => "#aaaaaa",
                            "flex" => 0
                        ),
                        array(
                            "type" => "text",
                            "text" => "2022/10/04",
                            "color" => "#aaaaaa",
                            "size" => "xs",
                            "align" => "end"
                        )
                    )
                ),
                array(
                    "type" => "box",
                    "layout" => "horizontal",
                    "margin" => "md",
                    "contents" => array(
                        array(
                            "type" => "text",
                            "text" => "更新時間",
                            "size" => "xs",
                            "color" => "#aaaaaa",
                            "flex" => 0
                        ),
                        array(
                            "type" => "text",
                            "text" => "2022/10/05",
                            "color" => "#aaaaaa",
                            "size" => "xs",
                            "align" => "end"
                        )
                    )
                )
            )
        ),
        "styles" => array(
            "footer" => array(
                "separator" => true
            )
        )
    );

    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'flex', //訊息類型 (flex)
                'altText' => '全部 必做清單', //替代文字
                'contents' => $contentsArray //Flex Message 內容
            )
        )
    ));
}elseif (strtolower($message['text']) == "未做 必做清單") {
        $contentsArray = array(
            "type" => "bubble",
            "body" => array(
                "type" => "box",
                "layout" => "vertical",
                "contents" => array(
                    array(
                        "type" => "text",
                        "text" => "未做",
                        "weight" => "bold",
                        "color" => "#1DB446",
                        "size" => "sm"
                    ),
                    array(
                        "type" => "text",
                        "text" => "必做清單",
                        "weight" => "bold",
                        "size" => "xxl",
                        "margin" => "md"
                    ),
                    array(
                        "type" => "text",
                        "text" => "政偉 & 欣慧",
                        "size" => "xs",
                        "color" => "#aaaaaa",
                        "wrap" => true
                    ),
                    array(
                        "type" => "separator",
                        "margin" => "xxl"
                    ),
                    array(
                        "type" => "box",
                        "layout" => "vertical",
                        "margin" => "xxl",
                        "spacing" => "sm",
                        "contents" => array(
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "01.",
                                        "size" => "sm",
                                        "color" => "#555555",
                                        "flex" => 1,
                                        "weight" => "bold"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "去澎湖看煙火牽手",
                                        "size" => "sm",
                                        "color" => "#111111",
                                        "flex" => 8
                                    )
                                )
                            ),
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "02.",
                                        "size" => "sm",
                                        "color" => "#555555",
                                        "flex" => 1,
                                        "weight" => "bold"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "跟彼此父母吃飯",
                                        "size" => "sm",
                                        "color" => "#111111",
                                        "flex" => 8
                                    )
                                )
                            ),
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "03.",
                                        "size" => "sm",
                                        "color" => "#555555",
                                        "flex" => 1,
                                        "weight" => "bold"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "在彼此家過夜",
                                        "size" => "sm",
                                        "color" => "#111111",
                                        "flex" => 8
                                    )
                                )
                            ),
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "04.",
                                        "size" => "sm",
                                        "color" => "#555555",
                                        "flex" => 1,
                                        "weight" => "bold"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "認識彼此的朋友",
                                        "size" => "sm",
                                        "color" => "#111111",
                                        "flex" => 8
                                    )
                                )
                            ),
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "05.",
                                        "size" => "sm",
                                        "color" => "#555555",
                                        "flex" => 1,
                                        "weight" => "bold"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "穿情侶衣約會",
                                        "size" => "sm",
                                        "color" => "#111111",
                                        "flex" => 8
                                    )
                                )
                            ),
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "06.",
                                        "size" => "sm",
                                        "color" => "#555555",
                                        "flex" => 1,
                                        "weight" => "bold"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "在情人節當天吃貳樓",
                                        "size" => "sm",
                                        "color" => "#111111",
                                        "flex" => 8
                                    )
                                )
                            ),
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "07.",
                                        "size" => "sm",
                                        "color" => "#555555",
                                        "flex" => 1,
                                        "weight" => "bold"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "專屬戒指",
                                        "size" => "sm",
                                        "color" => "#111111",
                                        "flex" => 8
                                    )
                                )
                            ),
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "08.",
                                        "size" => "sm",
                                        "color" => "#555555",
                                        "flex" => 1,
                                        "weight" => "bold"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "買房子",
                                        "size" => "sm",
                                        "color" => "#111111",
                                        "flex" => 8
                                    )
                                )
                            ),
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "09.",
                                        "size" => "sm",
                                        "color" => "#555555",
                                        "flex" => 1,
                                        "weight" => "bold"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "一起出國",
                                        "size" => "sm",
                                        "color" => "#111111",
                                        "flex" => 8
                                    )
                                )
                            ),
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "10.",
                                        "size" => "sm",
                                        "color" => "#555555",
                                        "flex" => 1,
                                        "weight" => "bold"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "為對方下廚",
                                        "size" => "sm",
                                        "color" => "#111111",
                                        "flex" => 8
                                    )
                                )
                            ),
                            array(
                                "type" => "box",
                                "layout" => "horizontal",
                                "contents" => array(
                                    array(
                                        "type" => "text",
                                        "text" => "11.",
                                        "size" => "sm",
                                        "color" => "#555555",
                                        "flex" => 1,
                                        "weight" => "bold"
                                    ),
                                    array(
                                        "type" => "text",
                                        "text" => "一起泡溫泉",
                                        "size" => "sm",
                                        "color" => "#111111",
                                        "flex" => 8
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            "styles" => array(
                "footer" => array(
                    "separator" => true
                )
            )
        );

    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'flex', //訊息類型 (flex)
                'altText' => '未做 必做清單', //替代文字
                'contents' => $contentsArray //Flex Message 內容
            )
        )
    ));
}
*/
