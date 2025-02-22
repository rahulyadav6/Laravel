<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userFormController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/about/{name}', function ($name) {
    return view('about', ['name'=>$name]);
});

Route::get('/user', [UserController::class, 'getUser']);
Route::get('/user/{name}', [UserController::class, 'getUserName']);

Route::view('/user-form','user-form');
Route::post('/adduser',[userFormController::class, 'addUser']);



// Route::view('student/home','home');
// Route::get('student/show', [HomeController::class,'show']);
// Route::get('student/add', [HomeController::class,'add']);

Route::prefix('student')->group(function(){
    Route::view('/home','home');
    Route::get('/show', [HomeController::class,'show']);
    Route::get('/add', [HomeController::class,'add']);
});