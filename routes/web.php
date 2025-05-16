<?php

use App\Http\Controllers\PagesController;
use App\Services\TelegramApplicationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/court-cases', 'courtCases')->name('court-cases');
});

Route::post('/application', function (Request $request, TelegramApplicationService $service) {
    $response = $service->sendApplication($request->phone, $request->name);
});
