<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TelegramApplicationService
{
    public function sendApplication(string $phone, string $name)
    {
        $text = "Новая заявка c сайта:\n".$name."\n".$phone;

        return Http::throw()
            ->post('https://api.telegram.org/bot'.config('services.telegram.bot_token').'/sendMessage', [
                'chat_id' => config('services.telegram.chat_id'),
                'text' => $text,
            ]);
    }
}
