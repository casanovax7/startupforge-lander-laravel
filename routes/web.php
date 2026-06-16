<?php

use App\Http\Controllers\AccessRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::post('/request-access', [AccessRequestController::class, 'store'])
    ->name('request-access.store');
