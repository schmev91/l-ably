<?php

use App\Events\Notify;
use App\Http\Controllers\AblyController;
use Illuminate\Contracts\Broadcasting\Broadcaster;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('broadcast', function(){
    broadcast(new Notify('notification','Louise Francoise de la Baume le Blanc de la Valliere'));
    return response()->json('success');
});

Route::get('ably',[AblyController::class, 'trigger']);
Route::get('ably/auth',[AblyController::class, 'auth']);
