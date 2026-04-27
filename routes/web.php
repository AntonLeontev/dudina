<?php

use App\Http\Controllers\PagesController;
use App\Services\TelegramApplicationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/court-cases', 'courtCases')->name('court-cases');
});

Route::post('/application', function (Request $request, TelegramApplicationService $service) {
    $response = Http::timeout(3)->asForm()->post('https://smartcaptcha.cloud.yandex.ru/validate', [
        'secret' => config('services.ya_captcha.server_key'),
        'token' => $request->input('smart-token'),
    ]);

    if ($response->status() !== 200 || ($response->json('status') ?? '') !== 'ok') {
        return response()->json(['message' => 'Captcha validation failed'], 422);
    }

    $service->sendApplication($request->phone, $request->name);

    return response()->noContent();
});
