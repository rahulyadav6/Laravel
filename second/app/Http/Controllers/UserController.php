<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        $users = ["Rahul", "Kaushal", "Dhiraj", "Anshu", "Bishal"];
        return view('user',['users'=>$users]);
    }
    function getUserName($name){
        return view('getuser', ['name' => $name]);
    }
}
