<?php

return [

    'title' => '登入',

    'heading' => '登入帳號',

    'actions' => [

        'register' => [
            'before' => '或',
            'label' => '註冊帳號',
        ],

        'request_password_reset' => [
            'label' => '忘記密碼？',
        ],

    ],

    'form' => [

        'email' => [
            'label' => 'E-Mail 位址',
        ],

        'password' => [
            'label' => '密碼',
        ],

        'remember' => [
            'label' => '記住我',
        ],

        'actions' => [

            'authenticate' => [
                'label' => '登入',
            ],

        ],

    ],

    'multi_factor' => [

        'heading' => '驗證您的身份',

        'subheading' => '為了繼續登入，您需要驗證您的身份。',

        'form' => [

            'provider' => [
                'label' => '您想要如何驗證？',
            ],

            'actions' => [

                'authenticate' => [
                    'label' => '確認登入',
                ],

            ],

        ],

    ],

    'messages' => [

        'failed' => '所提供的帳號密碼與資料庫中的記錄不相符。',

    ],

    'notifications' => [

        'throttled' => [
            'title' => '嘗試登入次數過多',
            'body' => '請在 :seconds 秒後重試。',
        ],

    ],

];
