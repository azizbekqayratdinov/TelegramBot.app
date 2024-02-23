<?php

use App\Telegram\Handler;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});


    Http::post(
        'https://api.telegram.org/bot7155325665:AAGk5xV0tSamOo0UdI1GRRscNyhLQL3HSwA/sendMessage',
        [
            'chat_id' => 'CHAT_ID',     //Chat id jaziw kerek
            'text' => 'TEXT'            //Message jaziw kerek
        ]
    )->json();

    
//php artisan telegraph:set-webhook

