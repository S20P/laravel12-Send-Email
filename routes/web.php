<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\SubscriberController;

Route::get('/send-subscribe-mail', [SubscriberController::class, 'subscribe'])->name('subscribe');