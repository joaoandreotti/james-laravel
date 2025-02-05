<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamesController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/james', [JamesController::class, 'james']);

Route::get('/user', [UserController::class, 'getUserJameses']);
Route::get('/users', [UserController::class, 'users']);
