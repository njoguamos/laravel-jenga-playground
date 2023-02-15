<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/check-out', Controllers\CheckOutController::class)->name('check-out');
Route::get('/payment-callback', Controllers\PaymentCallbackController::class)->name('payment-callback');

Route::get('/forex', [Controllers\ForexRatesController::class, 'create'])->name('forex');
Route::post('/forex', [Controllers\ForexRatesController::class, 'store']);

Route::get('/identity', [Controllers\IDVerificationController::class, 'create'])->name('identity');
Route::post('/identity', [Controllers\IDVerificationController::class, 'store']);

Route::get('/account-inquiry', [Controllers\AccountInquiryController::class, 'create'])->name('account-inquiry');
Route::post('/account-inquiry', [Controllers\AccountInquiryController::class, 'store']);
