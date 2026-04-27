<?php

return [
    'telegram' => [
        'chat_id' => env('TELEGRAM_CHAT_ID'),
        'bot_token' => env('TELEGRAM_BOT_TOKEN'),
    ],

    'ya_captcha' => [
        'server_key' => env('YANDEX_CAPTCHA_SERVER_KEY'),
        'client_key' => env('YANDEX_CAPTCHA_CLIENT_KEY'),
    ],
];
