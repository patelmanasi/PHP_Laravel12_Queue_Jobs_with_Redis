<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueueController;

Route::get('/', [QueueController::class, 'index']);
Route::post('/send-mail', [QueueController::class, 'sendMail'])->name('send.mail');

