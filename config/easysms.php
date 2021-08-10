<?php

return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 10.0,

    // 默认发送配置
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

        // 默认可用的发送网关
        'gateways' => [
            'aliyun',
        ],
    ],
    // 可用的网关配置
    'gateways' => [
        'errorlog' => [
            'file' => '/tmp/easy-sms.log',
        ],
        'aliyun' => [
            'access_key_id' => env('SMS_ALIYUN_ACCESS_KEY_ID', 'LTAI5t6LXufvpCWD1xJunBQd'),
            'access_key_secret' => env('SMS_ALIYUN_ACCESS_KEY_SECRET', 'cISbHfC4V3pn89z7OOxYfeWl5ZQLDc'),
            'sign_name' => '织梦行云',
        ],
    ],
];


