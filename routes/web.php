<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'home']);

Route::get('/create-user', [UserController::class, 'create']);


Route::post('/create', [UserController::class, 'store']);
