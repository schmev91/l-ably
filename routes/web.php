<?php

use App\Http\Controllers\AblyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('ably',[AblyController::class, 'trigger']);