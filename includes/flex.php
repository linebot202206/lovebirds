<?php
/**
 * Copyright 2021 GoneTone
 *
 * Line Bot
 * 範例 Example Bot (Flex)
 *
 * 此範例 GitHub 專案：https://github.com/GoneToneStudio/line-example-bot-tiny-php
 * 此範例教學文章：https://blog.reh.tw/archives/988
 *
 * 官方文檔：https://developers.line.biz/en/reference/messaging-api/#flex-message
 */

/*
 * 可以使用 Line 官方提供的 Flex Message Simulator 排版
 * https://developers.line.biz/flex-simulator/
 *
 * Flex Message Simulator 是生成 Json，可以利用下方網頁快速轉換成陣列，當然你要手動寫也是可XDD
 * https://www.appdevtools.com/json-php-array-converter
 */

/*
陣列輸出 Json
==============================
{
    "type": "flex",
    "altText": "Example flex message template",
    "contents": {
        "type": "bubble",
        "hero": {
            "type": "image",
            "url": "https://api.reh.tw/images/gonetone/logos/icons/icon-256x256.png",
            "aspectRatio": "16:9",
            "size": "full",
            "aspectMode": "cover"
        },
        "body": {
            "type": "box",
            "layout": "vertical",
            "contents": [
                {
                    "type": "text",
                    "text": "Hello, world!",
                    "weight": "bold",
                    "size": "xl",
                    "margin": "md",
                    "wrap": true
                },
                {
                    "type": "text",
                    "text": "你好，世界！",
                    "wrap": true,
                    "color": "#e96bff"
                }
            ]
        },
        "footer": {
            "type": "box",
            "layout": "vertical",
            "contents": [
                {
                    "type": "button",
                    "action": {
                        "type": "uri",
                        "label": "教學文章",
                        "uri": "https://blog.reh.tw/archives/988#Flex-%E8%A8%8A%E6%81%AF"
                    },
                    "style": "secondary",
                    "color": "#FFD798"
                },
                {
                    "type": "button",
                    "action": {
                        "type": "uri",
                        "uri": "https://github.com/GoneToneStudio/line-example-bot-tiny-php",
                        "label": "GitHub"
                    }
                }
            ]
        },
        "size": "giga"
    }
}
==============================
*/
global $client, $message, $event;
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
                            "text" => "2022/10/04",
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
                'altText' => 'Example flex message template', //替代文字
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
                'altText' => 'Example flex message template', //替代文字
                'contents' => $contentsArray //Flex Message 內容
            )
        )
    ));
}
