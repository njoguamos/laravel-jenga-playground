<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::view('/','home')->name('home');

Route::get('/check-out',Controllers\CheckOutController::class)->name( 'check-out');
Route::get('/payment-callback',Controllers\PaymentCallbackController::class)->name( 'payment-callback');

Route::get('/forex',[Controllers\ForexRatesController::class,'create'])->name( 'forex');
Route::post('/forex',[Controllers\ForexRatesController::class,'store']);

Route::get('/identity',[Controllers\IDVerificationController::class,'create'])->name( 'identity');
Route::post('/identity',[Controllers\IDVerificationController::class,'store']);
