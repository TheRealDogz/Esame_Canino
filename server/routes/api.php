<?php

use App\Http\Controllers\LandsController;
use Illuminate\Support\Facades\Route;


Route::get('/lands', [LandsController::class, 'list']);
Route::get('/lands/{id}', [LandsController::class, 'detail']);
Route::post('/lands', [LandsController::class, 'create']);
Route::put('/lands/{id}', [LandsController::class, 'modify']);
Route::delete('/lands/{id}', [LandsController::class, 'delete']);
