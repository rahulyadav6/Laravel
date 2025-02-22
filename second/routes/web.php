<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about/{name}', function ($name) {
    return view('about', ['name'=>$name]);
});

Route::get('/user', [UserController::class, 'getUser']);
Route::get('/user/{name}', [UserController::class, 'getUserName']);
