<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstControler extends Controller
{
    public function index1(){
        $name = "Rahul";
        return "The name is $name";
    }
    public function index2($name){
        return "The name is ";
    }
    public function index3($name, $score){
        return view('test', compact('name', 'score'));
    }
    public function product(){
        return view('product');
    }
}
