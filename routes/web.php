<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamesController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return abort(404);
    return view('welcome');
});

Route::get('/james', [JamesController::class, 'james']);

Route::get('/user', [UserController::class, 'getUserJameses']);
