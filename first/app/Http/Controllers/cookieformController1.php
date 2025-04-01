<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class cookieformController1 extends Controller
{
    public function setcookie(){
        Cookie::queue('name', 'Rahul', 60); 
        Cookie::queue('email', 'rahul@gmail.com', 120); 

        return "Cookies set successfully!";

    }
    public function getcookie(){
        $cookie1 = Cookie::get('name');
        $cookie2 = Cookie::get('email');
        return "Name : $cookie1, Email : $cookie2";
    }
    public function removecookie(){
        Cookie::expire('name');
        Cookie::expire('email');

        return "Cookies removed successfully!";
    }

    public function setcookie2(Request $request){
        $name = $request->input('username'); 
        $email = $request->input('email'); 
        $phone = $request->input('phone'); 
        Cookie::queue('name', $name, 60); 
        Cookie::queue('email', $email, 120); 
        Cookie::queue('phone', $phone, 120); 
        return "Cookies set successfully! Form cookieform controller <br> Name: $name <br> Email: $email <br> Phone $phone";
    }
}
