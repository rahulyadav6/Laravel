<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
class cookieController extends Controller
{
    public function setcookie(){
        $response = new Response("The cookie has been set");
        $response->cookie('name', 'Manoj', 1)->cookie('course', 'php',1);
        return $response;
    }
    public function getcookie(Request $request){
        $value1 = $request->cookie('name');
        $value2 = $request->cookie('course');
        return response()->json(['name' => $value1, 'course' =>$value2]);
        // return [$value1, $value2];
    }
    public function deletecookie(Request $request){
        $response = new Response("The cookie has been deleted");
        // $response->cookie('name',null,-1)->cookie('course', null,-1);
        $response->cookie(Cookie::forget('name'))->cookie(Cookie::forget('course'));
        return $response;
    }

    
}
