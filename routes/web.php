<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create-user', [UserController::class, 'create']);


Route::post('/create', [UserController::class, 'store']);