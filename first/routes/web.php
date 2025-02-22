<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstControler;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserListController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function(){
    return view('about');
});

Route::get('/home', function(){
    return view('home');
});

Route::get('/home/{name}', function($name){
    return 'Hello from ' .$name;
});

// Sharing data globally 
Route::get('/test', function(){
    return view('test', ['name' => 'Kaushal']);
});
Route::get('/test1', function(){
    return view('test1');
})->name('route1');



// through query params

// Route::get('something/{name?}', function($name=null){
//     return view('test', ['name' => $name]);
// });


Route::get('something/{name}/{score?}', function($name, $score=100){
    return view('test', ['name' => $name, 'score' => $score]);
})->name('r2');


// Normal Redirections 
Route::redirect('redirect','test1');
Route::redirect('redirect2/{name?}','/something/{name?}');


// Named redirections

Route::get('redirect1', function(){
    return redirect()->route('route1');
});

Route::get('redirect3/{name}/{score?}', function($name, $score){
    return redirect()->route('r2',['name' => $name, 'score'=>   $score]);
});


// ----------------------------------------------------------------//

Route::get('checking', function(){
    return "Just checking";
})->name('r4');

Route::get('redirect4', function(){
    return redirect()->route('r4');
});


// -------------------------------------------------------//
Route::get('testing/{name}/{value}', function($name,$value){
    return "The name is $name and the value is $value";
})->name('r7');

Route::get('redirect7/{name}/{value}', function($name, $value){
    return redirect("testing/{$name}/{$value}");
});

/*  ---------------------------------------------------------*/
/* Attaching headers */
Route::get('data',function(){
    return response("This is the student data")->header('email', 'rahul@gmail.com')->header('password','rahul@123');
});

Route::get('somedata', function(){
    return response("This is also some student data")->withHeaders
    (['email'=>'rahulyadav@gmail.com', 'password'=>'rahul123', 'data3'=>'value3']);
});
Route::get('somedata1', function(){
    return response()->json(['name'=>"Rahul", 'state'=>'CA'])->withHeaders
    (['email'=>'rahulyadav@gmail.com', 'password'=>'rahul123', 'data3'=>'value3']);
});





/* CLASSWORK  */
/* Question: Create a route /empdata and pass two route parameters 'empname' and 'empsalary'. 'empname' is required parameter while 'empsalary' is the optional parameter. This data must be shared with a view and print their values. Now attach the view with the response mehtod and attach 2 customezed headers. */


Route::get('/empdata/{empname}/{empsalry?}', function($empname, $empsalary = 0){
    return response()->view('empdata', ['empname' => $empname, 'empsalary' => $empsalary])->withHeaders
    (['email'=>'rahulyadav@gmail.com', 'password'=>'rahul123']);
});


/* cookies */
Route::get('check-cookie', function(){
    return response("The cooke is set")->cookie('name','somevalue',1);
});

// controlers

Route::get('/first3/{name}/{score}',[FirstControler::class, 'index3']);
Route::get("/product/{productName}", [ProductController::class, 'products']);
// Route::get("/sac", singleActionController::class); // no need to define to function in singleactioncontroller

Route::get('/details/{student}', [detailsController::class, 'details']);


/* redirection using controllers */



/* route parameter constrains */
Route::get('users/{regno}', function ($regno){
    return "Welcome user, $regno";
})->where('regno', '[0-9]+');

Route::get('users1/{name}', function ($name){
    return "Welcome $name";
})->where('name', '[a-zA-Z \s -]+');


Route::get('user3/{name}/{regno}', function ($name, $regno,){
    return "Welcome $name you regno is $regno";
})->where('name', '[a-zA-Z \s -]+')->where('regno', '[0-9]+');

Route::get('user4/{name}', function($name){
    return "Welcome user - $name";
})->whereAlpha('name');


// blade templates
    Route::get("/first/{username}", function ($username){
    return view( 'first', ['username' =>$username]);
});
// Route::get("/switch/{i}", function ($i){
//     return view( 'switch1', ['i' =>$i]);
// });


Route::get('/performance/:{marks}', function ($marks){
    return view('performance', ['marks' => $marks]);
});

Route::get('/layout', function(){
    return view('layout');
});


/* Template inheritance */
Route::get('myhome', function(){
    return view("home");
});
Route::get('ourproducts', function(){
    $products = [
        ['type' => 'gadgets', 'name' => 'smart watch', 'brand' => 'samsung', 'image' => "https://m.media-amazon.com/images/I/61ZjlBOp+rL.jpg"],
        ['type' => 'kids', 'name' => 'plushies', 'brand' => 'abc', 'image' => "https://m.media-amazon.com/images/I/71dfLBKaoUL._AC_UF1000,1000_QL80_.jpg"],
        ['type' => 'electronics', 'name' => 'TV', 'brand' => 'HTC', 'image' => "https://cdn.jiostore.online/v2/jmd-asp/jdprod/wrkr/jioretailer/products/pictures/item/free/original/eYeIBBxuzX-bpl-32-hd-television-492166140-i-1-1200wx1200h.jpeg"],
    ];
    return view("products", ['products' => $products]);
});
Route::get('ourproducts1', function(){
    $products = [
        ['type' => 'gadgets', 'name' => 'smart watch', 'brand' => 'samsung', 'image' => asset('images/image1.jpg')],
        ['type' => 'kids', 'name' => 'plushies', 'brand' => 'abc', 'image' => asset('images/image1.jpg')],
        ['type' => 'electronics', 'name' => 'TV', 'brand' => 'HTC','image' => asset('images/image1.jpg')],
    ];
    return view("products", ['products' => $products]);
});
Route::get('aboutus', function(){
    return view("about");
});
Route::get('contactus', function(){
    return view("contact");
});


// Advance routing (grooup routes according to route prefix)
Route::prefix('cafehideout')->group(function () {
    Route::get('register', function () {
        return "Welcome to Register page";
    });
    Route::get('login', function () {
        return "Welcome to login page";
    });
    Route::get('items', function () {
        return "Welcome to items page";
 });
});

/* Advance routing (grouping routes according to named prefix) */
Route::name('cafehideout')->group(function(){
    Route::get('register', function(){
        return "This is registration page";
    })->name('reg');
    Route::get('login', function(){
        return "This is sign in page";
    })->name('log');
    Route::get('items', function(){
        return "This is items page";
    })->name('items');
});
Route::get("redirection", function(){
    return redirect()->route('cafehideout.reg');
});

/* Advance routing (grouping routes according to subdomain ) */



/*  */
Route::controller(OrderController::class)->group(function(){
    Route::get('delivered', 'delivered');
    Route::get('pending', 'pending');
});

Route::controller(OrderController::class)->group(function(){
    Route::prefix('cafehideout')->group(function(){
        Route::get('delivered', 'delivered');
        Route::get('pending', 'pending');
    });
});

/*Assignment */
Route::get("user", [UserListController::class, 'users']);