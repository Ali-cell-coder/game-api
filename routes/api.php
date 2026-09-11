<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::post('/games/start', [GameController::class, 'start']);

Route::post('/games/{id}/end', [GameController::class, 'end']);

Route::get('/games/daily-top-10', [GameController::class, 'dailyTop10']);
