<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\userFormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdController;
use App\Http\Controllers\PostController;

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


// database


//Working with ORM
/*GET /prods (index) -- display all the records
GET /prods/create (create) -- display the form to enter the data from the user
GET /prods/1 (show) -- display a particular prod
POST /prods (store) -- store the data into table
GET /prods/1/edit (edit) -- open the form to update the data
PATCH /prods/1 (update) -- update the record with ID 1
DELETE /prods/1 (destroy) -- to delete specific product
*/
Route::resource('prods', ProdController::class);   
Route::resource('posts', PostController::class);   



