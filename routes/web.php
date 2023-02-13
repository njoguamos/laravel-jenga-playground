<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::view(uri: '/', view: 'home');

Route::get('/forex',[Controllers\ForexRatesController::class,'create'])->name('forex');
Route::post('/forex',[Controllers\ForexRatesController::class,'store']);
