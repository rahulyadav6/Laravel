<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class cookieformController extends Controller
{
    public function setcookiethroughform(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');

        $response = new Response("The cookie has been set through form");
        $response->cookie('name', $name, 10); 
        $response->cookie('email', $email, 10);
        return $response;
    }
}
